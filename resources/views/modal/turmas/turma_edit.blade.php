<?php
$curso = App\Models\Curso::all();
$turma2 = App\Models\Turma::all();
?>
<div class="modal fade" id="modal-edit-{{$tur->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h4 class="modal-title">Curso - editar {{ $tur -> nometurma }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('cursos/edit/'.$tur->id)}}">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$tur->id}}" />
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nometurma">Nome da turma</label>
                                <input type="text" name="nometurma" class="form-control" id="nometurma" placeholder="nome da turma" value={{$tur->nometurma}}>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="curso">Selecione o curso</label>
                        <select name="curso" id="curso" class="form-control">
                            @foreach ($curso as $cur )
                                <option value="{{$tur->id}}" @if($tur->curso==$cur->id) selected @endif> {{ $cur->nomecurso }}  </option>


                            @endforeach
                        </select>

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
