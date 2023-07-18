<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbArchives extends Model
{
    use HasFactory;

    protected $table = 'tb_archives';

    protected $fillable = [
        'file_name',
        'establishment_name',
        'number_of_students',
        'c_nbr',
        'ml_nbr',
        'nl_nbr',
        'treatment',
    ];
}
