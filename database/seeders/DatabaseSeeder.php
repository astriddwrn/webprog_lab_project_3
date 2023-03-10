<?php

namespace Database\Seeders;

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
        $this->call(categorySeeder::class);
        $this->call(itemSeeder::class);
        $this->call(pictureSeeder::class);
        $this->call(userSeeder::class);
    }
}