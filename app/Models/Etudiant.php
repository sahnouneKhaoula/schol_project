<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
     public function class(){
    return $this->belongsTo(Classe::class);
    }
     public function imagePrincipale()
    {
    	return asset('imagesetudiants/'.$this->photo);
    }
}
