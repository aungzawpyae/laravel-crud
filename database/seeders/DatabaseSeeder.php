<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {     
        $this->call([UserSeeder::class]);
        $this->call([ProductSeeder::class]);
        $this->call([CategorySeeder::class]);
        $this->call([BannerSeeder::class]);
        // $this->call([ProductCollectionSeeder::class]);
        $this->call([AnnouncementSeeder::class]);
        // $this->call([ProductWithCollectionSeeder::class]);
    
    }
}
