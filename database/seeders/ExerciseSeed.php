<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exercise::createMany([
            [
                "calories" => 11,
                "name" => "Running (6 mph)"
            ],
            [
                "calories" => 9,
                "name" => "Swimming (freestyle)"
            ],
            [
                "calories" => 9,
                "name" => "Cycling (12-14 mph)"
            ],
            [
                "calories" => 8.5,
                "name" => "Rowing (moderate pace)"
            ],
            [
                "calories" => 8.5,
                "name" => "Jumping rope"
            ],
            [
                "calories" => 8,
                "name" => "Hiking (uphill)"
            ],
            [
                "calories" => 8,
                "name" => "Dancing (high-intensity)"
            ],
            [
                "calories" => 8,
                "name" => "Biking (10-12 mph)"
            ],
            [
                "calories" => 7,
                "name" => "Jogging (5 mph)"
            ],
            [
                "calories" => 7,
                "name" => "Swimming (breaststroke)"
            ],
            [
                "calories" => 7,
                "name" => "Elliptical training (moderate intensity)"
            ],
            [
                "calories" => 7,
                "name" => "Stair climbing"
            ],
            [
                "calories" => 7,
                "name" => "Kickboxing"
            ],
            [
                "calories" => 7,
                "name" => "Tennis (singles)"
            ],
            [
                "calories" => 7,
                "name" => "Basketball (game)"
            ],
            [
                "calories" => 7,
                "name" => "Soccer (game)"
            ],
            [
                "calories" => 7,
                "name" => "Squash"
            ],
            [
                "calories" => 7,
                "name" => "Racquetball"
            ],
            [
                "calories" => 7,
                "name" => "Zumba"
            ],
            [
                "calories" => 6,
                "name" => "Pilates"
            ],
            [
                "calories" => 6,
                "name" => "Yoga (power yoga)"
            ],
            [
                "calories" => 6,
                "name" => "Swimming (backstroke)"
            ],
            [
                "calories" => 6,
                "name" => "Elliptical training (low intensity)"
            ],
            [
                "calories" => 6,
                "name" => "Biking (8-10 mph)"
            ],
            [
                "calories" => 6,
                "name" => "Hiking (level ground)"
            ],
            [
                "calories" => 6,
                "name" => "Dancing (moderate intensity)"
            ],
            [
                "calories" => 6,
                "name" => "Tennis (doubles)"
            ],
            [
                "calories" => 6,
                "name" => "Basketball (practice)"
            ],
            [
                "calories" => 6,
                "name" => "Soccer (practice)"
            ],
            [
                "calories" => 5,
                "name" => "Walking (4 mph)"
            ],
            [
                "calories" => 5,
                "name" => "Swimming (backstroke)"
            ],
            [
                "calories" => 5,
                "name" => "Elliptical training (low intensity)"
            ],
            [
                "calories" => 5,
                "name" => "Biking (6-8 mph)"
            ],
            [
                "calories" => 5,
                "name" => "Hiking (downhill)"
            ],
            [
                "calories" => 5,
                "name" => "Dancing (low intensity)"
            ],
            [
                "calories" => 5,
                "name" => "Yoga (gentle yoga)"
            ],
            [
                "calories" => 4,
                "name" => "Tai Chi"
            ],
            [
                "calories" => 4,
                "name" => "Stretching"
            ],
            [
                "calories" => 4,
                "name" => "Light housework"
            ],
            [
                "calories" => 4,
                "name" => "Gardening"
            ],
            [
                "calories" => 4,
                "name" => "Golf (walking)"
            ],
            [
                "calories" => 4,
                "name" => "Bowling"
            ],
            [
                "calories" => 4,
                "name" => "Fishing (standing)"
            ],
            [
                "calories" => 4,
                "name" => "Light yard work"
            ],
            [
                "calories" => 4,
                "name" => "Water aerobics"
            ],
            [
                "calories" => 3,
                "name" => "Sit-ups"
            ],
            [
                "calories" => 3,
                "name" => "Push-ups"
            ],
            [
                "calories" => 3,
                "name" => "Crunches"
            ],
            [
                "calories" => 3,
                "name" => "Squats"
            ],
            [
                "calories" => 3,
                "name" => "Lunges"
            ]
        ]);
    }
}
