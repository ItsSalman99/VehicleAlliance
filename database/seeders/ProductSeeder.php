<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Shop;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Shop::count() == 0) {
            Shop::create([
                'name' => 'Vehicle Bazaar',
                'seller_id' => 3
            ]);
        }
        if (Product::count() == 0) {
            Product::create([
                'name' => 'Bike Head Light 70cc',
                'img' => 'https://static-01.daraz.pk/p/f35b9522fd2fee7a4b7b13f80ab68dea.jpg',
                'price' => '500',
                'description' => 'Head Light - All 70cc Models -Recommended by Super Power Motorcycles',
                'in_stock' => 1,
                'shop_id' => 1,
                'seller_id' => 3
            ]);
            Product::create([
                'name' => 'Autojin Car Back Seat Inflatable Air Mattress for Camping',
                'img' => 'https://static-01.daraz.pk/p/26bd20b530a7a96aca920a455332a137.jpg',
                'price' => '3999',
                'description' => 'This car backseat air bed mattress is loved by travelers and families alike. It brings an extra comfort level to your driving experience, specially when on long journeys, hiking, camping, and any outdoor activities. An inflatable Car Bed is space-saving. You will see the less amount of space it needs to be compared to your regular mattresses. This Car mattress also comes with a carrying pouch so you can conveniently take it with you or store it. Got this bed for car seats, you dont need to spend money on hotels or spent time to set up a tent anymore. Youll feel like sleeping on a sofa when you were sleeping on this car air mattress. Great for kids to relax on the back seat. Your lovely pets will love it too.',
                'in_stock' => 1,
                'shop_id' => 1,
                'seller_id' => 3
            ]);
        }
    }
}
