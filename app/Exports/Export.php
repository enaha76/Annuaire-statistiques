<?php
namespace App\Exports;

use App\Models\ESP;
use App\Models\ISCAE;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class Export implements FromCollection, WithHeadings
{



    private $data; 

    public function __construct(array $data = [])
    {
        $name="App\Models\\".$data[0]['package'];
        $this->data = app($name);
       }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      
      
        return $this->data::select(
                            'N°_inscription',
                            'NNI',
                            'N°_de_BAC',
                            'Nom_et_prenom',
                            'GENRE',
                            'date_DE_NAISSANCE',
                            'ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE',
                            'Niveau',
                            'ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_ce_niveau',
                            'NOM_DU_(TRONC/FILIRERE)',
                            'FORMATION',
                            'Redoublant',
                            "BOURSIER_OU_BENEFICIANTS_D'AIDE",
                            "TRANSFERE",
                            "année_universitaire_de_la_première_inscription_à_l'établissement",
                            "etablissement_de_provenance",
                            "NATIONALITE",
                            "LANGUE_DE_FORMATION",
                            "annee_scolaire")->get();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return [`N°_inscription`,
        `NNI`,
        `N°_de_BAC`,
        `Nom_et_prenom`,
        `GENRE`,
        `date_DE_NAISSANCE`,
        `ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE`,
        `Niveau`,
        `ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_ce_niveau`,
        `NOM_DU_(TRONC/FILIRERE)`,
        `FORMATION`,
        `Redoublant`,
        `BOURSIER_OU_BENEFICIANTS_D'AIDE`,
        `TRANSFERE`,
        `année_universitaire_de_la_première_inscription_à_l'établissement`,
        `etablissement_de_provenance`,
        `NATIONALITE`,
        `LANGUE_DE_FORMATION`,
        `annee_scolaire`];
    }
}




