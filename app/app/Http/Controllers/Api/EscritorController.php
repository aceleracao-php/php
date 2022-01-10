<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Escritor;
use Illuminate\Http\Request;

class EscritorController extends Controller
{
    private $escritor;

    function __construct(Escritor $escritor)
    {
        $this->escritor = $escritor;    
    }
    
    function index(){
        return response()->json([
            "escritores" => $this->escritor->paginate(10)
        ], 200);
    }
}
