<?php

namespace App\Http\Controllers;

use App\Models\Histirique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistiriqueController extends Controller
{
    public function historique(){
        $historique = DB::select('SELECT * FROM histiriques;');
        $historique = (array) $historique;
        dd($historique);
        return view('tables', ['historique' => $historique]);
    }
    public function inserthist(Request $request){
        $validateData = $request->validate([
            'name_file' => 'required|max:255',
            'name_etab' => 'nullable',
            'numb_student' => 'nullable|integer',
            'etat' => 'nullable',
            'traitement' => 'nullable',
        ]);
        $q = Histirique::create($validateData);
        return redirect()->route('index')->with('success','Historique créer');
    }


}
