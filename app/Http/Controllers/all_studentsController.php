<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\FlareClient\View;

class all_studentsController extends Controller
{
    public function index(){
        $List = DB::select('SELECT
      etablissements.abrev,
      etablissements.nom,
      count(`id_etudiant`) AS total
    FROM
      inscrires,
      etablissements
    WHERE
      inscrires.id_etablissement = etablissements.id
      AND inscrires.année_scolaire = "2021-2022"
    GROUP BY
      etablissements.abrev,
      etablissements.nom
    ');
    $List = (array) $List;
return view('index',compact($List));
     }
   public function etu()
   {
 return View('etudiants');
   }
     public function tables(){
//         $etats = DB::select('select abrev from tables');

//         return  view('tables',['etats'=>$etats]);

//     }
//  public function tables_ex(){
//         $etats =DB::select('select abrev from tables ');

//         return  view('layout-sidenav-light',['etats'=>$etats]);
}




}

