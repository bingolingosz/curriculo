<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    # campos que podem ser preenchidos na tabela
    # propriedade fillable / variável
    protected $fillable = [
        "titulo",
        "descricao",
        "sobre",
        "imagem",
        "tipo",
    ];

    # Eloquent ORM - Object Relational Mapping - Acesso ao banco de dados
    public function Cadastra() {
        $portfolio = new Portfolio(); # instancia a classe / objeto

        $portfolio->titulo = "Projeto 1";
        $portfolio->descricao = "Descrição do Projeto 1";

        $portfolio->save(); # salva no banco de dados
    }
}
