<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
   protected $table = 'cars';//relie le modele à la table

   protected $fillable=['brand','model','color','price','speed'];
}
