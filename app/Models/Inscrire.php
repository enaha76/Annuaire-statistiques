<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Inscrire extends Pivot
{
    protected $fillable = ['année_scolaire','id_etudiant','id_etablissement','N°_inscription','ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE',	'Niveau',	'ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_ce_niveau',	'NOM_DU_(TRONC/FILIRERE)','FORMATION',	'Redoublant',	'BOURSIER_OU_BENEFICIANTS_D\'AIDE',	'TRANSFERE'	,'année_universitaire_de_la_première_inscription_à_l\'établissement'	,'etablissement_de_provenance','LANGUE_DE_FORMATION'];
 /**
 * Indicates if the IDs are auto-incrementing.
 *
 * @var bool
 */
public $incrementing = true;
    use HasFactory;
}
