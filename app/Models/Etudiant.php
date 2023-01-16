<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{

    protected $fillable = ['NNI',  'N°_de_BAC',  'Nom_et_prenom',	'GENRE',	'date_DE_NAISSANCE',  'NATIONALITE'];
    public function Etablissements()
{
    return $this->belongsToMany(Etablissement::class)->using(Inscrire::class);
}
    use HasFactory;
}
