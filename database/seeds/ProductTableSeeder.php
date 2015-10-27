<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product();
        $product->product_code = 'PD1001';
        $product->product_name = 'iPhone6s';
        $product->price = 27000.00;
        $product->save();

        $product2 = new \App\Product();
        $product2->product_code = 'PD1002';
        $product2->product_name = 'Galaxy S6';
        $product2->price = 26000.00;
        $product2->save();

        $product3 = new \App\Product();
        $product3->product_code = 'PD1003';
        $product3->product_name = 'Zenfone 2';
        $product3->price = 10000.00;
        $product3->save();

        $product = new \App\Product();
        $product->product_code = 'PD1004';
        $product->product_name = 'Nokia 3310';
        $product->price = 100000.00;
        $product->save();
    }
}
