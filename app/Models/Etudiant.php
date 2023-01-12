<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    public function Etablissements()
{
    return $this->belongsToMany(Etablissement::class)->using(Inscrire::class);
}
    use HasFactory;
}
