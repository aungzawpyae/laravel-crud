<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banners = [
            'banner/b_1.jpg',
            'banner/b_2.jpg',
            'banner/b_3.jpg',
            'banner/b_4.jpg',
           ];

           foreach ($banners as $key => $banner) {
            Banner::create([
                'name'  => 'Banner'.$key,
                'image'  => $banner,
                'active'    => true,
               ]);
           }
       
    }
}
