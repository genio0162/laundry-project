<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laundry>
 */
class LaundryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'item_id' => mt_rand(1,2),
            'perfume_id' =>  mt_rand(1,4),
            'user_id' => mt_rand(2,15),
            'tanggal_masuk' => fake()->date(),
            'tanggal_selesai' => fake()->date(),
            'total_pembayaran' => 10000,
            'payment_id' => mt_rand(1,2),
            'pickup_id' => mt_rand(1,2),
        ];
    }
}
