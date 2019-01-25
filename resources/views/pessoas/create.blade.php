@extends('template.app')

@section('content')
<div class="col-md-12">
    <h3>Novo Contato</h3>
</div>

@if(count($errors))
    {{ $errors->first() }}
@endif
    <div class="col-md-6 well">
        <form class="col-md-12" action="{{url('pessoas/store')}}" method="post">
            <!-- token de "segurança" do laravel -->
            <!-- conservando o processo toixco -->
            {{ csrf_field()}}
            <div class="form-group">
                <label class="control-label">Nome</label>
                <input type='text' name='nome' class="form-control  col-md-12" placeholder='Nome' />
                <label class="control-label">DDD</label>
                <input type='text' name='ddd' class="form-control  col-md-2" placeholder='DDD' />
                <label class="control-label">Telefone</label>
                <input type='text' name='telefone' class="form-control  col-md-8" placeholder='Telefone' />
            </div>
            <button class="btn btn-primary">Salvar</button>
        </form>
    </div>

@endsection