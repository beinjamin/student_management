<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    // protected $fillable = ["nom", "prenom", "classe_id"];
    public function classe()
    {
        return  $this->belongsTo(Classe::class);
    }
}
