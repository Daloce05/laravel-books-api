<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = \App\Models\Book::class;

    public function definition(): array
    {
        return [
            'book_name' => $this->faker->sentence(3),
            'book_author_name' => $this->faker->name(),
            'book_price' => $this->faker->randomFloat(2, 10, 200),
            'book_stock' => $this->faker->numberBetween(1, 100),
            'book_status' => $this->faker->boolean(),
        ];
    }
}
