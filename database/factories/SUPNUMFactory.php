<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ISN>
 */
class SUPNUMFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      
        $year=$this->faker->year().'-'.$this->faker->year();
        return [
            'N°_inscription'=> $this->faker->unique()->regexify('[I][4][0-9]{4}'),
            'NNI'=> $this->faker->randomNumber(9, true),
            'N°_de_BAC'=> $this->faker->randomNumber(5,true),
            'Nom_et_prenom'=>$this->faker->name($gender = ''|'male'|'female') ,
            'GENRE' => $this->faker->randomElement(['M','F']),
            'date_DE_NAISSANCE' => $this->faker->date('Y:m:d'),
            'ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE'=>'2021-2022',
            'Niveau' => $this->faker->randomElement(['L1','L2','L3']),
            'ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_ce_niveau'=>$year,
            'NOM_DU_(TRONC/FILIRERE)'=> $this->faker->randomElement(['INFO','MED','STAT','DROIT']),
            'FORMATION'=> $this->faker->randomElement(['ACADEMIQUE','PROFETIONNEL']),
           'Redoublant'=> $this->faker->randomElement(['non','oui','oui']),
           'BOURSIER_OU_BENEFICIANTS_D\'AIDE'=>$this->faker->randomElement(['non','oui','oui']),
           'TRANSFERE'=>$this->faker->randomElement(['non','oui','oui','oui','oui']),
           'année_universitaire_de_la_première_inscription_à_l\'établissement'=>'',
           'etablissement_de_provenance'=>'',
            'NATIONALITE'=>'MAURITANIE',
            'LANGUE_DE_FORMATION'=>$this->faker->randomElement(['francais','francais','francais','arab']),
            'annee_scolaire'=>'2020-2021'
        ];
    }
}
