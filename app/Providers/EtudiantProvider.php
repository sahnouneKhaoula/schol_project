<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EtudiantProvider extends ServiceProvider

    
    public function classe()
    {
    	return $this->belongsTo(Classe::class,'classe_id');
    }

     public function imagePrincipale()
    {
    	return asset("storage/imagesetudiants/$this->photo");
    }

}
