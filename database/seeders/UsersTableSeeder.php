<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $customerRole = UserType::where('name', 'customer')->first();
        $adminRole = UserType::where('name', 'admin')->first();

        User::create([
            'name' => 'John Doe',
            'email' => 'user@app.com',
            'password' => Hash::make('12345678'),
            'user_type_id' => $customerRole->id,
        ]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'admin@app.com',
            'password' => Hash::make('12345678'),
            'user_type_id' => $adminRole->id,
        ]);
    }
}
