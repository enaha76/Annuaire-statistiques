<?php

namespace App\Http\Controllers;

use App\Models\etu1;
use App\Models\etu2;
use App\Models\etu3;
use App\Models\etu4;
use App\Models\etu5;
use App\Models\etu6;
use App\Models\etu7;
use App\Models\Etudiant;
use App\Models\Inscrire;
use Illuminate\Http\Request;
use App\Models\Etablissement;
use App\Models\TbArchives;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Http;

class all_studentsController extends Controller
{

  private $imported_data;
      
  public function index()
  {
    $currentYear = date('Y');
    $lastYear = $currentYear -1;
    $year = $lastYear . '-' . $currentYear;


    
    $List = DB::select('SELECT
     abrev,
     etablissements.nom,
     etablissements.id,
     etablissements.identifiant,
     COUNT(id_etablissement) as total 
     FROM
      inscrire 
      RIGHT JOIN
       etablissements
       on 
       etablissements.id=inscrire.id_etablissement 
    GROUP BY
     abrev,
     etablissements.nom,id,identifiant;
     
    ');
    $List = (array) $List;

    $List2=DB::select('SELECT etablissements.id,
    etablissements.nom,
    etablissements.type,
    etablissements.abrev, 
    COUNT(inscrire.id_etablissement) as total
    FROM etablissements
    LEFT JOIN etablissements 
    as identifiantEtablissement
     ON identifiantEtablissement.id = etablissements.identifiant
    LEFT JOIN
     inscrire 
     ON inscrire.id_etablissement = etablissements.id
    WHERE 
    identifiantEtablissement.identifiant 
    IS NULL AND 
    etablissements.identifiant IS NULL
    GROUP BY etablissements.id,
        nom,
        abrev,
        type;');
    // $List = get_object_vars($List);
    $List2 = (array) $List2;

    $List3=DB::select('SELECT
     etablissements.id,
     etablissements.nom,
     etablissements.abrev,
     etablissements.identifiant 
     FROM 
     etablissements 
     WHERE (identifiant is not null) 
     or
      (identifiant is null AND type=\'institut\');');
      $List3 = (array) $List3;
      
      $List4=DB::select('SELECT 
      SUM(CASE WHEN type=\'Université\' THEN 1 ELSE 0 END) as \'Université\', 
      SUM(CASE WHEN type=\'Ecole\' THEN 1 ELSE 0 END) as \'Ecole\',
      SUM(CASE WHEN type=\'Academie\' THEN 1 ELSE 0 END) as \'Academie\',
      SUM(CASE WHEN type=\'institut\' THEN 1 ELSE 0 END) as \'institut\',
      SUM(CASE WHEN type=\'Faculté\' THEN 1 ELSE 0 END) as \'Faculté\'
        FROM etablissements;');

        $List4 = (array) $List4;

        $List5=DB::select('SELECT COUNT(*) as nbr from etudiants');
        $nbr_etudient = (array) $List5;
    return view('index', compact('List','List2','List3','List4','nbr_etudient'));
    
  }


  public function etu(Request $request,$year = null, $criteria1 = null, $criteria2 = null, $selectedYear = null, $results = null, $chartData = null)
  {

    $results = $request->session()->get('results');
    $criteria1 = $request->session()->get('criteria1');
    $criteria2 = $request->session()->get('criteria2');
    $chartData = $request->session()->get('chartData');

    $criteriaList = [
      'GENRE',
      'Niveau',
      'NOM_DU_(TRONC/FILIRERE)',
      'FORMATION',
      'Redoublant',
      'BOURSIER_OU_BENEFICIANTS_D\'AIDE',
      'TRANSFERE',
      'NATIONALITE',
      'LANGUE_DE_FORMATION',
      'date_DE_NAISSANCE',
  ];
    if (!$year) {
        $currentYear = date('Y');
        $lastYear = $currentYear -1;
        $year = $lastYear . '-' . $currentYear;
    }
    
    $enrollments = DB::table('inscrire')
    ->selectRaw('inscrire.*, etudiants.*, inscrire.année_scolaire , inscrire.id ')
    ->where('année_scolaire','=',$year)
    ->join('etudiants', 'inscrire.id_etudiant', '=', 'etudiants.id')
    ->get();
     $years=DB::table('inscrire')->pluck('année_scolaire')->unique()->except($year);
     $genre_formation=DB::select('SELECT * FROM `etudiants` inner join inscrire using(id);');
     $genre_formation=json_encode( $genre_formation);
    $Etablissements = Etablissement::all();
    $Etablissements=$Etablissements->toArray();
    $enrollments=$enrollments->toArray();


   

    return View('etudiants',compact('results','criteria1','criteria2','chartData','Etablissements','enrollments','years','year','genre_formation','criteriaList'));
  }


  public function tables($year = null)
  {
      $etats = Etablissement::all();
     

      $List3=DB::select('SELECT
      etablissements.id,
      etablissements.nom,
      etablissements.abrev,
      etablissements.identifiant 
      FROM 
      etablissements 
      WHERE (identifiant is not null) 
      or
       (identifiant is null AND type=\'institut\');');
       $List3 = (array) $List3;
      
       $List4=DB::select('SELECT 
       DISTINCT
       (id_etudiant) as idc,
       id_etablissement,
       année_scolaire 
       FROM 
       inscrire;');
       $List4 = (array) $List4;
    
      if (!$year) {
          $currentYear = date('Y');
          $lastYear = $currentYear -1;
          $year = $lastYear . '-' . $currentYear;
      }
      $years=DB::table('inscrire')->pluck('année_scolaire')->unique()->except($year);
      $chek=DB::select('SELECT NNI,année_scolaire from inscrire JOIN etudiants on inscrire.id_etudiant=etudiants.id;');
        $chek = (array) $chek;
      return view('tables', [
        'etats' => $etats,
        'List3' => $List3,
        'data' => $List4,
        'year' => $year,
        'years' => $years,
        'chek'=>$chek,
      
    ]);
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
    
    

      //ask for permission to overwrite the data
     
      //proceed with import

      $data = json_decode($request->input('file'), true);

      if ($data) {
        return $this->insert( $data, $establishment, $year);
      }
      return redirect()->route('tables')->with('danger', 'Les données non été pas importées ');


    
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




  public function showStatistics(Request $request)
{
    $criteria1 = $request->input('criteria1');
    $criteria2 = $request->input('criteria2');
    $selectedYear = $request->input('filter');

    $etudiantsColumns = Schema::getColumnListing('etudiants');

    $inscrireColumns = Schema::getColumnListing('inscrire');

    // Define the base query
    $query = DB::table('inscrire');

    if (in_array($criteria1, $etudiantsColumns) && in_array($criteria2, $inscrireColumns)) {
      $query->join('etudiants AS etudiants1', 'inscrire.id_etudiant', '=', 'etudiants1.id');
      $query->select(
          'inscrire.'.$criteria2.' AS inscrire_'.$criteria2,
          'etudiants1.'.$criteria1.' AS etudiants_'.$criteria1,
          DB::raw('COUNT(*) AS count')
      );
      $query->groupBy('inscrire_'.$criteria2, 'etudiants_'.$criteria1);
     } elseif (in_array($criteria2, $etudiantsColumns) && in_array($criteria1, $inscrireColumns)) {
      $query->join('etudiants AS etudiants2', 'inscrire.id_etudiant', '=', 'etudiants2.id');
      $query->select(
          'inscrire.'.$criteria1.' AS inscrire_'.$criteria1,
          'etudiants2.'.$criteria2.' AS etudiants_'.$criteria2,
          DB::raw('COUNT(*) AS count')
      );
      $query->groupBy('inscrire_'.$criteria1, 'etudiants_'.$criteria2);
     }


     if (in_array($criteria1, $inscrireColumns) && in_array($criteria2, $inscrireColumns)) {
        $query->select(
      'inscrire.'.$criteria1.' AS inscrire_'.$criteria1,
      'inscrire.'.$criteria2.' AS inscrire_'.$criteria2,
      DB::raw('COUNT(*) AS count')
       );

       $query->groupBy('inscrire_'.$criteria1, 'inscrire_'.$criteria2);
  
}

// Check if both criteria belong to the 'etudiants' table
if (in_array($criteria1, $etudiantsColumns) && in_array($criteria2, $etudiantsColumns)) {
  $query->join('etudiants AS etudiants1', 'inscrire.id_etudiant', '=', 'etudiants1.id');
  $query->join('etudiants AS etudiants2', 'inscrire.id_etudiant', '=', 'etudiants2.id');
  $query->select(
      'etudiants1.'.$criteria1.' AS etudiants_'.$criteria1,
      'etudiants2.'.$criteria2.' AS etudiants_'.$criteria2,
      DB::raw('COUNT(*) AS count')
  );

  // Group the results by the selected criteria
  $query->groupBy('etudiants_'.$criteria1, 'etudiants_'.$criteria2);
}
// ...

     // Add the WHERE condition for the selected year
    $query->whereRaw("CAST(inscrire.année_scolaire AS CHAR) = '{$selectedYear}'");

    
    // Execute the query and retrieve the results
    $results = $query->get();
    // dd($query->toSql(), $results);
        // Prepare the data for the chart
    $chartData = [
        'labels' => [],
        'datasets' => [
            [
                'label' => 'Count',
                'data' => [],
                'backgroundColor' => 'rgba(0, 123, 255, 0.5)' // Customize the chart color
            ]
        ]];
      // dd($chartData );
    foreach ($results as $result) {
      $criteria1Label = '';
      $criteria2Label = '';
  
      if (in_array($criteria1, $etudiantsColumns) && in_array($criteria2, $inscrireColumns)) {
          $criteria1Label = isset($result->{'etudiants_'.$criteria1}) ? 'etudiants_'.$criteria1 : 'inscrire_'.$criteria1;
          $criteria2Label = isset($result->{'inscrire_'.$criteria2}) ? 'inscrire_'.$criteria2 : 'etudiants_'.$criteria2;
      } elseif (in_array($criteria2, $etudiantsColumns) && in_array($criteria1, $inscrireColumns)) {
          $criteria1Label = isset($result->{'inscrire_'.$criteria1}) ? 'inscrire_'.$criteria1 : 'etudiants_'.$criteria1;
          $criteria2Label = isset($result->{'etudiants_'.$criteria2}) ? 'etudiants_'.$criteria2 : 'inscrire_'.$criteria2;
      } elseif (in_array($criteria1, $inscrireColumns) && in_array($criteria2, $inscrireColumns)) {
          $criteria1Label = 'inscrire_'.$criteria1;
          $criteria2Label = 'inscrire_'.$criteria2;
      } elseif (in_array($criteria1, $etudiantsColumns) && in_array($criteria2, $etudiantsColumns)) {
          $criteria1Label = 'etudiants_'.$criteria1;
          $criteria2Label = 'etudiants_'.$criteria2;
      }
  
      $chartData['labels'][] = $result->{$criteria1Label} . ' - ' . $result->{$criteria2Label};
      $chartData['datasets'][0]['data'][] = $result->count;
  }
  
  // dd($criteria1, $criteria2, $results);  
    
  // $results = ["age" => 1234];

  return Redirect::to('etu')
        ->with('results', $results)
        ->with('criteria1', $criteria1)
        ->with('criteria2', $criteria2)
        ->with('chartData', $chartData);

}

public function insertArchivedata(Request $request)
{
    // Validate the incoming request data if necessary
    $validatedData = $request->validate([
        'file_name' => 'required|string',
        'establishment_name' => 'required|string',
        'number_of_students' => 'required|integer',
        'c_nbr' => 'required|integer',
        'ml_nbr' => 'required|integer',
        'nl_nbr' => 'required|integer',
        'treatment' => 'required|string',
    ]);

    // Insert the data into the database
    $archive = TbArchives::create($validatedData);

    // Return the inserted data
    return response()->json($archive, 201);
}

public function getArchives()
{
    $archives = TbArchives::all(); // Retrieve all records from the tb_archives table

    return response()->json($archives);
}

public function datafromStudent()
{
    $inscrires = Inscrire::all();
    $etudiants = Etudiant::all();

    $data = [
        'inscrires' => $inscrires,
        'etudiants' => $etudiants,
    ];

    return response()->json($data);
}


public function per(Request $request){

  $criteria1 = $request->input('criteria1');
  $criteria2 = $request->input('criteria2');
  $selectedYear = $request->input('filter');
 


$etudiantsColumns = Schema::getColumnListing('etudiants');

    $inscrireColumns = Schema::getColumnListing('inscrire');

    // Define the base query
    $query = DB::table('inscrire');

    if (in_array($criteria1, $etudiantsColumns) && in_array($criteria2, $inscrireColumns)) {
      $query->join('etudiants AS etudiants1', 'inscrire.id_etudiant', '=', 'etudiants1.id');
      $query->select(
          'inscrire.'.$criteria2.' AS inscrire_'.$criteria2,
          'etudiants1.'.$criteria1.' AS etudiants_'.$criteria1,
          DB::raw('COUNT(*) AS count')
      );
      $query->groupBy('inscrire_'.$criteria2, 'etudiants_'.$criteria1);
     } elseif (in_array($criteria2, $etudiantsColumns) && in_array($criteria1, $inscrireColumns)) {
      $query->join('etudiants AS etudiants2', 'inscrire.id_etudiant', '=', 'etudiants2.id');
      $query->select(
          'inscrire.'.$criteria1.' AS inscrire_'.$criteria1,
          'etudiants2.'.$criteria2.' AS etudiants_'.$criteria2,
          DB::raw('COUNT(*) AS count')
      );
      $query->groupBy('inscrire_'.$criteria1, 'etudiants_'.$criteria2);
     }

     
     if (in_array($criteria1, $inscrireColumns) && in_array($criteria2, $inscrireColumns)) {
        $query->select(
      'inscrire.'.$criteria1.' AS inscrire_'.$criteria1,
      'inscrire.'.$criteria2.' AS inscrire_'.$criteria2,
      DB::raw('COUNT(*) AS count')
       );

       $query->groupBy('inscrire_'.$criteria1, 'inscrire_'.$criteria2);
  
}

// Check if both criteria belong to the 'etudiants' table
if (in_array($criteria1, $etudiantsColumns) && in_array($criteria2, $etudiantsColumns)) {
  $query->join('etudiants AS etudiants1', 'inscrire.id_etudiant', '=', 'etudiants1.id');
  $query->join('etudiants AS etudiants2', 'inscrire.id_etudiant', '=', 'etudiants2.id');
  $query->select(
      'etudiants1.'.$criteria1.' AS etudiants_'.$criteria1,
      'etudiants2.'.$criteria2.' AS etudiants_'.$criteria2,
      DB::raw('COUNT(*) AS count')
  );

  // Group the results by the selected criteria
  $query->groupBy('etudiants_'.$criteria1, 'etudiants_'.$criteria2);
}
// ...

     // Add the WHERE condition for the selected year
    $query->whereRaw("CAST(inscrire.année_scolaire AS CHAR) = '{$selectedYear}'");

    
    // Execute the query and retrieve the results
    $results = $query->get();
    // dd($query->toSql(), $results);
        // Prepare the data for the chart
    $chartData = [
        'labels' => [],
        'datasets' => [
            [
                'label' => 'Count',
                'data' => [],
                'backgroundColor' => 'rgba(0, 123, 255, 0.5)' // Customize the chart color
            ]
        ]];
      // dd($chartData );
    foreach ($results as $result) {
      $criteria1Label = '';
      $criteria2Label = '';
  
      if (in_array($criteria1, $etudiantsColumns) && in_array($criteria2, $inscrireColumns)) {
          $criteria1Label = isset($result->{'etudiants_'.$criteria1}) ? 'etudiants_'.$criteria1 : 'inscrire_'.$criteria1;
          $criteria2Label = isset($result->{'inscrire_'.$criteria2}) ? 'inscrire_'.$criteria2 : 'etudiants_'.$criteria2;
      } elseif (in_array($criteria2, $etudiantsColumns) && in_array($criteria1, $inscrireColumns)) {
          $criteria1Label = isset($result->{'inscrire_'.$criteria1}) ? 'inscrire_'.$criteria1 : 'etudiants_'.$criteria1;
          $criteria2Label = isset($result->{'etudiants_'.$criteria2}) ? 'etudiants_'.$criteria2 : 'inscrire_'.$criteria2;
      } elseif (in_array($criteria1, $inscrireColumns) && in_array($criteria2, $inscrireColumns)) {
          $criteria1Label = 'inscrire_'.$criteria1;
          $criteria2Label = 'inscrire_'.$criteria2;
      } elseif (in_array($criteria1, $etudiantsColumns) && in_array($criteria2, $etudiantsColumns)) {
          $criteria1Label = 'etudiants_'.$criteria1;
          $criteria2Label = 'etudiants_'.$criteria2;
      }
  
      $chartData['labels'][] = $result->{$criteria1Label} . ' - ' . $result->{$criteria2Label};
      $chartData['datasets'][0]['data'][] = $result->count;
  }
  
  // dd($criteria1, $criteria2, $results);  
    
  // $results = ["age" => 1234];

  

  $data = [
          'results' => $results,
          'criteria1' => $criteria1,
          'criteria2'=>  $criteria2,
          'chartData'=>  $chartData
      ];

  return response()->json($data);
}





public function insertArchive(Request $request){



    $dataToInsert = [
      'annee_scolaire' => '2023-2024',
      'domaine' => 'Computer Science',
      'nb1' => 10,
      'nb2' => 25,
      'nb3'=> 45, 
      'nb4'=>67 ,
      'nb5'=>78 , 
      'nb6'=>88
  ];

    // $archive = etu1::create($dataToInsert);

    // Return the inserted data
    return response()->json($dataToInsert);
  


}

}


