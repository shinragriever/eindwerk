<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name'=>'Women']);
        DB::table('categories')->insert(['name'=>'Men']);
        DB::table('categories')->insert(['name'=>'Kids']);
        DB::table('categories')->insert(['name'=>'Accesories ']);
        
    }
}

