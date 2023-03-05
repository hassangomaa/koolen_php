<?php

namespace Database\Factories;

use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    protected $model = OrderItem::class;

    public function definition()
    {
        $product = Product::inRandomOrder()->first();

        return [
            'order_id' => function () {
                return \App\Models\Order::factory()->create()->id;
            },
            'product_id' => $product->id,
            'product_name' => $product->name,
            'quantity' => $this->faker->numberBetween(1, 5),
            'price' => $product->price,
        ];
    }
}
