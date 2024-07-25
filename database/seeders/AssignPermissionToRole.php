<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AssignPermissionToRole extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $permission=  Permission::where('name','view_dashboard')->first();
      $role=  Role::where('name','admin')->first();
      $permission->assignRole($role);

    }
}
