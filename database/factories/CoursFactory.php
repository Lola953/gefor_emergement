<?php

namespace Database\Factories;

use App\Models\Cours;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cours>
 */
class CoursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $local ='fr_FR';

        $start = fake($local)->dateTimeBetween('-1 year','+1year');
        $end = (clone $start)->modify('+'.fake()->numberBetween(120.240).'minutes');

        // on lui dit si on valide si c'est TRUE

        $valide = fake()->boolean();

        if ($valide){
            $date_validation = (clone $start)->modify('+' . fake()
            ->numberBetween(10,60).'minutes');
        } else {
            $date_validation = null;
        }
        // niveau 1

        //niveau2 
        //$date_validation = $valide ? (clone $start)->modify('+'.fake()->numberBetween(120.240).'minutes');


        return [
            'heure_debut' => $start->format('H:i:s'), 
            'heure_fin' => $end->format('H:i:s'),
            'matiere' => 'Cours de'. fake($local)->word(),
            'date' => $start->format('Y-m-d'),
            
            //ce qu'il renvoie
        ];
    }
}
