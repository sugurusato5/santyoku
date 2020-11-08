<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('cars')->insert([
            'user_id' => 3,
            'stock_id' => 25,
            
            ]);
    }
}
