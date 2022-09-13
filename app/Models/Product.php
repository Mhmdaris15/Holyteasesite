<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $products = [
        [
            'id' => 1,
            'name' => 'Product 1',
            'price' => 1000,
            'description' => 'This is the description of the product 1.',
        ],
        [
            'id' => 2,
            'name' => 'Product 2',
            'price' => 2000,
            'description' => 'This is the description of the product 2.',
        ],
        [
            'id' => 3,
            'name' => 'Product 3',
            'price' => 3000,
            'description' => 'This is the description of the product 3.',
        ],
    ];

    public static function all()
    {
        return collect(self::$products);
    }

}
