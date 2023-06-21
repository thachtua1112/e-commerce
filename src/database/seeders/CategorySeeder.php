<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Electronics']);

        $laptopCategory = Category::create(['name' => 'Laptops']);
        Category::create(['name' => 'Gaming Laptops', 'parent_id' => $laptopCategory->id]);
        Category::create(['name' => 'Ultrabooks', 'parent_id' => $laptopCategory->id]);

        $phoneCategory = Category::create(['name' => 'Phones']);
        Category::create(['name' => 'Smartphones', 'parent_id' => $phoneCategory->id]);
        Category::create(['name' => 'Feature Phones', 'parent_id' => $phoneCategory->id]);
    }
}
