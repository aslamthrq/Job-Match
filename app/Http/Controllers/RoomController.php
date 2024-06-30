<?php

namespace App\Http\Controllers;

use App\Models\path_types;
use App\Models\rooms;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function selectionRoom()
    {
        $pathTypes = path_types::all();
        return view('recruiter.postRoom', compact('pathTypes'));
    }

    // Method untuk menyimpan data room baru
    public function store(Request $request)
    {

        // Validasi data input
        $validatedData = $request->all();
        // dd($validatedData);


        // Simpan data ke dalam database
        $room = new rooms();
        $room->company_id = auth()->user()->companyUser->company_id; // Ambil ID perusahaan dari pengguna yang sedang login
        $room->position_name = $validatedData['position_name'];
        $room->departement = $validatedData['departement'];
        $room->years_of_experience_criteria = $validatedData['years_of_experience_criteria'];
        $room->total_open_position = $validatedData['total_open_position'];
        $room->salary = $validatedData['salary'];
        $room->deadline = \Carbon\Carbon::createFromFormat('d-m-Y', $validatedData['deadline']);
        $room->work_system = $validatedData['work_system'];
        $room->working_hours = $validatedData['working_hours'];
        $room->access_rights = $validatedData['access_rights'];
        $room->description = $validatedData['description'];
        $room->requirements = $validatedData['requirements'];
        $room->save();
        // Redirect atau berikan respons sesuai kebutuhan aplikasi Anda
        return redirect()->back()->with('success', 'Data lowongan berhasil disimpan.');
    }


    public function selectionRoomDetail()
    {
        return view('recruiter.postRoomDetail');
    }
}
