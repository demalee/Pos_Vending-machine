<?php

namespace Database\Seeders;
use App\Models\UjuziProduct;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeder for products
        $product = new UjuziProduct();
        $product->name = "Sport Shoe";
        $product->description = "This is a sport shoe";
        $product->price = "800";
        $product->slot = "5";
        $product->quantity = "1";
        $product->image = "1684362757.jpeg";
        $product->category = "Shoe";
        $product->save();

        $product = new UjuziProduct();
        $product->name = "Sumsung Tv";
        $product->description = "This is a tv for test ";
        $product->price = "200";
        $product->slot = "5";
        $product->quantity = "1";
        $product->image = "1684362757.jpeg";
        $product->category = "Television";
        $product->save();
    }

    private function save()
    {
    }


}
