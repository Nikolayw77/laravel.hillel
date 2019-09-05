<?php

use Illuminate\Database\Seeder;
use League\Flysystem\Config;

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
