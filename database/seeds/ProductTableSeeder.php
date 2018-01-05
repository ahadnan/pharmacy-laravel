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
        $product = new \App\Product([
            'name' => 'NAPA',
            'image' => 'uploads/products/pills.png',
            'price' => 0.90,
            'availability' => 'In Stock',
            'brand' => 'Beximco Pharmaceuticals Ltd',
            'productcode' => 'Paracetamol'
        ]);
        $product->save();
        $product = new \App\Product([
            'name' => 'NAPA EXTRA',
            'image' => 'uploads/products/pills.png',
            'price' => 2.50,
            'availability' => 'In Stock',
            'brand' => 'Beximco Pharmaceuticals Ltd',
            'productcode' => 'Caffeine 65 mg + Paracetamol 500 mg Tablet'
        ]);
        $product->save();
        $product = new \App\Product([
            'name' => 'VASTAREL MR 35MG (BOX)',
            'image' => 'uploads/products/pills.png',
            'price' => 270.00,
            'availability' => 'In Stock',
            'brand' => 'Eskayef Bangladesh Ltd',
            'productcode' => 'Trimetazidine Dihydrochloride'
        ]);
        $product->save();
        $product = new \App\Product([
            'name' => 'DEFLUX DROP 15ML',
            'image' => 'uploads/products/pills.png',
            'price' => 20.00,
            'availability' => 'In Stock',
            'brand' => 'Beximco Pharmaceuticals Ltd',
            'productcode' => 'DEFLUX Drop'
        ]);
        $product->save();
        $product = new \App\Product([
            'name' => 'PANTOBEX TAB. 20MG X 1 OO PACK',
            'image' => 'uploads/products/pills.png',
            'price' => 500.00,
            'availability' => 'In Stock',
            'brand' => 'Beximco Pharmaceuticals Ltd',
            'productcode' => 'PANTOBEX Tab'
        ]);
        $product->save();
        $product = new \App\Product([
            'name' => 'ANTACID MAX TAB',
            'image' => 'uploads/products/pills.png',
            'price' => 200.00,
            'availability' => 'In Stock',
            'brand' => 'Beximco Pharmaceuticals Ltd',
            'productcode' => 'ANTACID MAX Tab'
        ]);
        $product->save();
        $product = new \App\Product([
            'name' => 'NAPA',
            'image' => 'uploads/products/pills.png',
            'price' => 0.90,
            'availability' => 'In Stock',
            'brand' => 'Beximco Pharmaceuticals Ltd',
            'productcode' => 'Paracetamol'
        ]);
        $product->save();
        $product = new \App\Product([
            'name' => 'NAPA',
            'image' => 'uploads/products/pills.png',
            'price' => 0.90,
            'availability' => 'In Stock',
            'brand' => 'Beximco Pharmaceuticals Ltd',
            'productcode' => 'Paracetamol'
        ]);
        $product->save();
        $product = new \App\Product([
            'name' => 'NAPA',
            'image' => 'uploads/products/pills.png',
            'price' => 0.90,
            'availability' => 'In Stock',
            'brand' => 'Beximco Pharmaceuticals Ltd',
            'productcode' => 'Paracetamol'
        ]);
        $product->save();
        $product = new \App\Product([
            'name' => 'NAPA',
            'image' => 'uploads/products/pills.png',
            'price' => 0.90,
            'availability' => 'In Stock',
            'brand' => 'Beximco Pharmaceuticals Ltd',
            'productcode' => 'Paracetamol'
        ]);
        $product->save();
    }
}
