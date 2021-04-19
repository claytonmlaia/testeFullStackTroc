<?php

namespace App\Http\Controllers;

use App\Models\CuponDescontos;
use Illuminate\Http\Request;

class CuponDescontosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cupons = CuponDescontos::get();
        return view('cupon', compact('cupons'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $cupons = new CuponDescontos();
        $cupons->valor = $request->valor;
        $cupons->validade = $request->validade;
        $cupons->cupon_porcento = $request->tipo;
        $cupons->save();

        return back();
    }


    public function show(CuponDescontos $cuponDescontos)
    {
        //
    }


    public function edit(CuponDescontos $cuponDescontos)
    {
        //
    }


    public function update(Request $request, CuponDescontos $cuponDescontos)
    {
        //
    }


    public function destroy(CuponDescontos $cuponDescontos)
    {
        //
    }
}
