@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Cadastramento') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Bem vindo {{ auth()->user()->name }}<br>

                            <div class="form-group col-md-12">
                                <a class="btn btn-success" href="{{ url('/produtos') }}"><i class="fas fa-save"></i> Produtos</a>
                                <a class="btn btn-success" href="{{ url('/cupons') }}"><i class="fas fa-save"></i> Cupons</a>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
{{--SCRIPT PARA COLOCAR O NOME DO ARQUIVO NO INPUT--}}
<script>
    var div = document.getElementsByClassName("custom-file-label")[0];
    var input = document.getElementById("arquivo");

    div.addEventListener("click", function(){
        input.click();
    });
    input.addEventListener("change", function(){
        var nome = "Não há arquivo selecionado. Selecionar arquivo...";
        if(input.files.length > 0) nome = input.files[0].name;
        div.innerHTML = nome;
    });
</script>