<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cozinha extends Model
{

    protected $table = "cozinhas";

    protected $fillable = [
        'tipo',
        'pratoprincipal',
        'horarioabertura',
        'horariofechamento'
    ];
}
