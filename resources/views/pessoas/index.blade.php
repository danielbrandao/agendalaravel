@extends('template.app')

@section('content')
<div>
    @foreach($pessoas as $pessoa)
    <div class="col-md-3">
        <div class="panel panel-info">
            <div class="panel-heading">{{ $pessoa->nome}}</div>
            <div class="panel-body">
                Panel content
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection 