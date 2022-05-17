<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {
        $name = $this->faker->unique()->numerify('product N##');
        return [
            'title'=> $this->faker->word(),
            'slug' => Str::slug($name),
            'description' => $this->faker->text(100),
            'image' => $this->faker->imageUrl(640,640,'cats'),
            'cost' =>$this->faker->numberBetween(100,10000),
            'category_id' =>$this->faker->numberBetween($min = 1,$max = 8)
        ];
    }
}
