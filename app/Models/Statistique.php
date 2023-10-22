<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistique extends Model
{
    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }

    public function lives(){
        return $this->belongsToMany(Live::class,"compte_live_statistiques","statistique_id","live_id");
    }

    public function comptes(){
        return $this->belongsToMany(Compte::class,"compte_live_statistiques","statistique_id","compte_id");
    }



    use HasFactory;
}
