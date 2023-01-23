<?php

namespace App\Http\Controllers;
use App\Models\Etablissement;
use App\Http\Controllers\Controller;
use App\Models\Inscrire;
use Illuminate\Http\Request;

class EtablissementsController extends Controller
{
    public function index()
    {
        $Etablissements = Etablissement::all();
        
        return view('Etablissement', compact('Etablissements'));
    }
    public function store(Request $request)
    {
        $d = $request->validate([
            'nom' => 'required',
            'abrev' => 'required',
            'type' => 'required',
            'tutelle' => 'required',
            'privee' => 'required',
            'cotutelle' => 'nullable',
            'identifiant' => 'nullable',
            'id_cycle' => 'required',
        ]);
        $data = $request->all();
        Etablissement::create([
            'nom' => $data['nom'],
            'abrev' => $data['abrev'],
            'type' => $data['type'],
            'tutelle' => $data['tutelle'],
            'privee' => $data['privee'],
            'cotutelle' => $data['cotutelle'],
            'identifiant' => $data['identifiant'],
            'id_cycle' => $data['id_cycle'],
        ]);

        return redirect()->back()->with('etat_success', 'Etablissement inserted successfully');
    }
    public function import()
    {
        $Etablissements = Etablissement::all();
        return view('Etablissement', compact('Etablissements'));
    }
    public function show($id)
    {
        $data = Inscrire::where('id_etablissement', '=', $id)->get();
        $etablissement = Etablissement::find($id);
        if ($etablissement->identifiant == null && $etablissement->type != "Institut") {
            // Case 1: Origin
            $subEtablissements = Etablissement::where('identifiant', $id)->get();
            $subEtablissementNames = array();
            foreach ($subEtablissements as $subEtablissement) {
                array_push($subEtablissementNames, $subEtablissement->nom);
            }
             return view('single', compact('etablissement','data','subEtablissementNames'));
        } else if ($etablissement->identifiant != null) {
            // Case 2: Sub-etablissement
            $origin = Etablissement::find($etablissement->identifiant);
            $nom= $origin->nom;
          return view('single', compact('etablissement','data','nom'));
        } else {
            $its = false;
            return view('single', compact('etablissement','data','its'));
        }
        
        
       
       
    }

}
