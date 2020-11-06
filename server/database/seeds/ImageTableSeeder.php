<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'image_url' => 'https://growthseed.jp/wp-content/uploads/2016/12/peach-1.jpg',
        ]);
    }
}
