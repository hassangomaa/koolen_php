<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the permissions to seed
        $permissions = [
            ['name' => 'manage_users', 'label' => 'Manage Users'],
            ['name' => 'manage_posts', 'label' => 'Manage Posts'],
            ['name' => 'manage_comments', 'label' => 'Manage Comments'],
            ['name' => 'create_posts', 'display_name' => 'Create Posts'],
            ['name' => 'edit_posts', 'display_name' => 'Edit Posts'],
            ['name' => 'delete_posts', 'display_name' => 'Delete Posts'],
            ['name' => 'create_comments', 'display_name' => 'Create Comments'],
            ['name' => 'edit_comments', 'display_name' => 'Edit Comments'],
            ['name' => 'delete_comments', 'display_name' => 'Delete Comments'],
            // Add more permissions as needed
        ];

        // Insert the permissions into the database
        Permission::insert($permissions);

        // Generate 20 additional random permissions for testing purposes
//        factory(Permission::class, 20)->create();

    }
}
