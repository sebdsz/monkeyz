<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Unit::create([
            'type' => 'peon',
            'time' => 60,
            'bananas' => 5,
            'endurance' => 0,
            'strength' => 0,
            'agility' => 0,
        ]);

        App\Unit::create([
            'type' => 'scout',
            'time' => 60 * 5,
            'bananas' => 5 * 3,
            'endurance' => 5,
            'strength' => 5,
            'agility' => 7,
        ])->buildings()->attach(['1', '2']);

        App\Unit::create([
            'type' => 'speed',
            'time' => 60 * 7,
            'bananas' => 5 * 4,
            'endurance' => 6,
            'strength' => 6,
            'agility' => 10,
        ])->buildings()->attach(['3']);

        App\Unit::create([
            'type' => 'warrior',
            'time' => 60 * 9,
            'bananas' => 5 * 7,
            'endurance' => 9,
            'strength' => 9,
            'agility' => 9,
        ])->buildings()->attach(['4']);

        App\Unit::create([
            'type' => 'warrior',
            'time' => 60 * 10,
            'bananas' => 5 * 8,
            'endurance' => 15,
            'strength' => 10,
            'agility' => 10,
        ])->buildings()->attach(['4', '5']);

        App\Unit::create([
            'type' => 'warrior',
            'time' => 60 * 15,
            'bananas' => 5 * 15,
            'endurance' => 20,
            'strength' => 12,
            'agility' => 12,
        ])->buildings()->attach(['4', '5', '6']);

        App\Unit::create([
            'type' => 'master',
            'time' => 60 * 25,
            'bananas' => 5 * 25,
            'endurance' => 25,
            'strength' => 25,
            'agility' => 25,
        ])->buildings()->attach(['1', '2', '3', '4', '5', '6', '7']);

        App\Unit::create([
            'type' => 'speed',
            'time' => 60 * 10,
            'bananas' => 5 * 10,
            'endurance' => 8,
            'strength' => 5,
            'agility' => 20,
        ])->buildings()->attach(['7']);
    }
}
