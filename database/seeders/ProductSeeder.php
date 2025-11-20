<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        $products = [
            [
            'image' => 'product1',
            'name' => 'Head phone', 
            'description' => Str::random(50), 
            'price' => '75.00'
            ],
            [
            'image' => 'product2',
            'name' => 'Sun glass', 
            'description' => Str::random(70), 
            'price' => '19.99'
            ],
            [
            'image' => 'product3',
            'name' => 'Analog watch', 
            'description' => Str::random(30), 
            'price' => '10.99'
            ],
            [
            'image' => 'product4',
            'name' => 'Digital watch', 
            'description' => Str::random(20), 
            'price' => '7.50'
        ]
        ];
        foreach($products as $product){
            DB::table('products')->insert($product);
        }
    }
}
