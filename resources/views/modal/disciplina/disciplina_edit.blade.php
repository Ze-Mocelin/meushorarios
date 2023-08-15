<div class="modal fade" id="modal-edit-{{$disc->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h4 class="modal-title">Disciplina - editar {{ $disc -> nome }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('disciplinas/edit/'.$disc->id)}}">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$disc->id}}" />
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome">Nome da disciplina</label>
                                <input type="text" name="nome" class="form-control" id="nome" placeholder="nome da disciplina" value="{{ $disc->nome }}">
                            </div>

                            <div class="form-group">
                                <label for="abreviatura">Qtde de aulas</label>
                                <input type="text" name="abreviatura" class="form-control" id="abreviatura" placeholder="nome da abreviação" value="{{ $disc->abreviatura }}">
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /.card-body -->
            </div>
            <div class="modal-footer justify-content-between">
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-outline-light">Salvar</button>
                </form>
            </div>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
