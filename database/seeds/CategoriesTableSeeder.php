<?php

use App\Category;
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
        $categories = [
            [
                'name' => "Football",
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'football.jpg'

            ],[
                'name' => "Basketball",
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'basketball.jpg'

            ],[
                'name' => "Calisthenics",
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'calisthenics.jpg'

            ],[
                'name' => "Bodybuilding",
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'bodybuilding.jpg'

            ],[
                'name' => "Swimming",
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'swimming.jpg'

            ],[
                'name' => "Running",
                'created_at' => new DateTime,
                'updated_at' => null,
                'image' => 'running.jpeg'

            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
