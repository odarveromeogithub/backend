<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = 
        [
            [
                'name' => 'Apple',
                'description' => 'Apple product'
            ],
            [
                'name' => 'Mango',
                'description' => 'Mango product'
            ],
        ];
        // can be done like this.
        // foreach($products as $product) {
        //     DB::table('products')->insert($product);
        // }

        //but easier and faster
        // Product::insert($products);
        foreach($products as $product) {
            Product::create($product);//with created_at and updated_at
        }
    }
}
