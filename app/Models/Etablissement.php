<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{


    protected $fillable = ['nom','abrev','tutelle','cotutelle','type','privee','identifiant','id_cycle'];
    public function Etudiants()
{
    return $this->belongsToMany(Etudiant::class)->using(Inscrire::class);
}
    public function Cycles()
{
    return $this->belongsTo(Cycle::class);
}
    use HasFactory;
}
