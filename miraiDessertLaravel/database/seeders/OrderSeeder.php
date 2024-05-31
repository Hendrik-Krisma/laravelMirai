<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tborder')->insert([
            'id'=> '5',
            'paymentType'=> 'Tunai',
            'paymentStatus'=> 'Done',
            'productList'=> 'Mango Sago 300ml',
            'orderDate'=> '2024-05-25',
            'orderTotal'=>'20000',
        ]);
    }
}
