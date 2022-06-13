<?php

namespace App\Http\Controllers;
use App\Models\Candidato;
use Illuminate\Http\Request;

class GerarRelatorioController extends Controller
{
    public function showAll() {
        $candidato = Candidato::all();
        return view('/gerarRelatorioView', ['candidato'=> $candidato]);
    }
}

