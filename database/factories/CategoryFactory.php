<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Category;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;


class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'  => $this->faker->firstName." ".$this->faker->lastName,
            'description'       => $this->faker->sentence,
            'photo'       => $this->faker->image('public/storage/photos', 400, 300, null, false),

        ];
    }
}
