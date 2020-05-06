<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
       
        $ord1 = new Order;
        $ord1->id = 1;
        $ord1->product_id=1;
        $ord1->user_id=1;
        $ord1->quantity=1;
        $ord1->is_delivered=0;
        $ord1->address="sdjkdc";
        $ord1->country="csdc";
        $ord1->save();

    }
}
