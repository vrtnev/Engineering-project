<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Смартфоны',
                'code' => 'phones',
                'description' => 'Различные модели на любой вкус!'
            ],
            [
                'name' => 'Планшеты',
                'code' => 'tablets',
                'description' => 'Мощные и производительные!'
            ],
            [
                'name' => 'Аксессуары',
                'code' => 'accessories',
                'description' => 'Портативные, удобные, красивые!'
            ]
        ]);
    }
}
