<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class tablesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
 
        
           
                'abrev' => 'FST',
                'nom'=> 'Faculite de Science et Technique',
                'tutle'=> 'Ministère de l\'enseignement supérieur',
                'co-tutle' => '',
                'privee'=>0
           
          
            
                 
        ];
    }
}
