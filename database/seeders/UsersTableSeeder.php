<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data user yang akan di-seed
        $user = [
            'username' => 'aslamthrq',
            'email' => 'aslamthrq@example.com',
            'password' => bcrypt('password123'), // Ubah sesuai kebutuhan Anda
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        // Insert data user ke dalam tabel users dan dapatkan ID-nya
        $userId = DB::table('users')->insertGetId($user);

        // Data role_user yang akan di-seed
        $roleUsers = [
            ['user_id' => $userId, 'role_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()], // Admin
            ['user_id' => $userId, 'role_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()], // Participant
            ['user_id' => $userId, 'role_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()], // Recruiter
        ];

        // Insert data role_user ke dalam tabel role_user
        DB::table('role_users')->insert($roleUsers);
    }
}
