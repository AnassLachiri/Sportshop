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
        $cat1 = new Category;
        $cat1->name = "Equipements";
        $cat1->save();


        $cat2 = new Category;
        $cat2->name = "Clothes";
        $cat2->save();
    }
}
