<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

            [
                'name'=>'iphone 12',
                'price'=>'61000',
                'category'=>'mobile',
                'gallery'=>'https://www.91-img.com/gallery_images_uploads/7/4/742a046f5668907d9b86b6b8986b666ef81baedc.jpg?w=0&h=901&q=80&c=1',
                'description'=>'This is smart phone iphone 12 with a 4GB RAM 64GB Storage. ',

            ],
            [
                'name'=>'Whirlpool 265 L 3 Star Inverter Frost-Free Double Door Refrigerator',
                'price'=>'25990',
                'category'=>'refrigerator ',
                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/71PpAFGSYyL._SL1500_.jpg',
                'description'=>'Frost-free refrigerator; 265 litres capacity. Pedestal : No
                Energy Rating: 3 Star',

            ],
            [
                'name'=>'Samsung 6.5 kg Fully-Automatic Top Loading Washing Machine',
                'price'=>'14180',
                'category'=>'refrigerator',
                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/51QmQjHQASL._SL1500_.jpg',
                'description'=>'Fully-automatic top load washing machine.',

            ]
        ]);
    }
}
