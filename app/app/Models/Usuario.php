<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    static function usuarioLogado(){
        $user = array(
            "nome" => "Jonatan Santos",
            "nivel" => "1",
            "funcao" => "Estagiario"
        );
        return $user;
    }
}
