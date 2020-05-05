<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => "MEN'S BETTER THAN NAKED & JACKET",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 21,
                'price' => 200.10,
                'category_id' => 1,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => '1.jpg'

            ],
            [
                'name' => "WOMEN'S BETTER THAN NAKED™ JACKET",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 400,
                'price' => 1600.21,
                'category_id' => 1,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => '2.jpg'
            ],
            [
                'name' => "WOMEN'S SINGLE-TRACK SHOE",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 37,
                'price' => 378.00,
                'category_id' => 2,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => '3.jpg'
            ],
            [
                'name' => 'Enduro Boa® Hydration Pack',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 10,
                'price' => 21.10,
                'category_id' => 1,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => '4.jpg'
            ]
        ];

        DB::table('products')->insert($products);
    }
}
