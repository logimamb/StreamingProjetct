<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function statistiques(){
        return $this->belongsToMany(Statistique::class,"compte_live_statistiques","compte_id","statistique_id");
    }

    public function comptes(){
        return $this->belongsToMany(Compte::class,"compte_live_statistiques","compte_id","statistique_id");
    }

    use HasFactory;
}
