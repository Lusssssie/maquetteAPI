<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supporter extends Model
{
   protected $table = 'supporters';//relie le modele à la table
   protected $fillable=['surname','firstname','pseudo','email'];
}
