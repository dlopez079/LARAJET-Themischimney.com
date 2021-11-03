<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use League\CommonMark\Normalizer\UniqueSlugNormalizer;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Client Table
            'company_name' => $this->faker->unique()->company(), // Unique Company Name
            'slug' => $this->faker->unique()->slug(), // Unique Slug
            'company_phone' => $this->faker->randomDigitNotNull(), // The phone number is store as string(10).
            'company_website' => $this->faker->url(), // This is the company website.
            'status' => $this->faker->boolean(),  // This is the status of the company.  When entered, it will automaticalkly active the client account.

        ];
    }
}
