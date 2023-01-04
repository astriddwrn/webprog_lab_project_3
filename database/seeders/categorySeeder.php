<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cats = [
            [
                'id' => 'men'
            ],
            [
                'id' => 'women'
            ],
        ];

        foreach($cats as $cat){
            Category::create($cat);
        }
    }
}
