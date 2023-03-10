<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Requirements>
 */
class RequirementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'E.S.O',
            'description' => 'Títol de graduat en Educació Secundària Obligatòria o estudis declarats equivalents a efectes acadèmics.',
        ];
    }
}
