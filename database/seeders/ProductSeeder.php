<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Products;
        $product->name = 'Jordan X 255';
        $product->price = 150;
        $product->quantity = 2;
        $product->photo_path = '67808a0b77d832e4ef73a402491ab5a12648520.jpg';
        $product->save();

        $product->raffle()->create();
    }
}
