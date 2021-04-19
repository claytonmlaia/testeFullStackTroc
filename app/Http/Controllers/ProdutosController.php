<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $produtos = Produtos::get();
        return view('produtos', compact('produtos'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $hexadecimal = substr(md5(Carbon::now()->toDateTimeString()), 0, 8);
        $extensao = $request->file('foto')->clientExtension();
        $nome = 'foto'.$hexadecimal;
        $pasta = $request->file('foto')->storeAs('fotos', $nome.'.'.$extensao);
        $file = $request->file('foto');
        $img = $file->openFile()->fread($file->getSize());
        $produto = new Produtos();
        $produto->valor_unitario    = $request->valorUnitario;
        $produto->descricao         = $request->descricao;
        $produto->foto              = $pasta;
        $produto->quantidade        = $request->quantidade;
        $produto->save();

        return back();
    }


    public function show(Produtos $produtos)
    {
        //dd($produtos->id);
        //$produtos = Produtos::where('id', $produtos->id)->get();
    }


    public function edit(Produtos $produtos)
    {
        //
    }


    public function update(Request $request, Produtos $produtos)
    {
        //
    }


    public function destroy($id)
    {
        //dd($id);
        $produto = Produtos::find($id);
        unlink('storage/'.$produto->foto);
        $produto->delete();
        return redirect(url('/produtos'));
    }
}
