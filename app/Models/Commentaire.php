<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    public function statistique(){
        return $this->belongsTo(Statistique::class);
    }

    use HasFactory;
}
