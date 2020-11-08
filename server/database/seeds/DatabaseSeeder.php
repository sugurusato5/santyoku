<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(SantyokuTableSeeder::class);
        $this->call(ImageTableSeeder::class);
        $this->call(CartTableSeeder::class);
    }
}
