@extends('template.app')

@section('content')
    <div class="col-md-12">
        <h3>Editar Contato</h3>
    </div>
    <div class="col-md-6 well">
        <form class="col-md-12" action="{{url('pessoas/update')}}" method="post">
            <!-- token de "segurança" do laravel -->
            <!-- conservando o processo toixco -->
            {{ csrf_field()}}
            <input type="hidden" name="id" value="{{$pessoa->id}}"/>
            <div class="form-group">
                <label class="control-label">Nome</label>
                <input type='text' value="{{$pessoa->nome}}" name='nome' class="form-control  col-md-12" placeholder='Nome' />
            </div>
            <button class="btn btn-primary" style="float: right">Salvar</button>
        </form>
    </div>
    <div class="col-md-3">
        <div class="panel panel-primary"> 
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