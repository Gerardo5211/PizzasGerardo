<?php

namespace Database\Factories;

use App\Models\Pizza;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PizzaFactory extends Factory
{
    protected $model = Pizza::class;

    public function definition()
    {
        $toppings = $this->faker->words(3, false);
        $toppings = array_unique($toppings);

        return [
            'user_id' => User::factory(),
            'size' => ['Small', 'Medium', 'Large', 'Extra-Largess'][rand(0, 3)],
            'crust' => ['Regular', 'Thin', 'Garlic'][rand(0, 2)],
            'status' => ['Ordered', 'Prepping', 'Baking', 'Checking', 'Ready'][rand(0, 4)],
            'toppings' => $toppings,
        ];
    }
}
