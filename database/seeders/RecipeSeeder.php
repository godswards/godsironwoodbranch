<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipes = [
            [
                'ingredients_id' => '1',
                'name' => 'Sinugbang Bangus',
                'type' => 'Sea Food',
                'instruction' => 'Himbisan ang bangus. Tangalon ang hasang ug ang tinae'
            ],
            [
                'ingredients_id' => '2',
                'name' => 'Lugaw',
                'type' => 'Painit',
                'instruction' => 'Himbisan ang bangus. Tangalon ang hasang ug ang tinae'
            ],
        ];

        foreach($recipes as $recipe) {
            Recipe::create($recipe);
        }
    }
}
