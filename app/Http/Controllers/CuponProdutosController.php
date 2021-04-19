<?php

namespace App\Http\Controllers;

use App\Models\CuponProdutos;
use Illuminate\Http\Request;

class CuponProdutosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(CuponProdutos $cuponProdutos)
    {
        //
    }


    public function edit(CuponProdutos $cuponProdutos)
    {
        //
    }


    public function update(Request $request, CuponProdutos $cuponProdutos)
    {
        //
    }


    public function destroy(CuponProdutos $cuponProdutos)
    {
        //
    }
}
