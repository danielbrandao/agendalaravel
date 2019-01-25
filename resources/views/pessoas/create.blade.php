@extends('template.app')

@section('content')
<div class="col-md-12">
    <h3>Novo Contato</h3>
</div>
<!-- Modal - para nõ=ão inserir vazio >
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
                    @if(count($errors))
                        {{ $errors->first() }}
                    @endif
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar mudanças</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- FIM MODAL -->

    <div class="col-md-6 well">
        <form class="col-md-12" action="{{url('pessoas/store')}}" method="post">
            <!-- token de "segurança" do laravel -->
            {{ csrf_field()}}
            <div class="from-group col-md-12 {{ $errors->has('nome') ? 'has-error' : ''}}">
                <label class="control-label">Nome</label>
                <input type='text' name='nome' value="{{ old('nome')}}" class="form-control" placeholder='Nome' />
                @if($errors->has('nome'))
                    <span class="help-block">
                    {{ $errors->first('nome')}}
                    </span>
                @endif
            </div>
            <div class="from-group col-md-4 {{ $errors->has('ddd') ? 'has-error' : ''}}">
                <label class="control-label">DDD</label>
                <input type='text' name='ddd' value="{{ old('ddd')}}" class="form-control " placeholder='DDD' />
                @if($errors->has('ddd'))
                    <span class="help-block">
                    {{ $errors->first('ddd')}}
                    </span>
                @endif
            </div>
            <div  class="from-group col-md-8 {{ $errors->has('telefone') ? 'has-error' : ''}}">
                <label class="control-label">Telefone</label>
                <input type='text' name='telefone' value="{{old('telefone')}}" class="form-control" placeholder='Telefone' />
                @if($errors->has('telefone'))
                    <span class="help-block">
                    {{ $errors->first('telefone')}}
                    </span>
                @endif
            </div>
            <div class="col-md-12">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">Salvar</button>
                <!--button class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">Salvar</button-->
            </div>
        </form>
    </div>

@endsection