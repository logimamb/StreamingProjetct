<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Live extends Model
{
    public function ressources(){
        return $this->belongsToMany(Ressource::class,"live_ressources","live_id","ressource_id");
    }

    public function statistiques(){
        return $this->belongsToMany(Statistique::class,"compte_live_statistiques","live_id","statistique_id");
    }

    public function comptes(){
        return $this->belongsToMany(Compte::class,"compte_live_statistiques","live_id","compte_id");
    }
    
    use HasFactory;
}
