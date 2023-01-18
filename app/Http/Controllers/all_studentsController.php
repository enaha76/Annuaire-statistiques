<?php

namespace App\Http\Controllers;


use App\Models\Etablissement;
use App\Models\Inscrire;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class all_studentsController extends Controller
{

  private $imported_data;

  public function index()
  {
    $List = DB::select('SELECT
      etablissements.abrev,
      etablissements.nom,
      count(`id_etudiant`) AS total
    FROM
      inscrire,
      etablissements
    WHERE
      inscrire.id_etablissement = etablissements.id
      AND inscrire.année_scolaire = "2021-2022"
    GROUP BY
      etablissements.abrev,
      etablissements.nom
    ');
    $List = (array) $List;
    return view('index', compact($List));
  }
  public function etu()
  {

    return View('etudiants');
  }
  public function tables()
  {
    $etats = Etablissement::all();
 
    return view('tables', compact( 'etats'));
  }
  public function import(Request $request)
  {



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
      return view('confirm_import', ['request' => $request->all()]);
    } else {
      //proceed with import

      $data = json_decode($request->input('file'), true);

      if ($data) {
        return $this->insert( $data, $establishment, $year);
      }
      return redirect()->route('tables')->with('danger', 'Les données non été pas importées ');


    }
  }
  public function insert( $data, $establishment, $year)
  {

   
      foreach ($data as $value) {
        $student = Etudiant::firstOrCreate([
          'NNI' => $value['NNI'],
          'N°_de_BAC' => $value['N°_de_BAC'],
          'Nom_et_prenom' => $value['Nom_et_prenom'],
          'GENRE' => $value['GENRE'],
          'date_DE_NAISSANCE' => date('Y:m:d', $value['date_DE_NAISSANCE']),
          'NATIONALITE' => $value['NATIONALITE']
        ]);

        $Inscrire = Inscrire::firstOrCreate([
          'id_etudiant' => $student->id,
          'id_etablissement' => $establishment,
          'année_scolaire' => $year,
          'N°_inscription' => $value['N°_inscription'],
          'Niveau' => $value['Niveau'],
          'ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE' => $value['ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE'],
          'ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_ce_niveau' => $value['ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_ce_niveau'],
          'NOM_DU_(TRONC/FILIRERE)' => $value['NOM_DU_(TRONC/FILIRERE)'],
          'FORMATION' => $value['FORMATION'],
          'Redoublant' => $value['Redoublant'],
          'BOURSIER_OU_BENEFICIANTS_D\'AIDE' => $value['BOURSIER_OU_BENEFICIANTS_D\'AIDE'],
          'TRANSFERE' => $value['TRANSFERE'],
          'année_universitaire_de_la_première_inscription_à_l\'établissement' => $value['année_universitaire_de_la_première_inscription_à_l\'établissement'],
          'etablissement_de_provenance' => $value['etablissement_de_provenance'],
          'LANGUE_DE_FORMATION' => $value['LANGUE_DE_FORMATION']
        ]);
      }
      return redirect()->route('tables')->with('success', 'Les données ont été importées avec succès!');
    
  }
  public function redr(Request $request)
  {
    $data = json_decode($request->input('file'), true);
      $year = $request->input('year');
      $establishment = $request->input('establishment');
     return $this->insert( $data, $establishment, $year);
  }
}

