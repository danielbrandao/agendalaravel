@extends('template.app')

@section('content')

    <div class="col-md-6 well">
        <div class="col-md-12">
        <h3>Deseja realmente excluir este contato?</h3>
            <div style="float: right">
                <a href='{{ url("pessoas/")}}' class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i>   Cancelar</a>
                <a href='{{ url("pessoas/$pessoa->id/destroy")}}' class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Excluir</a>
            </div>
    </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-danger"> 
            <div class="panel-heading"> 
            <h4 class="panel-title">{{ $pessoa->nome}}</h4> 
            </div>
            @foreach($pessoa->telefones as $telefone)
            <div class="panel-body"> ({{ $telefone->ddd }}) {{ $telefone->telefone}} 
            </div>
            @endforeach
        </div>
    </div>

@endsection