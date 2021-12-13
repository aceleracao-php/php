<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    use HasFactory;   
    //Definir o nome da tabela no banco de dados na hora do migrate
    //protected $table = "artigos";
    //Definir quais campos são enviados
    protected $fillable = ["title", "resumo", "content"];
}
