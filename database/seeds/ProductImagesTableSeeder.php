<?php

use Illuminate\Database\Seeder;

class ProductImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_images')->delete();
        
        \DB::table('product_images')->insert(array (
            0 => 
            array (
                'id' => 9,
                'product_id' => 1,
                'file' => '/storage/images/Jx9PylY4oPIt79dFS2l6frNddh2AC0UtS637SW57.jpeg',
                'thumbnail' => '/storage/thumbnails/1555795445belgrado1.jpg',
                'featured' => 1,
                'order_column' => 0,
                'created_at' => '2019-04-20 21:24:05',
                'updated_at' => '2019-04-20 21:24:05',
            ),
            1 => 
            array (
                'id' => 10,
                'product_id' => 1,
                'file' => '/storage/images/HdrPHvpV4HmVC1FY064L9XdMczypTr6BNZ8FIiBl.jpeg',
                'thumbnail' => '/storage/thumbnails/1555795445belgrado2.jpg',
                'featured' => 0,
                'order_column' => 1,
                'created_at' => '2019-04-20 21:24:05',
                'updated_at' => '2019-04-20 21:24:05',
            ),
            2 => 
            array (
                'id' => 11,
                'product_id' => 1,
                'file' => '/storage/images/8g3Mro6hAjoFR8KqI0W7nEwlygjWm1zAj5MCQRCi.jpeg',
                'thumbnail' => '/storage/thumbnails/1555795445belgrado3.jpg',
                'featured' => 0,
                'order_column' => 2,
                'created_at' => '2019-04-20 21:24:05',
                'updated_at' => '2019-04-20 21:24:05',
            ),
            3 => 
            array (
                'id' => 12,
                'product_id' => 2,
                'file' => '/storage/images/JxlMLxqtTRSCL9TFf1Hs2saTVU8U7WsT0hsyOnkX.jpeg',
                'thumbnail' => '/storage/thumbnails/1555795688antiregim1.jpg',
                'featured' => 1,
                'order_column' => 0,
                'created_at' => '2019-04-20 21:28:08',
                'updated_at' => '2019-04-20 21:28:08',
            ),
            4 => 
            array (
                'id' => 13,
                'product_id' => 2,
                'file' => '/storage/images/9qLrOTErBBiqfFmYhWB93MKHcSCsUhgCtSMkLHsU.jpeg',
                'thumbnail' => '/storage/thumbnails/1555795688antiregim2.jpg',
                'featured' => 0,
                'order_column' => 1,
                'created_at' => '2019-04-20 21:28:08',
                'updated_at' => '2019-04-20 21:28:08',
            ),
            5 => 
            array (
                'id' => 14,
                'product_id' => 2,
                'file' => '/storage/images/uSYFFtL26Y3ZfskelTiBbVDXy46n8eoYbGnnQiwk.jpeg',
                'thumbnail' => '/storage/thumbnails/1555795688antiregim3.jpg',
                'featured' => 0,
                'order_column' => 2,
                'created_at' => '2019-04-20 21:28:08',
                'updated_at' => '2019-04-20 21:28:08',
            ),
            6 => 
            array (
                'id' => 15,
                'product_id' => 2,
                'file' => '/storage/images/YprpifbjGFgjkWWUn6IfBChJ2ccZq2V69qSVPcmA.jpeg',
                'thumbnail' => '/storage/thumbnails/1555795688antiregim4.jpg',
                'featured' => 0,
                'order_column' => 3,
                'created_at' => '2019-04-20 21:28:08',
                'updated_at' => '2019-04-20 21:28:08',
            ),
            7 => 
            array (
                'id' => 16,
                'product_id' => 2,
                'file' => '/storage/images/a9z73fZZxx5b0wvyAd6sDxMsclbhyS7MDLdDGkTI.jpeg',
                'thumbnail' => '/storage/thumbnails/1555795688antiregim5.jpg',
                'featured' => 0,
                'order_column' => 4,
                'created_at' => '2019-04-20 21:28:08',
                'updated_at' => '2019-04-20 21:28:08',
            ),
            8 => 
            array (
                'id' => 17,
                'product_id' => 2,
                'file' => '/storage/images/1GNc4G58I0z4aQj9qam8qOJKkvDNNZDFwPqDuS3E.jpeg',
                'thumbnail' => '/storage/thumbnails/1555795688antiregim6.jpg',
                'featured' => 0,
                'order_column' => 5,
                'created_at' => '2019-04-20 21:28:08',
                'updated_at' => '2019-04-20 21:28:08',
            ),
            9 => 
            array (
                'id' => 18,
                'product_id' => 3,
                'file' => '/storage/images/qBMJuiYMJhyGukKqBZ6IJTGRVpETMKThw23V4SII.jpeg',
                'thumbnail' => '/storage/thumbnails/1555796582iceage.jpg',
                'featured' => 1,
                'order_column' => 0,
                'created_at' => '2019-04-20 21:43:02',
                'updated_at' => '2019-04-20 21:43:02',
            ),
            10 => 
            array (
                'id' => 19,
                'product_id' => 4,
                'file' => '/storage/images/EHD8EUjjLHt38wdOYl36Wq9K5i2ev3qRqQXpvFBr.jpeg',
                'thumbnail' => '/storage/thumbnails/1555796664lana1.jpg',
                'featured' => 1,
                'order_column' => 0,
                'created_at' => '2019-04-20 21:44:24',
                'updated_at' => '2019-04-20 21:44:24',
            ),
            11 => 
            array (
                'id' => 20,
                'product_id' => 4,
                'file' => '/storage/images/EbAXq0f6GH703NYEB4HHOtjBK2xuEMwJCFw7Rwcv.jpeg',
                'thumbnail' => '/storage/thumbnails/1555796664lana2.jpg',
                'featured' => 0,
                'order_column' => 1,
                'created_at' => '2019-04-20 21:44:24',
                'updated_at' => '2019-04-20 21:44:24',
            ),
            12 => 
            array (
                'id' => 21,
                'product_id' => 4,
                'file' => '/storage/images/rsWtJUkhT8PZwqhJ0gGVe11EtkdG6bMgADB9RrWq.jpeg',
                'thumbnail' => '/storage/thumbnails/1555796664lana3.jpg',
                'featured' => 0,
                'order_column' => 2,
                'created_at' => '2019-04-20 21:44:25',
                'updated_at' => '2019-04-20 21:44:25',
            ),
            13 => 
            array (
                'id' => 22,
                'product_id' => 4,
                'file' => '/storage/images/1tcvx2JbnJTa7SmESZAz8nEurMTyTNfGCThj44Tp.jpeg',
                'thumbnail' => '/storage/thumbnails/1555796665lana4.jpg',
                'featured' => 0,
                'order_column' => 3,
                'created_at' => '2019-04-20 21:44:25',
                'updated_at' => '2019-04-20 21:44:25',
            ),
            14 => 
            array (
                'id' => 23,
                'product_id' => 4,
                'file' => '/storage/images/9OKF2dmYhFrygcupYplA9i8rT4SQ5wRvKWB67Qyx.jpeg',
                'thumbnail' => '/storage/thumbnails/1555796665lana5.jpg',
                'featured' => 0,
                'order_column' => 4,
                'created_at' => '2019-04-20 21:44:25',
                'updated_at' => '2019-04-20 21:44:25',
            ),
            15 => 
            array (
                'id' => 24,
                'product_id' => 4,
                'file' => '/storage/images/KEQZwNmdAudXLg4XSj90ZGBclIlU2o48O0io7BGD.jpeg',
                'thumbnail' => '/storage/thumbnails/1555796665lana6.jpg',
                'featured' => 0,
                'order_column' => 5,
                'created_at' => '2019-04-20 21:44:25',
                'updated_at' => '2019-04-20 21:44:25',
            ),
            16 => 
            array (
                'id' => 25,
                'product_id' => 4,
                'file' => '/storage/images/d4C2pkrRS3XAuCsFtTpjA1JmFdZxBJVnhunRVsro.jpeg',
                'thumbnail' => '/storage/thumbnails/1555796665lana7.jpg',
                'featured' => 0,
                'order_column' => 6,
                'created_at' => '2019-04-20 21:44:25',
                'updated_at' => '2019-04-20 21:44:25',
            ),
            17 => 
            array (
                'id' => 26,
                'product_id' => 4,
                'file' => '/storage/images/hsOVxSVtn4hxA1J71bTcamNUKHSZbT5J9OrnN9XM.jpeg',
                'thumbnail' => '/storage/thumbnails/1555796665lana8.jpg',
                'featured' => 0,
                'order_column' => 7,
                'created_at' => '2019-04-20 21:44:25',
                'updated_at' => '2019-04-20 21:44:25',
            ),
            18 => 
            array (
                'id' => 27,
                'product_id' => 4,
                'file' => '/storage/images/tGYLV5BkjMPXaEjC5rLQSJB1LttGtRREmhcVZT8z.jpeg',
                'thumbnail' => '/storage/thumbnails/1555796665lana9.jpg',
                'featured' => 0,
                'order_column' => 8,
                'created_at' => '2019-04-20 21:44:25',
                'updated_at' => '2019-04-20 21:44:25',
            ),
            19 => 
            array (
                'id' => 28,
                'product_id' => 5,
                'file' => '/storage/images/TYflyQEMjphNG1URssSrjIgUTVUQDhF6svZvPS6e.jpeg',
                'thumbnail' => '/storage/thumbnails/1555854290antiregimen7in.jpg',
                'featured' => 1,
                'order_column' => 0,
                'created_at' => '2019-04-21 13:44:50',
                'updated_at' => '2019-04-21 13:44:50',
            ),
            20 => 
            array (
                'id' => 29,
                'product_id' => 6,
                'file' => '/storage/images/vjsrNGKnjCc79ouZaTPnEWOJvFebFBsbxgEzmyIe.jpeg',
                'thumbnail' => '/storage/thumbnails/1555857643blondie1.jpg',
                'featured' => 1,
                'order_column' => 0,
                'created_at' => '2019-04-21 14:40:43',
                'updated_at' => '2019-04-21 14:40:43',
            ),
            21 => 
            array (
                'id' => 30,
                'product_id' => 6,
                'file' => '/storage/images/IwNPZrcK3NgPED05mTTXu547Z6rDxZAT2OK3mjDH.jpeg',
                'thumbnail' => '/storage/thumbnails/1555857643blondie2.jpg',
                'featured' => 0,
                'order_column' => 1,
                'created_at' => '2019-04-21 14:40:43',
                'updated_at' => '2019-04-21 14:40:43',
            ),
            22 => 
            array (
                'id' => 31,
                'product_id' => 6,
                'file' => '/storage/images/zczZfesiHYQklGIVAdf0cwmGGYMg7Ah2XsyTXhzQ.jpeg',
                'thumbnail' => '/storage/thumbnails/1555857643blondie3.jpg',
                'featured' => 0,
                'order_column' => 2,
                'created_at' => '2019-04-21 14:40:43',
                'updated_at' => '2019-04-21 14:40:43',
            ),
            23 => 
            array (
                'id' => 32,
                'product_id' => 6,
                'file' => '/storage/images/9QDMNZwybGvSbLnPzOht755mr2GFRDUWjaP3d0vo.jpeg',
                'thumbnail' => '/storage/thumbnails/1555857643blondie4.jpg',
                'featured' => 0,
                'order_column' => 3,
                'created_at' => '2019-04-21 14:40:43',
                'updated_at' => '2019-04-21 14:40:43',
            ),
        ));
        
        
    }
}