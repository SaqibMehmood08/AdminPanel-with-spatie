<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'username' => 'administrator',
            'email' => 'admin@dinehome.com',
            'password' => Hash::make('00000000'),
        ]);
        // User::create([
        //     'name' => 'Company1',
        //     'username' => 'company1',
        //     'email' => 'company1@dinehome.com',
        //     'password' => Hash::make('00000000'),
        // ]);
    }
}
