<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Vinkla\Hashids\Facades\Hashids;


use Illuminate\Support\Str;
class ProductFactory extends Factory
{
    protected $i = 0;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        return [
            "name_en"          => $this->faker->word(),
            "name_mm"          => "ကုန်ပစ္စည်း - " .rand(1,100),
            "details_eng"          => $this->faker->sentence(),
            "details_mm"          =>"မြန်မာနိုင်ငံတွင် Lifetime Service Warranty (တစ်သက်တာ လက်ခမဲ့ ပြင်ဆင်ခွင့်) ကို ပထမဦးဆုံးပေးအပ်ခဲ့ပါသည်။",
            "price_eng"        =>$this->faker->randomNumber(6),
            "price_mm"         =>"၉၉၉၉၉၉",
            "image"            => "products/p_3.jpg",
            "category_id"      => rand(1, 8),
            "quantity"         =>10,
            "slug"             => ProductSlug("ProductSlug".$this->i++. "-" . now()) ,
        ];
    }
}
