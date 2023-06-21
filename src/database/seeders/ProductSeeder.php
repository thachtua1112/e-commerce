<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $laptopCategory = Category::where('name', 'Laptops')->first();
        $ultraBookCategory = Category::where('name', 'Ultrabooks')->first();
        $smartphoneCategory = Category::where('name', 'Smartphones')->first();

        Product::create([
            'name' => 'Dell XPS 13',
            'description' => 'Powerful ultraBook with high-end specs',
            'price' => 1499.99,
            'category_id' => $ultraBookCategory->id,
        ]);

        Product::create([
            'name' => 'HP Spectre x360',
            'description' => 'Convertible laptop with sleek design',
            'price' => 1299.99,
            'category_id' => $ultraBookCategory->id,
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S21',
            'description' => 'Flagship smartphone with powerful camera',
            'price' => 999.99,
            'category_id' => $smartphoneCategory->id,
        ]);
    }
}
