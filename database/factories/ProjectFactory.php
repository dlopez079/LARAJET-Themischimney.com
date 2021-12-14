<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Project fields
            'project_name' => $this->faker->unique()->streetAdress(),
            'company' => 1,
            'prime_id' => 2,
            'general_contractor_id' => 3,
            'street' => $this->faker->unique()->streetAddress(),
            'floor' => $this->faker->randomDigitNotNull(),
            'room' => $this->faker->secondaryAddress(), //secondaryAddress(), ex. 'Suite 961'
            'city' => $this->faker->citySuffix(), //citySuffix() ex.'borough'
            'st' => 'NY', //stateAbbr() ex.'OH'
            'zip' => $this->faker->postcode(), //postcode() ex.'17916'
        ];
    }
}
