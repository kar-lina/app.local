<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = [];

        $pName = 'Level_1';
        $positions[] = [
            'position' => $pName,
            //'description' => $faker->text(rand(40, 100)),

        ];

        for ($i = 2; $i <= 5; $i++) {
            $pName = 'Level_' . $i;


            $positions[] = [
                'name' => $pName,


            ];
        }
        DB::table('positions')->insert($positions);
    }
}
