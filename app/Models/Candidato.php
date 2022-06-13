<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $table = 'candidato';
    protected $fillable = array('nome', 'numero_chapa', 'situacao_candidato', 'qtd_voto');
}
