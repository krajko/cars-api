<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Arr;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->company(),
            'model' => ucfirst($this->faker->word()),
            'year' => $this->faker->year(),
            'max_speed' => $this->faker->numberBetween(20, 300),
            'is_automatic' => $this->faker->boolean(),
            'engine' => ucfirst(Arr::random(['diesel', 'petrol', 'electric', 'hybrid'])),
            'number_of_doors' => $this->faker->numberBetween(2, 5)
        ];
    }
}
