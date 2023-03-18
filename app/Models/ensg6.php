<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $annee_scolaire
 * @property string $institutions
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
 */
class ensg6 extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ensg_perm_inst_do_di';

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
        'annee_scolaire', 'institutions', 'domaine', 'nb1', 'nb2', 'nb3', 'nb4', 'nb5', 'nb6', 'nb7', 'nb8', 'nb9', 'nb10' , 'nb11'
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
        'annee_scolaire' => 'string', 'institutions' => 'string', 'domaine' => 'string', 'nb1' => 'int', 'nb2' => 'int', 'nb3' => 'int', 'nb4' => 'int', 'nb5' => 'int', 'nb6' => 'int', 'nb7' => 'int', 'nb8' => 'int', 'nb9' => 'int', 'nb10' => 'int' , 'nb11' => 'int'
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
