@extends('template.app')

@section('content')
<div>
    <h3>Lista de contatos</h3>
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