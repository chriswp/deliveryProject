<?php

use Delivery\Models\Client;
use Delivery\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,10)->create()->each(function ($c) {
            for ($i = 0; $i <= 3; $i++) {
                $c->client()->save(factory(Client::class)->make());
            }
        });
    }
}
