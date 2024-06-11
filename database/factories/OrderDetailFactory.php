<?php

namespace Database\Factories;
use App\Models\Orderdetail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Orderdetail::class;
    public function definition(): array
    {
        return [
            'product_id'=>function() {
                return \App\Models\Product::factory()->create()->id;
             },
             'price'=>$this->faker->numberBetween('1000',1000000000),
             'quantity'=>$this->faker->randomFloat(),
             'order_id'=>function(){
                 return \App\Models\Order::factory()->create()->id;
             },
        ];
    }
}
