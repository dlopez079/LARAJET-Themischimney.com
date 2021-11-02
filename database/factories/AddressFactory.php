<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;


class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Address fields
            
            'street' => $this->faker->unique()->streetAddress(),
            'floor' => $this->faker->randomDigitNotNull(),
            'room' => $this->faker->secondaryAddress(), //secondaryAddress(), ex. 'Suite 961'
            'city' => $this->faker->citySuffix(), //citySuffix() ex.'borough'
            'st' => $this->faker->stateAbbr(), //stateAbbr() ex.'OH'
            'zip' => $this->faker->postcode(), //postcode() ex.'17916'
        ];
    }
}
