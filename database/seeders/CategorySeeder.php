<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'  =>'Apple',
            'image'=>'category/apple.jpg',

        ]);
        Category::create([
            'name'  =>'Samsung',
            'image'=>'category/samsung.jpg',

        ]);
        Category::create([
            'name'  =>'Huawei',
            'image'=>'category/huawei.jpg',

        ]);
        Category::create([
            'name'  =>'Oppo',
            'image'=>'category/oppo.jpg',

        ]);
        Category::create([
            'name'  =>'Vivo',
            'image'=>'category/vivo.jpg',

        ]);
       
    }
}
