<?php

namespace App\Http\Controllers;

use App\Models\companies;
use App\Models\company_user;
use App\Models\path_types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class recruiterController extends Controller
{
    public function index()
    {
        return view('recruiter.index');
    }
    public function showProfile()
    {
        return view('recruiter.profile');
    }
    public function joinCompany(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_id' => 'required|exists:companies,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = Auth::user();

        // Check if user is a recruiter
        if (!$user->roles()->where('name', 'recruiter')->exists()) {
            return response()->json(['message' => 'You must be a recruiter to join a company'], 403);
        }

        // Link user with company
        company_user::create([
            'user_id' => $user->id,
            'company_id' => $request->company_id,
        ]);

        return response()->json(['message' => 'Successfully joined the company'], 200);
    }

    public function createCompany(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_name' => 'required|string|max:255',
            'company_address' => 'string|max:255|nullable',
            'company_website' => 'string|max:255|nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = Auth::user();

        // Check if user is a recruiter
        if (!$user->roles()->where('name', 'recruiter')->exists()) {
            return response()->json(['message' => 'You must be a recruiter to create a company'], 403);
        }

        $company = companies::create([
            'company_name' => $request->company_name,
            'company_address' => $request->company_address,
            'company_website' => $request->company_website,
        ]);

        // Link user with company
        company_user::create([
            'user_id' => $user->id,
            'company_id' => $company->id,
        ]);

        return response()->json(['message' => 'Company created and joined successfully'], 201);
    }

    

    public function companyProfile()
    {
        // Ambil user yang sedang login
        $user = Auth::user();
        // dd($user->id);


        // Ambil data perusahaan yang terkait dengan user yang sedang login
        $companyUser = $user->companyUser()->first();
        // dd($companyUser);

        if (!$companyUser) {
            return redirect()->back()->with('error', 'Company profile not found.');
        }

        $company = $companyUser->company;

        // Kirim data perusahaan ke view
        return view('recruiter.companyProfile', compact('company'));
    }

    public function candidate()
    {
        return view('recruiter.talentPool');
    }
    public function companySettings()
    {
        return view('recruiter.settingsProfile');
    }
}
