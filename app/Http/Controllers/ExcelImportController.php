<?php


use App\Models\Etudiant;
use App\Models\Inscrire;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


class ExcelImportController extends Controller
{
    public function import(Request $request)
    {

        dd('helloo');
        dd($request->input('file'));
        //validate the form data
        // $request->validate([
        //     'year' => 'required',
        //     'establishment' => 'required'
        // ]);

        $year = $request->input('year');
        $establishment = $request->input('establishment');

        //check if the file has already been imported
        $existingInscrire = Inscrire::where('année_scolaire', $year)
            ->where('id_etablissement', $establishment)
            ->first();
        if ($existingInscrire) {
            //ask for permission to overwrite the data
            if (confirm("Les inscriptions pour l'année scolaire " . $year . " dans l'établissement " . $establishment . " ont déjà été importées. Voulez-vous remplacer les données existantes?")) {
                //proceed with import
                $data = json_encode($request->input('file'),true);


                if ($data) {
                    foreach ($data as $key => $value) {
                        $student = Etudiant::firstOrCreate([
                            'NNI' => $value->NNI,
                            'N°_de_BAC' => $value->N°_de_BAC,
                            'Nom_et_prenom' => $value->Nom_et_prenom,
                            'GENRE' => $value->GENRE,
                            'date_DE_NAISSANCE' => $value->date_DE_NAISSANCE,
                            'NATIONALITE' => $value->NATIONALITE
                        ]);

                        $Inscrire = Inscrire::firstOrCreate([
                        'id_etudiant' => $student->id,
                        'id_etablissement' => $establishment,
                        'année_scolaire' => $year,
                        'N°_inscription'=> $value->N°_inscription,
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
                return redirect()->back()->with('success', 'Les données ont été importées avec succès!');
            } else {
                return redirect()->back();
            }
        }
         else {
            //proceed with import

            $data = json_encode($request->input('file'),true);

            if ($data) {
                foreach ($data as $key => $value) {
                    $student = Etudiant::firstOrCreate([
                        'NNI' => $value->NNI,
                        'N°_de_BAC' => $value->N°_de_BAC,
                        'Nom_et_prenom' => $value->Nom_et_prenom,
                        'GENRE' => $value->GENRE,
                        'date_DE_NAISSANCE' => $value->date_DE_NAISSANCE,
                        'NATIONALITE' => $value->NATIONALITE
                    ]);

                    $Inscrire = Inscrire::firstOrCreate([
                    'id_etudiant' => $student->id,
                    'id_etablissement' => $establishment,
                    'année_scolaire' => $year,
                    'N°_inscription'=> $value->N°_inscription,
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
            return redirect()->back()->with('success', 'Les données ont été importées avec succès!');


        }
    }
}

