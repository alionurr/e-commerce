<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Oppo mobile',
                'price' => '300',
                'description' => 'A smart phone with 8gb ram and much more feature',
                'category' => 'mobile',
                'gallery' => 'https://images.app.goo.gl/Rn6Vq1LbZXUM1AaWA',
            ],
            [
                'name' => ' Samsung TV',
                'price' => '400',
                'description' => 'A smart tv with much more feature',
                'category' => 'tv',
                'gallery' => 'https://images.app.goo.gl/5Xrz5UVzUxAYDFAS7',
            ],
            [
                'name' => 'Sony TV',
                'price' => '500',
                'description' => 'A smart tv with much more feature',
                'category' => 'tv',
                'gallery' => 'https://images.app.goo.gl/xt9iNthWQQaQ8i8N6',
            ],
            [
                'name' => 'LG fridge',
                'price' => '800',
                'description' => 'A fridge with much more feature',
                'category' => 'fridge',
                'gallery' => 'https://images.app.goo.gl/ikhwrbSF1e1DgxbD9',
            ]
        ]);
    }
}
