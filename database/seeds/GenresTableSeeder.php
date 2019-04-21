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
        ));
        
        
    }
}