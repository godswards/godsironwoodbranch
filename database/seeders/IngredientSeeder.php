<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class IngredientSeeder extends Seeder
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
                'recipe_id' => '1',
                'name' => 'Ground Arabic coffee',
                'measure' => '3',
                'unit' => 'tablespoons'
            ],
            [
                'recipe_id' => '1',
                'name' => 'water',
                'measure' => '3',
                'unit' => 'cups'
            ],
            [
                'recipe_id' => '1',
                'name' => 'Cardamon pods',
                'measure' => '3',
                'unit' => ''
            ],
            [
                'recipe_id' => '1',
                'name' => 'saffron',
                'measure' => '',
                'unit' => 'small pinches'
            ]

        ];
    }
}
