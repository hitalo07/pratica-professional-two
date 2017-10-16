@extends('layouts.app')

@section('content')

    <hr>

    <div class="container">
        <div class="row">
            <div class="col-md-15 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <div id="list" class="row"> <!-- inicio /#list -->

                            <div class="table-responsive col-md-12">
                                <h2 class="text-center">Relatório geral</h2>
                                <hr>
                                <table class="table table-striped" cellspacing="0" cellpadding="0">
                                    <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>CONDUTOR</th>
                                        <th>PLACA</th>
                                        <th>CATEGORIA</th>
                                        <th>ENTRADA</th>
                                        <th>SAÍDA</th>
                                        <th>VALOR TOTAL PAGO</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($entradas as $entrada)
                                            <tr>
                                                <td>{{ $entrada->id }}</td>
                                                <td>{{ $entrada->veiculo->condutor }}</td>
                                                <td>{{ $entrada->veiculo->placa }}</td>
                                                <td>{{ $entrada->veiculo->categoria->nome}}</td>
                                                <td>{{ $entrada->entrada }}</td>
                                                @if($entrada->saida == null)
                                                    <td class="btn-danger">VEÍCULO AINDA NO ESTACIONAMENTO</td>
                                                    <td class="btn-danger">VEÍCULO AINDA NO ESTACIONAMENTO</td>
                                                @else
                                                <td>{{ $entrada->saida }}</td>
                                                <td>R$ {{ $entrada->total }}</td>
                                               @endif
                                            </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div> <!-- fim /#list -->

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection