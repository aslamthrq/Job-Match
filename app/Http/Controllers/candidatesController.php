<?php

namespace App\Http\Controllers;

use App\Models\candidate_contact;
use App\Models\candidates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class candidatesController extends Controller
{
    public function index()
    {
        return view('candidates.index');
    }
    public function showProfile()
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        // Ambil profil kandidat dan data kontaknya
        $profile = $user->candidate;
        $contact = $profile->contact;
        // dd($contact);

        // dd($profile);
        // dd($contact);

        return view('candidates.profile', compact('profile', 'contact'));
    }

    // Method untuk upload foto profil
    public function updatePhoto(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'profile-image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $user = Auth::user();
        $profile = $user->candidate; // Asumsikan kandidat memiliki relasi profile
        // dd($profile);

        if ($request->hasFile('profile-image')) {
            // Hapus foto lama jika ada
            if ($profile->photo_path && Storage::exists('public/' . $profile->photo_path)) {
                Storage::delete('public/' . $profile->photo_path);
            }

            // Simpan foto baru
            $file = $request->file('profile-image');
            $path = $file->store('profile_images', 'public');

            // Update path foto di profil kandidat
            $profile->photo_path = $path;
            $profile->save();
        }

        return redirect()->route('dashboard.kandidat.showProfile')->with('success', 'Foto profil berhasil diperbarui.');
    }

    public function updateProfile(Request $request)
    {
        // Retrieve the candidate ID from the authenticated user
        $userId = auth()->user()->id;
        $candidate = candidates::where('user_id', $userId)->firstOrFail();
        $candidateId = $candidate->id;

        // Validate the request data
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'headline' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'telephone' => 'nullable|string|max:20',
            'website' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:20',
        ]);

        // Find the candidate and contact records
        $contact = candidate_contact::where('candidate_id', $candidateId)->firstOrFail();

        // Update the candidate record
        $candidate->update([
            'full_name' => $validatedData['full_name'],
            'address' => $validatedData['address'],
            'headline' => $validatedData['headline'],
            'bio' => $validatedData['bio'],
        ]);

        // Update the contact record
        $contact->update([
            'telephone' => $validatedData['telephone'],
            'website' => $validatedData['website'],
            'instagram' => $validatedData['instagram'],
            'linkedin' => $validatedData['linkedin'],
            'whatsapp' => $validatedData['whatsapp'],
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function lowongan()
    {
        return view('candidates.jobVacancy');
    }
    public function status()
    {
        return view('candidates.status');
    }
    public function statusDetail()
    {
        return view('candidates.statusDetail');
    }
}
