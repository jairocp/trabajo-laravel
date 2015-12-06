<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class socio extends Model
{
    //

       protected $table = 'socio';

       protected $fillable = ['nombre', 'direccion', 'telefono'];
       public $timestamps = false;
}
