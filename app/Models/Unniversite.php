<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unniversite extends Model
{
    use HasFactory;
    public function Classe(){
    return $this->hasMany(Classe::class);
    }
}
