<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\Employer;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Employer::factory(50000)->create();
        $this->call(PositionsTableSeeder::class);
    }
}
