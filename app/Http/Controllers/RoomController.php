<?php

namespace App\Http\Controllers;

use App\Models\path_types;
use App\Models\rooms;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function selectionRoom()
    {
        // Ambil user yang sedang login
        $user = auth()->user();

        // Ambil ID company dari user yang sedang login
        $company_id = $user->companyUser->company_id;

        // Ambil semua room yang terkait dengan company
        $rooms = rooms::where('company_id', $company_id)->get();

        // Return view dengan data rooms
        return view('recruiter.postRoom', compact('rooms'));
    }

    // Method untuk menyimpan data room baru
    public function store(Request $request)
    {
        $roomInput = $request->all();
        // dd($roomInput);


        $room = new rooms();
        $room->company_id = auth()->user()->companyUser->company_id; // Ambil ID perusahaan dari pengguna yang sedang login
        $room->position_name = $roomInput['position_name'];
        $room->departement = $roomInput['departement'];
        $room->years_of_experience_criteria = $roomInput['years_of_experience_criteria'];
        $room->total_open_position = $roomInput['total_open_position'];
        $room->salary = $roomInput['salary'];
        $room->deadline = \Carbon\Carbon::createFromFormat('d-m-Y', $roomInput['deadline']);
        $room->work_system = $roomInput['work_system'];
        $room->working_hours = $roomInput['working_hours'];
        $room->access_rights = $roomInput['access_rights'];
        $room->description = $roomInput['description'];
        $room->requirements = $roomInput['requirements'];
        $room->save();
        
        return redirect()->back()->with('success', 'Data lowongan berhasil disimpan.');
    }


    public function selectionRoomDetail()
    {
        return view('recruiter.postRoomDetail');
    }
}
