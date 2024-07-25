<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AssignRoleToUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user=  User::where('username','administrator')->first();
       $role=  Role::where('name','admin')->first();
       if ($role) {
        $user->assignRole($role);

        echo "Role 'admin' assigned to user 'administrator' successfully.";
    } else {
        echo "Role 'admin' not found.";
    }
    }
}
