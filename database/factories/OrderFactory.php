<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_ref' => 'ORD'.$this->faker->unique()->randomNumber(6),
            'customer_name' => $this->faker->name,
        ];
    }
}
