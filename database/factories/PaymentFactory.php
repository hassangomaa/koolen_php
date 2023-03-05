<?php

namespace Database\Factories;

use App\Models\Payment;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    protected $model = Payment::class;



    public function definition()
    {
        $faker = new Faker();

        return [
            'order_id' => function () {
                return Order::inRandomOrder()->first()->id;
            },
            'method' => $faker->randomElement(['credit_card', 'paypal', 'cash_on_delivery']),
            'amount' => $faker->numberBetween(100, 10000),
        ];
    }
}
