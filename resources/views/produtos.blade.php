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



                        <form action="#" method="post" enctype="multipart/form-data" name="produtos" id="produtos">
                            {{csrf_field()}}
                            <div class="form-row">
                                {{--NUMERO DA ATA--}}
                                <div class="form-group col-md-12">
                                    <label for="numeroata"><b>PREÇO UNITÁRIO</b></label>
                                    <input class="form-control" type="number" name="valorUnitario" id="valorUnitario" required/>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="anoata"><b>DESCRIÇÃO</b></label>
                                    <input class="form-control" type="text" name="descricao" id="descricao" />
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label><b>QUANTIDADE</b></label>
                                    <input class="form-control" type="number" name="quantidade" id="quantidade"/>
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <!-- ANEXAR FOTO -->
                                <label><b>FOTO</b></label><br>
                                <input type="file" name="foto" id="foto" class="custom-file-input" required/>
                                <label class="custom-file-label" for="customFile"></label>
                            </div>
                            <hr>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
                            </div>
                        </form>
                        <br>
                        <div class="col-md-12" style="background-color: #0a53be; color: white; text-align: center;">
                            PRODUTOS
                        </div>
                        <table name="grade" class="table table-striped col-md-12" cellspacing="0" cellpadding="0">
                            <thead class="thead-primary">
                            <tr>
                                <th>Foto</th>
                                <th>Descrição</th>
                                <th>Preço</th>
                                <th>QTDE</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($produtos as $produto)
                                <tr>
                                    <td><img src="{{ url('storage/'.$produto->foto) }}" width="50"></td>
                                    <td>{{ $produto->descricao }}</td>
                                    <td>{{ $produto->valor_unitario }}</td>
                                    <td>{{ $produto->quantidade }}</td>
                                    <td><a class="btn btn-danger" href="{{ url('/delprod') }}/{{ $produto->id }}" >Excluir</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group col-md-12">
                        <a class="btn btn-success" href="{{ url('/home') }}"><i class="fas fa-save"></i> Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
