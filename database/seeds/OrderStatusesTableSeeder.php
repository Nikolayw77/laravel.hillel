<?php

use App\OrderStatus;
use Illuminate\Database\Seeder;


class OrderStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = Config::get('constants.db.order_statuses');
        foreach ($statuses as $status) {
            OrderStatus::create(['name' => $status]);
        }
    }
}
