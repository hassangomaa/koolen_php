<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTypeSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(UserPermissionsSeeder::class);
        $this->call(BlogsTableSeeder::class);


        \App\Models\Product::factory()->count(30)->create();
        \App\Models\Category::factory()->count(30)->create();
        \App\Models\Cart::factory()->count(30)->create();
        \App\Models\Blog::factory()->count(30)->create();
        \App\Models\Order::factory()->count(30)->create();
        \App\Models\OrderItem::factory()->count(30)->create();
        \App\Models\Payment::factory()->count(30)->create();
        \App\Models\Shipping::factory()->count(30)->create();
        \App\Models\User::factory()->count(30)->create();
        \App\Models\Tag::factory()->count(30)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

####        factory(App\Models\Shipping::class, 10)->create();



    }
}
