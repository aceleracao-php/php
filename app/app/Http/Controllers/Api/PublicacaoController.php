<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Publicacao;
use Illuminate\Http\Request;

class PublicacaoController extends Controller
{
    private $publicacao;

    function __construct(Publicacao $publicacao)
    {   
        $this->publicacao = $publicacao;
    }

    function index(){
        return response()->json([
            "publicacoes" => $this->publicacao->paginate(10)
        ], 200);
    }
}
