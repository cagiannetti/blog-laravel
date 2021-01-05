<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    /*esta es una trampa, sobreescribimos este método de la clase Model para que busque por slug para generar las rutas amigables*/
    public function getRouteKeyName(){
        return 'slug';
    }
}
