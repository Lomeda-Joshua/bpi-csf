<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\customer_satiscation>
 */
class customer_satisfactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = \App\Models\customer_satisfaction::class;

    public function definition(): array
    {
        return [
            'csf_time' => $this->faker->time('H:i:s'), // Random time
            'csf_date' => $this->faker->date('Y-m-d'), // Random date
            'name' => $this->faker->name, // Random name
            'age' => $this->faker->numberBetween(1, 3), // Random age between 18 and 80
            'gender' => $this->faker->numberBetween(1, 2), // Random gender
            'contact_details' => $this->faker->phoneNumber, // Random phone number
            'individual_group' => $this->faker->numberBetween(1, 2), // Random individual/group
            'private_government' => $this->faker->numberBetween(1, 2), // Random private/government
            'internal_external' => $this->faker->numberBetween(1, 2), // Random internal/external
            'name_of_agency' => $this->faker->company, // Random company name
            'types_of_goods_services' => $this->faker->sentence, // Random description of goods/services
            'criteria_quality_of_goods' => $this->faker->numberBetween(1, 5), // Random rating (1-5)
            'criteria_courteousness' => $this->faker->numberBetween(1, 5), // Random rating (1-5)
            'criteria_responsiveness' => $this->faker->numberBetween(1, 5), // Random rating (1-5)
            'criteria_overall_experience' => $this->faker->numberBetween(1, 5), // Random rating (1-5)
            'promoter_score' => $this->faker->numberBetween(1, 5), // Random promoter score (0-10)
            'comments_suggestions' => $this->faker->text(100), // Random comments/suggestions
            'office_id' => $this->faker->numberBetween(1, 4), // Random office ID (assuming 1-10)
        ];
    }
}
