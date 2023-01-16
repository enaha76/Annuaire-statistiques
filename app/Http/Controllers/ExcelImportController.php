<?php


use App\Models\Etudiant;
use App\Models\Inscrire;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Excel;
use Illuminate\Http\Request;


class ExcelImportController extends Controller
{
    public function import(Request $request)
    {
        
     
        
        //validate the form data
        $request->validate([
            'year' => 'required',
            'establishment' => 'required',
            'file' => 'required'
        ]);

        $year = $request->year;
        $establishment = $request->establishment;

        //check if the file has already been imported
        $existingInscrire = Inscrire::where('year', $year)
            ->where('establishment', $establishment)
            ->first();
        if ($existingInscrire) {
            //ask for permission to overwrite the data
            if (confirm("Les inscriptions pour l'année scolaire " . $year . " dans l'établissement " . $establishment . " ont déjà été importées. Voulez-vous remplacer les données existantes?")) {
                //proceed with import
                $file = $request->file('file');
                $path = $file->getRealPath();
                $data = Excel::load($path)->get();

                if ($data->count()) {
                    foreach ($data as $key => $value) {
                        $student = Etudiant::firstOrCreate([
                            'N°_inscription' => $value->N°_inscription,
                            'Nom_et_prenom' => $value->Nom_et_prenom,
                            'GENRE' => $value->GENRE,
                        ]);

<<<<<<< HEAD
                        $inscries = Inscrire::firstOrCreate([
||||||| 49459bc
                        $inscries = Inscries::firstOrCreate([
=======
                        $Inscrire = Inscrire::firstOrCreate([
>>>>>>> 7102d672de3b8b0454949b0f9dd4e4bb84416171
                            'id_etudiant' => $student->id,
                            'id_etablissement' => $establishment,
                            'année_scolaire' => $year,
                            'Niveau' => $value->Niveau,
                        ]);
                    }
                }
                return back()->with('success', 'Les données ont été importées avec succès!');
            } else {
                return back();
            }
        } else {
            //proceed with import
            $file = $request->file('file');
            $path = $file->getRealPath();
            $data = Excel::load($path)->get();

            if ($data->count()) {
                foreach ($data as $key => $value) {
                    $student = Etudiant::firstOrCreate([
                        'N°_inscription' => $value->N°_inscription,
                        'Nom_et_prenom' => $value->Nom_et_prenom,
                        'GENRE' => $value->GENRE,
                    ]);

                    $Inscrire = Inscrire::firstOrCreate([
                        'id_etudiant' => $student->id,
                        'id_etablissement' => $establishment,
                        'année_scolaire' => $year,
                        'Niveau' => $value->Niveau,
                        'ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE' => $value->ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE,
                        'ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_ce_niveau' => $value->ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_ce_niveau,
                        'NOM_DU_(TRONC/FILIRERE)' => $value['NOM_DU_(TRONC/FILIRERE)'],
                        'FORMATION' => $value->FORMATION,
                        'Redoublant' => $value->Redoublant,
                        'BOURSIER_OU_BENEFICIANTS_D\'AIDE' => $value['BOURSIER_OU_BENEFICIANTS_D\'AIDE'],
                        'TRANSFERE' => $value->TRANSFERE,
                        'année_universitaire_de_la_première_inscription_à_l\'établissement' => $value['année_universitaire_de_la_première_inscription_à_l\'établissement'],
                        'etablissement_de_provenance' => $value->etablissement_de_provenance,
                        'LANGUE_DE_FORMATION' => $value->LANGUE_DE_FORMATION

                    ]);
                }
            }
            return back()->with('success', 'Les données ont été importées avec succès!');


        }
    }
}

