<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\File;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();
        $category = Category::all()->random()->category_id;
        
        $image = rand(1, 11).".jpg";

        return [
            'name' => $name,
            'description' => $this->faker->text($maxNbChars = 250),
            'categoryId' => $category,
            'slug' => Str::slug($name, '-'),
            'stock' => rand(1, 300),
            'qual' => rand(1, 5),
            'price' => rand(40, 1600),
            'image' => $image
        ];
    }
}
