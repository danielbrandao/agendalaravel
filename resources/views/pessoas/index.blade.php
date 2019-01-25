@extends('template.app')

@section('content')
<div>
    <div class="col-sm-12">
    @foreach(range('A','Z') as $letra)
        <div class="btn-group">
            <a href="{{url('pessoas/' . $letra)}}" class="btn btn-primary {{ $letra == $criterio ? 'disabled': ''}}">
                {{ $letra }}
            </a>
        </div>
    @endforeach
    </div>
    <div class="col-md-12">
        <h3 class="col-md-8">Lista de contatos - {{ $criterio }} </h3>
         <form action="{{url('/pessoas/busca')}}" method="post">
            <div style="margin: 20px" class="col-sm-4 input-group">
                {{csrf_field()}}
                <input type="text" class="form-control" name="criterio" placeholder="Digite uma letra">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">Buscar</button>
                </div>
            </div>
        </form>
    </div>
    @foreach($pessoas as $pessoa)
    <div class="col-md-3">
        <div class="panel panel-primary"> 
            <div class="panel-heading"> 
            <h4 class="panel-title">{{ $pessoa->nome}}
                <a href='{{url("/pessoas/$pessoa->id/excluir")}}'> <i class='glyphicon glyphicon-trash' alt="Excluir registro" style="float: right; margin-left: 3px; color: red"></i></a> | 
                <a href='{{url("/pessoas/$pessoa->id/editar")}}'> <i class='glyphicon glyphicon-pencil' alt="Alterar registro" style="float: right; margin-right: 3px; "></i></a> 
            </h4> 
            </div>
            <!-- Modal - para modal de excluir -->
            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar mudanças</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- FIM MODAL -->
            @foreach($pessoa->telefones as $telefone)
            <div class="panel-body"> ({{ $telefone->ddd }}) {{ $telefone->telefone}} 
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>
@endsection 