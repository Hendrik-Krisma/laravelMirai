<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_invoices')->insert([
            'orderID' => '10002',
            'issueDate' => '30-05-24',
            'dueDate' => '01-06-24',
            'paid' => '20000',

        ]);
    }
}
