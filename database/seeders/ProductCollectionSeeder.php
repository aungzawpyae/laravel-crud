<?php

namespace Database\Seeders;

use App\Models\ProductCollection;
use Illuminate\Database\Seeder;

class ProductCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collections = [
            'New Products',
            'Premium Products',
            'New Year Super Sales',
            'Home Appliance',
           ];

           foreach ($collections as $collection) {
            ProductCollection::create([
                'name'  => $collection,
                'active'=>true,
                'slug'  =>$collections,
               ]);
           }


    }
}
