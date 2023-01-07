<?php

namespace App\Http\Controllers;

use App\Imports\Import;

use App\Models\tables;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class ESPController extends Controller
{
   
    /**
    * @return \Illuminate\Support\Collection 
    */
    public function tables_ex()
    {   
        $alldata = [];
        $etats = DB::select('select abrev from tables');
        $ins = DB::select('select * from tables');
  
   
        foreach ( $etats as $abs => $val ) {

            $name = "App\Models\\" . $val->abrev;

            
            $darr = app($name)::select(
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
                "annee_scolaire"
            )->get();
            
            $alldata[$val->abrev] = $darr->toArray();

        }
      
        return view('layout-sidenav-light',['alldata'=>$alldata,'etats'=>$etats,'ins'=>$ins]);
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        $etats =DB::select('select abrev from tables ');

        $data = [
        [ 'package' => request()->get('etat')], 
         ['etats'=>$etats]
     ]; 


     $name="App\Models\\".$data[0]['package'];
       $dataa = Excel::import(new Import($data),request()->file('file'));
    $arr= app($name)::select()->where('annee_scolaire',request()->get('annee'))->get();
    return redirect('/tables')->with(['m'=>0,'etat'=>$data[0],'data'=>$arr]);
    }
}

