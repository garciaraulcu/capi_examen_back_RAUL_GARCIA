<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserDomicilioSeeder extends Seeder
{
    /**
     * Run the database seeds.--
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\UserDomicilio::factory(100)->create();
    }
}
