<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'  => $this->faker->sentence,
            'price' => $this->faker->randomNumber(2),
            'id_user'=> rand(1,10),
            'id_editor' => rand(1,5),
            'id_book_category' => rand(1,5)
        ];
    }
}