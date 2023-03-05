<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\Cart;
use App\Models\User;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = new Faker();
        // Get a random cart from the database
        $cart = Cart::inRandomOrder()->first();

        // Get a random user from the database
        $user = User::inRandomOrder()->first();

        return [
            'user_id' => $user->id,
            'cart_id' => $cart->id,
            'total_price' => $cart->total_price,
            'total_items' => $cart->total_items,
            'currency' => 'USD', // Set a default currency
            'notes' => $faker->text,
            'status' => 'pending',
        ];
    }
}
