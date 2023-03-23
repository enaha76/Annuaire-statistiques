<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $annee_scolaire
 * @property string $genre
 * @property string $niveaux
 * @property int    $ALGERIE
 * @property int    $ALLEMAGNE
 * @property int    $CANADA
 * @property int    $COTE_D_IVOIRE
 * @property int    $EGYPTE
 * @property int    $FRANCE
 * @property int    $MALI
 * @property int    $MAROC
 * @property int    $SENEGAL
 * @property int    $TUNISIE
 * @property int    $TOTAL
 */
class bour1 extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'etudiants_boursiers_etg_n_g_pa';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'annee_scolaire', 'genre', 'niveaux', 'ALGERIE', 'ALLEMAGNE', 'CANADA', 'COTE_D_IVOIRE', 'EGYPTE', 'FRANCE', 'MALI', 'MAROC', 'SENEGAL', 'TUNISIE', 'TOTAL'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'annee_scolaire' => 'string', 'genre' => 'string', 'niveaux' => 'string', 'ALGERIE' => 'int', 'ALLEMAGNE' => 'int', 'CANADA' => 'int', 'COTE_D_IVOIRE' => 'int', 'EGYPTE' => 'int', 'FRANCE' => 'int', 'MALI' => 'int', 'MAROC' => 'int', 'SENEGAL' => 'int', 'TUNISIE' => 'int', 'TOTAL' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [

    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
}
