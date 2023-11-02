<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderLine;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::factory(20)->create()->each(function ($order) {
            OrderLine::factory(rand(1, 5))->create(['order_id' => $order->id]);
        });
    }
}
