<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    public function lives(){
        return $this->belongsToMany(Live::class,"live_ressources","ressource_id","live_id");
    }

    use HasFactory;
}
