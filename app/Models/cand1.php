<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $annee_scolaire
 * @property string $wilaya
 * @property int    $nb1
 */
class cand1 extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'candidats_nb1';

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
        'annee_scolaire', 'wilaya', 'nb1'
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
        'annee_scolaire' => 'string', 'wilaya' => 'string', 'nb1' => 'int'
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
