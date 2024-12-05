<?php

namespace Database\Seeders;

// use App\Models\Admin;
use App\Models\Food;
// use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Food::factory()->createMany([
            [
                "name" => "Apple",
                "calories" => 52,
                "carbs" => 13,
                "fat" => 0.2,
                "protein" => 0.3,
                "sugar" => 10
            ],
            [
                "name" => "Banana",
                "calories" => 89,
                "carbs" => 22,
                "fat" => 0.2,
                "protein" => 1.1,
                "sugar" => 17
            ],
            [
                "name" => "Orange",
                "calories" => 47,
                "carbs" => 12,
                "fat" => 0.1,
                "protein" => 0.9,
                "sugar" => 9
            ],
            [
                "name" => "Grapefruit",
                "calories" => 52,
                "carbs" => 13,
                "fat" => 0.1,
                "protein" => 0.8,
                "sugar" => 8
            ],
            [
                "name" => "Strawberry",
                "calories" => 33,
                "carbs" => 8,
                "fat" => 0.3,
                "protein" => 0.7,
                "sugar" => 7
            ],
            [
                "name" => "Blueberry",
                "calories" => 57,
                "carbs" => 14,
                "fat" => 0.4,
                "protein" => 0.9,
                "sugar" => 11
            ],
            [
                "name" => "Raspberry",
                "calories" => 49,
                "carbs" => 11,
                "fat" => 0.7,
                "protein" => 1.2,
                "sugar" => 10
            ],
            [
                "name" => "Blackberry",
                "calories" => 40,
                "carbs" => 10,
                "fat" => 0.5,
                "protein" => 1.4,
                "sugar" => 5
            ],
            [
                "name" => "Pineapple",
                "calories" => 52,
                "carbs" => 13,
                "fat" => 0.1,
                "protein" => 0.5,
                "sugar" => 9
            ],
            [
                "name" => "Mango",
                "calories" => 60,
                "carbs" => 14,
                "fat" => 0.1,
                "protein" => 0.8,
                "sugar" => 15
            ],
            [
                "name" => "Avocado",
                "calories" => 160,
                "carbs" => 9,
                "fat" => 15,
                "protein" => 2,
                "sugar" => 0
            ],
            [
                "name" => "Kiwi",
                "calories" => 61,
                "carbs" => 14,
                "fat" => 0.2,
                "protein" => 1,
                "sugar" => 9
            ],
            [
                "name" => "Pear",
                "calories" => 57,
                "carbs" => 14,
                "fat" => 0.1,
                "protein" => 0.5,
                "sugar" => 10
            ],
            [
                "name" => "Peach",
                "calories" => 56,
                "carbs" => 13,
                "fat" => 0.1,
                "protein" => 1,
                "sugar" => 10
            ],
            [
                "name" => "Plum",
                "calories" => 46,
                "carbs" => 11,
                "fat" => 0.1,
                "protein" => 0.7,
                "sugar" => 10
            ],
            [
                "name" => "Cherry",
                "calories" => 52,
                "carbs" => 12,
                "fat" => 0.1,
                "protein" => 1,
                "sugar" => 10
            ],
            [
                "name" => "Watermelon",
                "calories" => 30,
                "carbs" => 7,
                "fat" => 0.1,
                "protein" => 0.6,
                "sugar" => 6
            ],
            [
                "name" => "Cantaloupe",
                "calories" => 33,
                "carbs" => 8,
                "fat" => 0.1,
                "protein" => 0.6,
                "sugar" => 7
            ],
            [
                "name" => "Honeydew",
                "calories" => 37,
                "carbs" => 9,
                "fat" => 0.1,
                "protein" => 0.7,
                "sugar" => 8
            ],
            [
                "name" => "Grape",
                "calories" => 69,
                "carbs" => 16,
                "fat" => 0.1,
                "protein" => 1.1,
                "sugar" => 16
            ],
            [
                "name" => "Carrot",
                "calories" => 41,
                "carbs" => 10,
                "fat" => 0.2,
                "protein" => 0.9,
                "sugar" => 4
            ],
            [
                "name" => "Celery",
                "calories" => 16,
                "carbs" => 3,
                "fat" => 0.2,
                "protein" => 0.9,
                "sugar" => 2
            ],
            [
                "name" => "Cucumber",
                "calories" => 16,
                "carbs" => 3,
                "fat" => 0.1,
                "protein" => 0.7,
                "sugar" => 2
            ],
            [
                "name" => "Spinach",
                "calories" => 23,
                "carbs" => 3,
                "fat" => 0.4,
                "protein" => 2.9,
                "sugar" => 0
            ],
            [
                "name" => "Broccoli",
                "calories" => 31,
                "carbs" => 6,
                "fat" => 0.4,
                "protein" => 2.8,
                "sugar" => 1
            ],
            [
                "name" => "Cauliflower",
                "calories" => 25,
                "carbs" => 5,
                "fat" => 0.1,
                "protein" => 2.5,
                "sugar" => 2
            ],
            [
                "name" => "Lettuce",
                "calories" => 15,
                "carbs" => 2,
                "fat" => 0.2,
                "protein" => 1.3,
                "sugar" => 2
            ],
            [
                "name" => "Tomato",
                "calories" => 18,
                "carbs" => 3,
                "fat" => 0.3,
                "protein" => 0.9,
                "sugar" => 3
            ],
            [
                "name" => "Onion",
                "calories" => 40,
                "carbs" => 9,
                "fat" => 0.1,
                "protein" => 1.1,
                "sugar" => 9
            ],
            [
                "name" => "Potato",
                "calories" => 77,
                "carbs" => 17,
                "fat" => 0.1,
                "protein" => 2,
                "sugar" => 2
            ],
            [
                "name" => "Sweet potato",
                "calories" => 94,
                "carbs" => 20,
                "fat" => 0.1,
                "protein" => 2,
                "sugar" => 5
            ],
            [
                "name" => "Corn",
                "calories" => 86,
                "carbs" => 17,
                "fat" => 1.2,
                "protein" => 3.3,
                "sugar" => 20
            ],
            [
                "name" => "Peas",
                "calories" => 72,
                "carbs" => 13,
                "fat" => 0.4,
                "protein" => 5.4,
                "sugar" => 7
            ],
            [
                "name" => "Beans",
                "calories" => 140,
                "carbs" => 21,
                "fat" => 0.1,
                "protein" => 8.4,
                "sugar" => 0
            ],
            [
                "name" => "Green beans",
                "calories" => 25,
                "carbs" => 5,
                "fat" => 0.1,
                "protein" => 2.1,
                "sugar" => 3
            ],
            [
                "name" => "Asparagus",
                "calories" => 20,
                "carbs" => 3,
                "fat" => 0.1,
                "protein" => 2.2,
                "sugar" => 2
            ],
            [
                "name" => "Bell pepper",
                "calories" => 20,
                "carbs" => 3,
                "fat" => 0.1,
                "protein" => 0.9,
                "sugar" => 7
            ],
            [
                "name" => "Zucchini",
                "calories" => 17,
                "carbs" => 3,
                "fat" => 0.2,
                "protein" => 1.8,
                "sugar" => 3
            ],
            [
                "name" => "Eggplant",
                "calories" => 20,
                "carbs" => 3,
                "fat" => 0.2,
                "protein" => 0.9,
                "sugar" => 3
            ],
            [
                "name" => "Mushrooms",
                "calories" => 20,
                "carbs" => 3,
                "fat" => 0.3,
                "protein" => 2,
                "sugar" => 3
            ],
            [
                "name" => "Milk",
                "calories" => 50,
                "carbs" => 11,
                "fat" => 3.5,
                "protein" => 3.5,
                "sugar" => 5
            ],
            [
                "name" => "Cheese",
                "calories" => 400,
                "carbs" => 1,
                "fat" => 35,
                "protein" => 25,
                "sugar" => 1
            ],
            [
                "name" => "Yogurt",
                "calories" => 60,
                "carbs" => 11,
                "fat" => 3,
                "protein" => 4,
                "sugar" => 10
            ],
            [
                "name" => "Butter",
                "calories" => 800,
                "carbs" => 0,
                "fat" => 82,
                "protein" => 0.8,
                "sugar" => 0
            ],
            [
                "name" => "Sour cream",
                "calories" => 200,
                "carbs" => 1,
                "fat" => 18,
                "protein" => 2,
                "sugar" => 3
            ],
            [
                "name" => "Chicken",
                "calories" => 165,
                "carbs" => 0,
                "fat" => 5,
                "protein" => 27,
                "sugar" => 0
            ],
            [
                "name" => "Beef",
                "calories" => 240,
                "carbs" => 0,
                "fat" => 18,
                "protein" => 21,
                "sugar" => 0
            ],
            [
                "name" => "Pork",
                "calories" => 240,
                "carbs" => 0,
                "fat" => 18,
                "protein" => 15,
                "sugar" => 0
            ],
            [
                "name" => "Fish",
                "calories" => 100,
                "carbs" => 0,
                "fat" => 1,
                "protein" => 18,
                "sugar" => 0
            ],
            [
                "name" => "Eggs",
                "calories" => 150,
                "carbs" => 0,
                "fat" => 10,
                "protein" => 12,
                "sugar" => 0
            ],
            [
                "name" => "Tofu",
                "calories" => 80,
                "carbs" => 5,
                "fat" => 5,
                "protein" => 8,
                "sugar" => 0
            ],
            [
                "name" => "Tempeh",
                "calories" => 200,
                "carbs" => 10,
                "fat" => 8,
                "protein" => 18,
                "sugar" => 0
            ],
            [
                "name" => "Lentils",
                "calories" => 120,
                "carbs" => 20,
                "fat" => 1,
                "protein" => 9,
                "sugar" => 0
            ],
            [
                "name" => "Beans",
                "calories" => 140,
                "carbs" => 21,
                "fat" => 0.1,
                "protein" => 8,
                "sugar" => 0
            ],
            [
                "name" => "Nuts",
                "calories" => 600,
                "carbs" => 15,
                "fat" => 50,
                "protein" => 20,
                "sugar" => 0
            ],
            [
                "name" => "Seeds",
                "calories" => 500,
                "carbs" => 10,
                "fat" => 40,
                "protein" => 20,
                "sugar" => 0
            ],
            [
                "name" => "Bread",
                "calories" => 250,
                "carbs" => 45,
                "fat" => 2,
                "protein" => 8,
                "sugar" => 10
            ],
            [
                "name" => "Pasta",
                "calories" => 150,
                "carbs" => 25,
                "fat" => 1,
                "protein" => 7,
                "sugar" => 5
            ],
            [
                "name" => "Rice",
                "calories" => 130,
                "carbs" => 25,
                "fat" => 0.3,
                "protein" => 3,
                "sugar" => 0
            ],
            [
                "name" => "Oatmeal",
                "calories" => 370,
                "carbs" => 65,
                "fat" => 7,
                "protein" => 11,
                "sugar" => 0
            ],
            [
                "name" => "Cornflakes",
                "calories" => 370,
                "carbs" => 75,
                "fat" => 1,
                "protein" => 8,
                "sugar" => 20
            ],
            [
                "name" => "Quinoa",
                "calories" => 120,
                "carbs" => 20,
                "fat" => 2,
                "protein" => 4,
                "sugar" => 0
            ],
            [
                "name" => "Barley",
                "calories" => 300,
                "carbs" => 50,
                "fat" => 1,
                "protein" => 8,
                "sugar" => 0
            ],
            [
                "name" => "Couscous",
                "calories" => 300,
                "carbs" => 50,
                "fat" => 1,
                "protein" => 10,
                "sugar" => 0
            ],
            [
                "name" => "Water",
                "calories" => 0,
                "carbs" => 0,
                "fat" => 0,
                "protein" => 0,
                "sugar" => 0
            ],
            [
                "name" => "Coffee",
                "calories" => 2,
                "carbs" => 0,
                "fat" => 0,
                "protein" => 0,
                "sugar" => 0
            ],
            [
                "name" => "Tea",
                "calories" => 2,
                "carbs" => 0,
                "fat" => 0,
                "protein" => 0,
                "sugar" => 0
            ],
            [
                "name" => "Juice",
                "calories" => 50,
                "carbs" => 12,
                "fat" => 0,
                "protein" => 0.5,
                "sugar" => 10
            ],
            [
                "name" => "Soda",
                "calories" => 200,
                "carbs" => 50,
                "fat" => 0,
                "protein" => 0,
                "sugar" => 20
            ],
            [
                "name" => "Milk",
                "calories" => 50,
                "carbs" => 11,
                "fat" => 3.5,
                "protein" => 3.5,
                "sugar" => 5
            ],
            [
                "name" => "Chips",
                "calories" => 500,
                "carbs" => 50,
                "fat" => 30,
                "protein" => 3,
                "sugar" => 5
            ],
            [
                "name" => "Cookies",
                "calories" => 400,
                "carbs" => 40,
                "fat" => 20,
                "protein" => 5,
                "sugar" => 30
            ],
            [
                "name" => "Crackers",
                "calories" => 200,
                "carbs" => 30,
                "fat" => 10,
                "protein" => 5,
                "sugar" => 5
            ],
            [
                "name" => "Popcorn",
                "calories" => 40,
                "carbs" => 8,
                "fat" => 1,
                "protein" => 3,
                "sugar" => 0
            ],
            [
                "name" => "Trail mix",
                "calories" => 600,
                "carbs" => 40,
                "fat" => 40,
                "protein" => 15,
                "sugar" => 10
            ],
            [
                "name" => "Fruit bars",
                "calories" => 200,
                "carbs" => 25,
                "fat" => 10,
                "protein" => 2,
                "sugar" => 20
            ],
            [
                "name" => "Granola bars",
                "calories" => 250,
                "carbs" => 35,
                "fat" => 10,
                "protein" => 5,
                "sugar" => 15
            ],
            [
                "name" => "Candy",
                "calories" => 400,
                "carbs" => 100,
                "fat" => 0,
                "protein" => 0,
                "sugar" => 90
            ],
            [
                "name" => "Salt",
                "calories" => 0,
                "carbs" => 0,
                "fat" => 0,
                "protein" => 0,
                "sugar" => 0
            ],
            [
                "name" => "Pepper",
                "calories" => 0,
                "carbs" => 0,
                "fat" => 0,
                "protein" => 0,
                "sugar" => 0
            ],
            [
                "name" => "Olive oil",
                "calories" => 900,
                "carbs" => 0,
                "fat" => 100,
                "protein" => 0,
                "sugar" => 0
            ],
            [
                "name" => "Vinegar",
                "calories" => 20,
                "carbs" => 0,
                "fat" => 0,
                "protein" => 0,
                "sugar" => 0
            ],
            [
                "name" => "Ketchup",
                "calories" => 40,
                "carbs" => 10,
                "fat" => 0,
                "protein" => 0,
                "sugar" => 20
            ]
        ]);
    }
}
