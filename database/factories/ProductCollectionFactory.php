<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductCollectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $banners = [
            'banner/b_1.jpg',
            'banner/b_2.jpg',
            'banner/b_3.jpg',
            'banner/b_4.jpg',
           ];

           foreach ($banners as $key => $banner) {
                return [
                    'name' => 'Collection',
                    'name'  => 'Collection'.$key,
                 ];
            // Banner::create([
            //     'name'  => 'Banner'.$key,
            //     'image'  => $banner,
            //     'active'    => true,
            //    ]);
           }
        
    }
}
