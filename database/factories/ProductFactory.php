<?php

namespace Database\Factories;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    protected $model=Product::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween(100000, 1000000000),
            'sale' => $this->faker->numberBetween(0, 50), // Phần trăm giảm giá (nếu có)
            'description' => $this->faker->text(100),
            'detail' => $this->faker->text,
            'status' => $this->faker->randomElement(['con-hang', 'het-hang']),
            'category_id' => function () {
                return \App\Models\Category::factory()->create()->id;
            },
        ];
    }
}
