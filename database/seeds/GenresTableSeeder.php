<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('genres')->delete();
        
        \DB::table('genres')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Post-Punk',
                'created_at' => '2019-04-21 12:21:07',
                'updated_at' => '2019-04-21 12:21:07',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'New Wave',
                'created_at' => '2019-04-21 12:21:22',
                'updated_at' => '2019-04-21 12:21:22',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Darkwave',
                'created_at' => '2019-04-21 12:21:50',
                'updated_at' => '2019-04-21 12:21:50',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Dream Pop',
                'created_at' => '2019-04-21 15:27:03',
                'updated_at' => '2019-04-21 15:27:03',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Psychedelic Rock',
                'created_at' => '2019-04-21 15:27:21',
                'updated_at' => '2019-04-21 15:27:21',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Indie Pop',
                'created_at' => '2019-04-21 15:27:29',
                'updated_at' => '2019-04-21 15:27:29',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Disco',
                'created_at' => '2019-04-21 15:28:24',
                'updated_at' => '2019-04-21 15:28:24',
            ),
        ));
        
        
    }
}