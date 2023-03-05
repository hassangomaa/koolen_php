<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
//use  Database\Factories\UserFactory;

class CartFactory extends Factory
{
    protected $model = Cart::class;

    public function definition()
    {
        return [
            'user_id' => UserFactory::factory(),
            'items' => [
                [
                    'product_id' => ProductFactory::factory(),
                    'quantity' => $this->faker->numberBetween(1, 5),
                ],
                [
                    'product_id' => ProductFactory::factory(),
                    'quantity' => $this->faker->numberBetween(1, 5),
                ],
                [
                    'product_id' => Product::factory(),
                    'quantity' => $this->faker->numberBetween(1, 5),
                ],
            ],
            'total_price' => $this->faker->numberBetween(100, 1000),
            'total_items' => $this->faker->numberBetween(1, 10),
            'currency' => $this->faker->currencyCode(),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
