<?php

namespace Database\Factories;

use App\Models\Pondok;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kawasan>
 */
class KawasanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'pondok_id' => Pondok::all()->random()->id
        ];
    }
}
