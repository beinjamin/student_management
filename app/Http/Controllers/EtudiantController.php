<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
        $liste_etudiants = Etudiant::orderBy("nom", "asc")->get();
        return view("etudiant");
    }
}
