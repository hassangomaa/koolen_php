<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserPermissionsSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();
        $permissions = Permission::all();

        // Assign some permissions to each user
        foreach ($users as $user) {
            $userPermissions = $permissions->random(5)->pluck('id')->toArray();
            $user->permissions()->sync($userPermissions);
        }
    }
}
