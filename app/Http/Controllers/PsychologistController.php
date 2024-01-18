<?php

namespace App\Http\Controllers;

use App\Models\Psychologist;
use Illuminate\Http\Request;

class PsychologistController extends Controller
{

    public function index()
    {
        $pyschologists = Psychologist::all();

        return view('home.psycologist.index', ["pyschologists" => $pyschologists]);
    }

    public function create()
    {
        return view("auth.cadastro.psicologo");
    }
}
