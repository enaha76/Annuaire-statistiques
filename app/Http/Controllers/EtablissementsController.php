<?php

namespace App\Http\Controllers;
use App\Models\Cycle;
use App\Models\Etablissement;
use App\Http\Controllers\Controller;
use App\Models\Inscrire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EtablissementsController extends Controller
{
    public function index()
    {
        $Etablissements = Etablissement::all();
        $cycles = Cycle::all();
        $origin = Etablissement::whereNull('identifiant')->get();


        return view('Etablissement', compact('Etablissements','cycles','origin'));
    }
    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'nom' => 'required',
        'abrev' => 'required',
        'type' => 'required',
        'tutelle' => 'required',
        'privee' => 'required',
        'cotutelle' => 'nullable',
        'identifiant' => 'nullable',
        'id_cycle' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    Etablissement::create([
        'nom' => $request->nom,
        'abrev' => $request->abrev,
        'type' => $request->type,
        'tutelle' => $request->tutelle,
        'privee' => $request->privee,
        'cotutelle' => $request->cotutelle,
        'identifiant' => $request->identifiant,
        'id_cycle' => $request->id_cycle,
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
