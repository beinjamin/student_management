<?php

namespace Database\Factories;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{

    protected $model = Etudiant::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'name' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'classe_id' => rand(1, 7),
        ];
    }
}
