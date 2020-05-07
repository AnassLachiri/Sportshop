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
                'name' => "MEN'S BETTER THAN  JACKET",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 21,
                'price' => 200.10,
                'category_id' => 1,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => '1.jpg'

            ],
            [
                'name' => "WOMEN'S BETTER THAN JACKET",
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
            ,
            [
                'name' => 'Basketball ring and ball',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 30,
                'price' => 31.10,
                'category_id' => 2,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'basketball_ring_and_ball.jpeg'
            ],
            [
                'name' => 'Basketball Spalding',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 50,
                'price' => 199.99,
                'category_id' => 2,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'basketball_spalding.jpg'
            ],
            [
                'name' => 'Basketball Stand Deluxe',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 10,
                'price' => 21.10,
                'category_id' => 2,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'basketball_stand_deluxe.jpg'
            ],
            [
                'name' => 'Basketball Underground Ball',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 90,
                'price' => 200.00,
                'category_id' => 2,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'basketball_underground_ball.jpg'
            ],
            [
                'name' => 'Basketball Uniforms',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 100,
                'price' => 59.99,
                'category_id' => 2,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'basketball_uniforms.jpg'
            ],
            [
                'name' => 'Basketball Wilson Ball',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 200,
                'price' => 79.99,
                'category_id' => 2,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'basketball_wilson_ball.jpeg'
            ],
            [
                'name' => 'Bodybuilding Adjustable Weight Barbell Dumbells',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 20,
                'price' => 799.99,
                'category_id' => 4,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'bodybuilding_adjustable_weight_barbell_dumbells.jpg'
            ],
            [
                'name' => 'Bodybuilding Body Workout Machine',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 15,
                'price' => 999.99,
                'category_id' => 4,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'bodybuilding_body_workout_machine.jpg'
            ],
            [
                'name' => 'Bodybuilding Resizable Dumbells',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 34,
                'price' => 89.99,
                'category_id' => 4,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'bodybuilding_resizable_dumbells.jpg'
            ],
            [
                'name' => '10kg Weighted Vest',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 44,
                'price' => 49.99,
                'category_id' => 3,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'calisthenics_10kg_Weighted_Vest.jpg'
            ],
            [
                'name' => 'Calisthenics Dib Bars',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 34,
                'price' => 49.00,
                'category_id' => 3,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'calisthenics_dib_bars.jpg'
            ],
            [
                'name' => 'High Quality Resistance Bands',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 340,
                'price' => 9.99,
                'category_id' => 3,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'calisthenics_resistance_bands.jpg'
            ],
            [
                'name' => 'Calisthenics Royalbarzz Tee Shirt',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 500,
                'price' => 8,
                'category_id' => 3,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'calisthenics_royalbarzz_tee_shirt.jpg'
            ],
            [
                'name' => 'Wood Parallettes Push Up Bars',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 100,
                'price' => 29.99,
                'category_id' => 3,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'calisthenics_wood_parallettes_push_up_bars.jpg'
            ],
            [
                'name' => 'High Quality Football Ball',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 100,
                'price' => 35.99,
                'category_id' => 1,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'football_ball.jpeg'
            ],
            [
                'name' => 'NIKE Football Boots Mercurial',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 134,
                'price' => 199.99,
                'category_id' => 1,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'football_boots_mercurial.jpg'
            ],
            [
                'name' => 'Reebok Football Goalkeeper Gloves',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 246,
                'price' => 34,
                'category_id' => 1,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'football_gloves.png'
            ],
            [
                'name' => 'HIGH QUALITY Football NIKE Boots',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 100,
                'price' => 35.99,
                'category_id' => 1,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'football_nike_boots.jpg'
            ],
            [
                'name' => 'HIGH QUALITY running AONIJIE Water Bottle',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 367,
                'price' => 15.99,
                'category_id' => 6,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'running_aonijie_water_bottle.jpg'
            ],
            [
                'name' => 'RUNNING Fresh Foam Sneakers',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 199,
                'price' => 305.99,
                'category_id' => 6,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'running_fresh_foam_sneakers.jpg'
            ],
            [
                'name' => 'Running NIKE Sportband',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 456,
                'price' => 39.99,
                'category_id' => 6,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'running_nike_sportband.jpg'
            ],
            [
                'name' => 'Swimming Silicon Rubber',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 456,
                'price' => 3.99,
                'category_id' => 5,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'swimming_silicon_rubber.jpg'
            ],
            [
                'name' => 'Silicon Swimming Goggles',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 156,
                'price' => 12.50,
                'category_id' => 5,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'swimming_silicon_swimming_goggles.jpg'
            ],
            [
                'name' => 'Swimming Snorkeling Gear Equipment',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 456,
                'price' => 122,
                'category_id' => 5,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'swimming_snorkeling_gear_equipment.jpg'
            ],
            [
                'name' => 'Water Noodle Swimming Equipment Swimming Noodles',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consequat.',
                'quantity' => 656,
                'price' => 5.50,
                'category_id' => 5,
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'Water_Noodle_Swimming_Equipment_Swimming_Noodles.jpg'
            ]
        ];

        DB::table('products')->insert($products);
    }
}
