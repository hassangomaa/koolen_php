<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserType;

class UserTypeSeeder extends Seeder
{
    public function run()
    {
        UserType::create([
            'name' => 'admin',
        ]);

        UserType::create([
            'name' => 'customer',
        ]);
    }
}
