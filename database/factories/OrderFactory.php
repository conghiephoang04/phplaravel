<?php

namespace Database\Factories;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Order::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'phone' => '0' . $this->faker->numberBetween(1, 9) . $this->faker->numberBetween(10000000, 99999999),
            'address' => $this->faker->address(),
            'payment_method' => $this->faker->randomElement(['tiền mặt', 'ngân hàng']),
            'buy_date' => $this->faker->dateTimeBetween('-2 year', 'now'),
            'status' => $this->faker->randomElement(['gio-hang', 'giao-hang', 'thanh-cong', 'that-bai']),
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
        ];
    }
}
