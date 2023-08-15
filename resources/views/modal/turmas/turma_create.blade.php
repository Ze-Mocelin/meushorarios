<?php
$curso = App\Models\Curso::all();
?>
<div class="card-body">
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cadastrar nova turma</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('turmas/create')}}">
                    {{csrf_field()}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nometurma">Nome da turma</label>
                                <input type="text" name="nometurma" class="form-control" id="nometurma" placeholder="nome da turma">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="curso">Selecione o curso</label>
                        <select name="curso" id="curso" class="form-control">
                            @foreach($curso as $cur)
                            <option value="{{$cur->id}}"> {{ $cur->nomecurso }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary toastrDefaultSuccess">Salvar</button>
                </form>
            </div>
        </div>
          <!-- /.modal-content -->
    </div>
        <!-- /.modal-dialog -->
</div>
