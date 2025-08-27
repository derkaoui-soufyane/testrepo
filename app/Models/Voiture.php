<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    protected $table ="voiture";
    protected $fillable=["nom","prenom"];
    public $timestamps = false;  
}
