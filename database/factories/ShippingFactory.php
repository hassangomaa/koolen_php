<?php

namespace Database\Factories;

use App\Models\Shipping;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipping>
 */
class ShippingFactory extends Factory
{
    protected $model = Shipping::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = new Faker();

        return [
        'order_id' => function () {
        return factory(Order::class)->create()->id;
    },
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'country' => $faker->country,
        'zip' => $faker->postcode,
    ];
    }
}
