<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Centella Asiatica with Greentea Petals Face Mask',
            'short_name' => 'Centella Asiatica',
            'price' => 'Rp. 15.000,00',
            'model_image' => '/img/2-Holy-Tease.jpg',
            'product_image' => '/img/HOLYTEASE1.jpg',
            'details' => ''
        ]);
        Product::create([
            'name' => 'Chamomile Petals with Sakura Face Mask',
            'short_name' => 'Chanomile',
            'price' => 'Rp. 15.000,00',
            'model_image' => '/img/3-Holy-Tease.jpg',
            'product_image' => '/img/HOLYTEASE2.jpg',
            'details' => ''
        ]);
        Product::create([
            'name' => 'Hibiscus Petals with Allantoin Face Mask',
            'short_name' => 'Hibiscus',
            'price' => 'Rp. 15.000,00',
            'model_image' => '/img/4-Holy-Tease.jpg',
            'product_image' => '/img/HOLYTEASE3.jpg',
            'details' => ''
        ]);
        Product::create([
            'name' => 'Lavender Petals with Allantoin Face Mask',
            'short_name' => 'Lavender',
            'price' => 'Rp. 15.000,00',
            'model_image' => '/img/5-Holy-Tease.jpg',
            'product_image' => '/img/HOLYTEASE4.jpg',
            'details' => ''
        ]);
        Product::create([
            'name' => 'Jasmine Petals with Allantoin Face Mask',
            'short_name' => 'Jasmine',
            'price' => 'Rp. 15.000,00',
            'model_image' => '/img/6-Holy-Tease.jpg',
            'product_image' => '/img/HOLYTEASE5.jpg',
            'details' => ''
        ]);
        Product::create([
            'name' => 'Rose Petals with Allantoin Face Mask',
            'short_name' => 'Rose Petals',
            'price' => 'Rp. 15.000,00',
            'model_image' => '/img/7-Holy-Tease.jpg',
            'product_image' => '/img/HOLYTEASE6.jpg',
            'details' => ''
        ]);
        Product::create([
            'name' => 'Calendula Petals with Centella Asiatica Face Mask',
            'short_name' => 'Calendula',
            'price' => 'Rp. 15.000,00',
            'model_image' => '/img/8-Holy-Tease.jpg',
            'product_image' => '/img/HOLYTEASE7.jpg',
            'details' => ''
        ]);
        Product::create([
            'name' => 'Aloevera Minty Face Mask',
            'short_name' => 'Aloevera',
            'price' => 'Rp. 15.000,00',
            'model_image' => '/img/9-Holy-Tease.jpg',
            'product_image' => '/img/HOLYTEASE8.jpg',
            'details' => ''
        ]);
        Product::create([
            'name' => 'Daisy Flower with Centella Asiatica Face Mask',
            'short_name' => 'Daisy',
            'price' => 'Rp. 15.000,00',
            'model_image' => '/img/10-Holy-Tease.jpg',
            'product_image' => '/img/HOLYTEASE9.jpg',
            'details' => ''
        ]);
        Product::create([
            'name' => 'Butterfly Pea Petals with Centella Asiatica Face Mask',
            'short_name' => 'Butterfly Pea',
            'price' => 'Rp. 15.000,00',
            'model_image' => '/img/11-Holy-Tease.jpg',
            'product_image' => '/img/HOLYTEASE10.jpg',
            'details' => ''
        ]);
    }
}
