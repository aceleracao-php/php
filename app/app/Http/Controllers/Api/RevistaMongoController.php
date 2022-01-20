<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RevistaMongo;
use Exception;
use Illuminate\Http\Request;

class RevistaMongoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revistas = RevistaMongo::all();

        return response()->json([
            'revistas_mongo' => $revistas
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $revista = new RevistaMongo();
            $revista->nome = $request->nome;
            $revista->edicao = $request->edicao;

            $revista->save();

            return response()->json([
                'status' => "OK"
            ], 201);
        }catch(Exception $e){
            return response()->json([
                'status' => "Error",
                'error' => $e->getMessage()
            ], 403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $revista = RevistaMongo::find($id);

            return response()->json([
                'revista_mongo' => $revista
            ], 200);
        }catch(Exception $e){
            return response()->json([
                'status' => "Error Select",
                'error' => $e->getMessage()
            ], 403);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $revista = RevistaMongo::find($id);
            $revista->nome = $request->nome;
            $revista->edicao = $request->edicao;

            $revista->save();

            return response()->json([
                'status' => "OK"
            ], 200);
        }catch(Exception $e){
            return response()->json([
                'status' => "Error Update",
                'error' => $e->getMessage()
            ], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $revista = RevistaMongo::find($id);

            $revista->delete();

            return response()->json([
                'status' => "OK"
            ], 200);
        }catch(Exception $e){
            return response()->json([
                'status' => "Error Delete",
                'error' => $e->getMessage()
            ], 403);
        }
    }
}
