<?php
namespace App\Imports;
use App\Models\ESP;
use Database\Factories\ESPFactory;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
class Import implements WithHeadingRow,ToCollection
{




    private $data; 

    public function __construct(array $data = [])
    {
        if($data[0]['package']){
        $name="App\Models\\".$data[0]['package'];
        $this->data = app($name);}
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null|array|\view
    */
    public function collection(Collection $dataa)
    {
        $arr = [];

        foreach($dataa as $one){
            array_push($arr, array(
                'N°_inscription'=>$one['n_inscription'],
                'NNI'=>$one['nni'],
                'N°_de_BAC'=>$one['n_de_bac'],
                'Nom_et_prenom' => $one['nom_et_prenom'],
                'GENRE'    => $one['genre'],
                'date_DE_NAISSANCE' => fake()->date('Y:m:d'),
                'ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE'     => $one['annee_universitaire_de_premiere_inscription_dans_le_cycle'],
                'Niveau'    => $one['niveau'],
                'ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_ce_niveau'     => $one['annee_universitaire_de_premiere_inscription_dans_ce_niveau'],
                'NOM_DU_(TRONC/FILIRERE)'    => $one['nom_du_troncfilirere'],
                'FORMATION'     => $one['formation'],
                'Redoublant'    => $one['redoublant'],
                'BOURSIER_OU_BENEFICIANTS_D\'AIDE'    => $one['boursier_ou_beneficiants_daide'],
                'TRANSFERE'    => $one['transfere'],
                'année_universitaire_de_la_première_inscription_à_l\'établissement'    => $one['annee_universitaire_de_la_premiere_inscription_a_letablissement'],
                'etablissement_de_provenance'    => $one['etablissement_de_provenance'],
                'NATIONALITE'    => $one['nationalite'],
                'LANGUE_DE_FORMATION'    => $one['langue_de_formation'],
                'annee_scolaire'    => $one['annee_scolaire'],
            ));
        }
        if(!empty($arr)){
            // dd($this->data['package']);
            $this->data::insert($arr);
        }

 return $arr;
        
    }

}