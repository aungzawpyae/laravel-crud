<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCollection;
use App\Models\ProductWithCollection;
use Illuminate\Database\Seeder;

class ProductWithCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collection = ProductCollection::count();
        for($test = 1; $test <= $collection; $test++) {
            for($count = 0; $count < 15; $count++) {
                ProductWithCollection::create([
                    'product_id' => rand(1, Product::count()),
                    'product_collection_id' => $test
                ]);
            }
        }
    }
}
