<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $institutions
 * @property string $genre
 * @property string $niveaux
 * @property string $domaine
 * @property int    $effectifs
 */
class EffectifMInstDNG extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'effectifM_inst_d_n_g';

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
        'institutions', 'effectifs', 'genre', 'niveaux', 'domaine'
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
        'institutions' => 'string', 'effectifs' => 'int', 'genre' => 'string', 'niveaux' => 'string', 'domaine' => 'string'
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
