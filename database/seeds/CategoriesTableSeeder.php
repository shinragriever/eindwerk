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
        DB::table('categories')->insert(['name'=>'Vinyl']);
        DB::table('categories')->insert(['name'=>'Cassette']);
        DB::table('categories')->insert(['name'=>'CD']);
        DB::table('categories')->insert(['name'=>'DVD']);
        
    }
}

