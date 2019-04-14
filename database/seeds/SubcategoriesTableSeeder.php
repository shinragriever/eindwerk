<?php

use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert(['name'=>'Dresses','category_id'=>'1']);
        DB::table('subcategories')->insert(['name'=>'Watches','category_id'=>'4']);
        DB::table('subcategories')->insert(['name'=>'Bags','category_id'=>'4']);
        DB::table('subcategories')->insert(['name'=>'Sunglasses','category_id'=>'4']);
        DB::table('subcategories')->insert(['name'=>'Jeans','category_id'=>'2']);
    }
}
