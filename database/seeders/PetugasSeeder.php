<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('petugas')->insert([
            'nama_petugas' => 'Rahman',
            'username' => 'Admin',
            'password' => Hash::make('Admin123'),
            'role' => 'administrator',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
