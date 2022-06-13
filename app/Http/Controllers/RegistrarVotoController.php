<?php

namespace App\Http\Controllers;
use App\Models\Candidato;
use Illuminate\Http\Request;

class RegistrarVotoController extends Controller
{
    public function votar($id) {
        $candidato = Candidato::find($id);
        $candidato->qtd_voto += 1;
        $candidato->save();

        return redirect('/relatorio');
    }

}