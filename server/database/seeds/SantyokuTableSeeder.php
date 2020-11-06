<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SantyokuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('santyokus')->insert([
            'title' => '商品',
            'description' => '詳細',
            'price' => '15000',
            'image_url' => 'https://growthseed.jp/wp-content/uploads/2016/12/peach-1.jpg',
            'img_path' => 'https://www.pakutaso.com/shared/img/thumb/ookawa151107468069_TP_V.jpg'
        ]);
    }
}
