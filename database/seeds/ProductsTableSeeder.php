<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Belgrado - Siglo XXI',
                'description' => 'The LP comes in a thick black and white pocket sleeve.
Also includes a thick, both sided, 30x30 cm insert, an extra lyric sheet and a 40x55 cm poster.

Pressing plant uncredited, identified with the matrix.',
                'price' => 15,
                'category_id' => 1,
                'created_at' => '2019-04-20 21:24:05',
                'updated_at' => '2019-04-21 13:28:06',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Antiguo Régimen ‎– Política De Tierra Quemada',
                'description' => 'Label: Discos Humeantes ‎– DHR-038, Flexidiscos ‎– FX08, Burka For Everybody ‎– BFE 020
Format: Vinyl, LP, Album 
Country: Spain
Released: 2014
Genre: Electronic, Rock, Pop
Style: Darkwave, New Wave

Tracklist
A1	Política De Tierra Quemada	
A2	Antiguo Régimen	
A3	Los Ojos Del Otro	
A4	Piezas Sobrantes	
A5	Desorden Mundial	
B1	Plomo Fundido En Sangre	
B2	Frialdad Quirúrgica	
B3	Oculto	
B4	Observaciones',
                'price' => 20,
                'category_id' => 1,
                'created_at' => '2019-04-20 21:28:08',
                'updated_at' => '2019-04-21 13:42:36',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Iceage ‎– New Brigade',
                'description' => 'Label: Escho ‎– ESC19
Format: Vinyl, LP, 45 RPM, Limited Edition 
Country: Denmark
Released: 07 Jan 2011
Genre: Rock, Pop
Style: Punk
Tracklist
A1	Intro	
A2	White Rune	
A3	New Brigade	
A4	Remember	
A5	Teeth Crush	
A6	Total Drench	
A7	Broken Bone	
B1	Collapse	
B2	Eyes	
B3	Count Me In
Written-By – Sexdrome
B4	Never Return	
B5	Youre Blessed',
                'price' => 25,
                'category_id' => 1,
                'created_at' => '2019-04-20 21:43:01',
                'updated_at' => '2019-04-21 15:26:27',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Lana Del Rey ‎– Ultraviolence',
                'description' => 'Label: Polydor ‎– 3787448, Interscope Records ‎– 3787448
Format: 2 × Vinyl, LP, Album, 180 Gram 
Country: UK
Released: 13 Jun 2014
Genre: Rock, Pop, Folk, World, & Country
Style: Ballad',
                'price' => 30,
                'category_id' => 1,
                'created_at' => '2019-04-20 21:44:24',
                'updated_at' => '2019-04-21 15:27:49',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Antiguo Régimen ‎– La Formación De La Sombra',
                'description' => 'Antiguo Régimen ‎– La Formación De La Sombra',
                'price' => 35,
                'category_id' => 1,
                'created_at' => '2019-04-21 13:44:50',
                'updated_at' => '2019-04-21 13:44:50',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Blondie ‎– Heart Of Glass',
                'description' => 'Blondie ‎– Heart Of Glass',
                'price' => 5,
                'category_id' => 1,
                'created_at' => '2019-04-21 14:40:43',
                'updated_at' => '2019-04-21 14:40:43',
            ),
        ));
        
        
    }
}