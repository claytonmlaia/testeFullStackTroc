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



                        <form action="#" method="post" enctype="multipart/form-data" >
                            {{csrf_field()}}
                            <div class="form-row">
                                {{--NUMERO DA ATA--}}
                                <div class="form-group col-md-12">
                                    <label for="numeroata"><b>VALOR</b></label>
                                    <input class="form-control" type="number" name="valor" id="valor" required/>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="anoata"><b>VALIDADE</b></label>
                                    <input class="form-control" type="date" name="validade" id="validade" />
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label ><b>TIPO DE DESCONTO</b></label><div style="display: flex;">
                                        <select class="form-control" id="tipo" name="tipo" required>
                                            <option value="0" selected>Porcentagem</option>
                                            <option value="1">Valor</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
                                </div>
                            </div>
                        </form>

                        <br>
                        <div class="col-md-12" style="background-color: #0a53be; color: white; text-align: center;">
                            CUPONS
                        </div>
                        <table name="grade" class="table table-striped col-md-12" cellspacing="0" cellpadding="0">
                            <thead class="thead-primary">
                            <tr>
                                <th>VALOR</th>
                                <th>VÁLIDO ATÉ</th>
                                <th>TIPO</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cupons as $cupon)
                                <tr>
                                    <td>{{ $cupon->valor }}</td>
                                    <td>{{ \Carbon\Carbon::parse($cupon->validade)->format('d/m/Y') }}</td>
                                    <td>{{ $cupon->cupon_porcento == 0 ? 'Porcentagem' : 'Valor' }}</td>
                                    <td>BOTOES AQUI</td>
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
