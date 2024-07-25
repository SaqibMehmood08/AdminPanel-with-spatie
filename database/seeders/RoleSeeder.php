<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
            'outlet_id'=>1,
            'guard_name'=>'web'
        ]);
        Role::create([
            'name' => 'company1',
            'outlet_id'=>1,
            'guard_name'=>'web'
        ]);
    }
}