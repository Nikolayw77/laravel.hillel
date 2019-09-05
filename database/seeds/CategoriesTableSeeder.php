<?php

use Illuminate\Database\Seeder;

classCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Categories::class, 20)->create();
    }
}
