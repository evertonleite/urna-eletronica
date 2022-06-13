<?php

namespace App\Http\Controllers;
use App\Models\Candidato;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    public function initial() {
        $candidato = Candidato::all();
        return view('/registrarVotoView', ['candidato'=> $candidato]);
    }
}
