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
            'price' => 15000,
            'model_image' => '2-Holy-Tease.jpg',
        ]);
        Product::create([
            'name' => 'Chamomile Petals with Sakura Face Mask',
            'short_name' => 'Chanomile',
            'price' => 15000,
            'model_image' => '3-Holy-Tease.jpg',
        ]);
        Product::create([
            'name' => 'Hibiscus Petals with Allantoin Face Mask',
            'short_name' => 'Hibiscus',
            'price' => 15000,
            'model_image' => '4-Holy-Tease.jpg',
        ]);
        Product::create([
            'name' => 'Lavender Petals with Allantoin Face Mask',
            'short_name' => 'Lavender',
            'price' => 15000,
            'model_image' => '5-Holy-Tease.jpg',
        ]);
        Product::create([
            'name' => 'Jasmine Petals with Allantoin Face Mask',
            'short_name' => 'Jasmine',
            'price' => 15000,
            'model_image' => '6-Holy-Tease.jpg',
        ]);
        Product::create([
            'name' => 'Rose Petals with Allantoin Face Mask',
            'short_name' => 'Rose Petals',
            'price' => 15000,
            'model_image' => '7-Holy-Tease.jpg',
        ]);
        Product::create([
            'name' => 'Calendula Petals with Centella Asiatica Face Mask',
            'short_name' => 'Calendula',
            'price' => 15000,
            'model_image' => '8-Holy-Tease.jpg',
        ]);
        Product::create([
            'name' => 'Aloevera Minty Face Mask',
            'short_name' => 'Aloevera',
            'price' => 15000,
            'model_image' => '9-Holy-Tease.jpg',
        ]);
        Product::create([
            'name' => 'Daisy Flower with Centella Asiatica Face Mask',
            'short_name' => 'Daisy',
            'price' => 15000,
            'model_image' => '10-Holy-Tease.jpg',
        ]);
        Product::create([
            'name' => 'Butterfly Pea Petals with Centella Asiatica Face Mask',
            'short_name' => 'Butterfly Pea',
            'price' => 15000,
            'model_image' => '11-Holy-Tease.jpg',
        ]);
    }
}
