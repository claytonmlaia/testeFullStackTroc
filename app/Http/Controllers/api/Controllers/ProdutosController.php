<?php

namespace App\Http\Controllers\api\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProdutoResource;
use App\Models\Produtos;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{

    public function index()
    {
        $produtos = Produtos::get();
        return ProdutoResource::collection($produtos);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $produto = new Produtos();
        $produto->valor_unitario    = $request->valorUnitario;
        $produto->descricao         = $request->descricao;
        $produto->foto              = $request->foto;
        $produto->quantidade        = $request->quantidade;
        $produto->save();
    }


    public function show($id)
    {
        $produtos = Produtos::findOrFail($id);
        return new ProdutoResource($produtos);
    }


    public function edit($id)
    {
        //

    }


    public function update(Request $request, $id)
    {
        $produto = Produtos::findOrFail($id);
        $produto->valor_unitario    = $request->valorUnitario;
        $produto->descricao         = $request->descricao;
        $produto->foto              = $request->foto;
        $produto->quantidade        = $request->quantidade;
        if ($produto->save())
        {
           return new ProdutoResource($produto);
        }
    }


    public function destroy($id)
    {
        $produto = Produtos::findOrFail($id);
        if ($produto->delete())
        {
            return new ProdutoResource($produto);
        }
    }
}
