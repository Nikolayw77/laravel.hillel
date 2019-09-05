<?php

use Illuminate\Database\Seeder;
use League\Flysystem\Config;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Config::get('constants.db.roles');
        foreach ($roles as $key => $role) {
            Role::create(['name' => $role]);
        }
    }
}
