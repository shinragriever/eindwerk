<?php

use Illuminate\Database\Seeder;

class GenreProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('genre_product')->delete();
        
        \DB::table('genre_product')->insert(array (
            0 => 
            array (
                'genre_id' => 1,
                'product_id' => 1,
            ),
            1 => 
            array (
                'genre_id' => 1,
                'product_id' => 2,
            ),
            2 => 
            array (
                'genre_id' => 1,
                'product_id' => 3,
            ),
            3 => 
            array (
                'genre_id' => 1,
                'product_id' => 5,
            ),
            4 => 
            array (
                'genre_id' => 2,
                'product_id' => 1,
            ),
            5 => 
            array (
                'genre_id' => 2,
                'product_id' => 2,
            ),
            6 => 
            array (
                'genre_id' => 2,
                'product_id' => 5,
            ),
            7 => 
            array (
                'genre_id' => 2,
                'product_id' => 6,
            ),
            8 => 
            array (
                'genre_id' => 3,
                'product_id' => 2,
            ),
            9 => 
            array (
                'genre_id' => 3,
                'product_id' => 5,
            ),
            10 => 
            array (
                'genre_id' => 4,
                'product_id' => 4,
            ),
            11 => 
            array (
                'genre_id' => 5,
                'product_id' => 4,
            ),
            12 => 
            array (
                'genre_id' => 6,
                'product_id' => 4,
            ),
            13 => 
            array (
                'genre_id' => 7,
                'product_id' => 6,
            ),
        ));
        
        
    }
}