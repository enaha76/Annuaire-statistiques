<?php

namespace App\Http\Controllers;
use App\Models\Etablissement;
use App\Http\Controllers\Controller;
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
        $data = $request->validate([
            'nom' => 'required',
            'abrev' => 'required',
            'type' => 'required',
            'tutelle' => 'required',
            'cotutelle' => 'nullable',
            'identifiant' => 'nullable',
            'id_cycle' => 'nullable',
        ]);
    
        Etablissement::create([
            'nom' => $data['nom'],
            'abrev' => $data['abrev'],
            'type' => $data['type'],
            'tutelle' => $data['tutelle'],
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
}
