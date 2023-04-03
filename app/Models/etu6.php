<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $annee_scolaire
 * @property string $domaine
 * @property int    $nb1
 * @property int    $nb2
 * @property int    $nb3
 * @property int    $nb4
 * @property int    $nb5
 * @property int    $nb6
 * @property int    $nb7
 * @property int    $nb8
 * @property int    $nb9
 * @property int    $nb10
 * @property int    $nb11
 * @property int    $nb12
 * @property int    $nb13
 * @property int    $nb14
 * @property int    $nb15
 * @property int    $nb16
 * @property int    $nb17
 * @property int    $nb18
 * @property int    $nb19
 * @property int    $nb20
 * @property int    $nb21
 * @property int    $nb22
 */
class etu6 extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'effectifM_d_g_n_FM';

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
        'annee_scolaire', 'nb1', 'nb2', 'nb3', 'nb4', 'nb5', 'nb6', 'nb7', 'nb8', 'nb9', 'nb10', 'nb11', 'nb12', 'nb13', 'nb14', 'nb15', 'nb16', 'nb17', 'nb18', 'nb19', 'nb20', 'domaine'  , 'nb21' , 'nb22' 
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
        'annee_scolaire' => 'string', 'nb1' => 'int', 'nb2' => 'int', 'nb3' => 'int', 'nb4' => 'int', 'nb5' => 'int', 'nb6' => 'int', 'nb7' => 'int', 'nb8' => 'int', 'nb9' => 'int', 'nb10' => 'int', 'nb11' => 'int', 'nb12' => 'int', 'nb13' => 'int', 'nb14' => 'int', 'nb15' => 'int', 'nb16' => 'int', 'nb17' => 'int', 'nb18' => 'int', 'nb19' => 'int', 'nb20' => 'int', 'domaine' => 'string' , 'nb21' => 'int', 'nb22' => 'int'
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
