<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => '718 Cayman',
                'brand' => 'Porsche',
                'description' => '4 wheels tractor',
                'price' => 3000200,
                'quantity' => 2,
            ],
            [
                'name' => '718 Boxster',
                'brand' => 'Porsche',
                'description' => '5 wheels tractor',
                'price' => 4999999,
                'quantity' => 54,
            ],
            [
                'name' => '718 Cayman Style Edition',
                'brand' => 'Porsche',
                'description' => '6 wheels tractor',
                'price' => 4999999,
                'quantity' => 54,
            ],
            [
                'name' => '718 Boxster Style Edition',
                'brand' => 'Porsche',
                'description' => '10 wheels tractor',
                'price' => 4999999,
                'quantity' => 54,
            ],
        ];
        foreach($products as $p) {
            Product::create($p);
        }
        // foreach($keyboards as $k) {
        //     Keyboard::create($k);
        // };
    }
}
