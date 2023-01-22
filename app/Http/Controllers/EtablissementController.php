<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etablissement;
use App\Models\Inscrire;

class EtablissementController extends Controller
{
    
    public function getEtablissements() {
        $etablissements = Etablissement::whereNull('identifiant')
                ->whereHas('identifiantEtablissement', function ($query) {
                    $query->whereNull('identifiant');
                })->get();
        foreach($etablissements as $etablissement){
           $etudiant_count = Inscrire::where('id_etablissement', $etablissement->id)->count();
           $etablissement['etudiant_count'] = $etudiant_count;
        }
        $ar = (array) $etablissements;
        return view('index',compact('ar'));
    }

}
