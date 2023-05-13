<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employe;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(1)->create();
         Employe::factory(10)->create();

    }
}
