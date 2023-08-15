<div class="modal fade" id="modal-edit-{{$cur->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h4 class="modal-title">Curso - editar {{ $cur -> nomecurso }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('cursos/edit/'.$cur->id)}}">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$cur->id}}" />
                <div class="card-body">
                    <div class="row">
                        <div class="form-group">
                            <label for="nomecurso">Nome do curso: {{ $cur -> nomecurso }}</label>
                            <input type="text" name="nomecurso" class="form-control" id="exampleInputEmail1" placeholder="nome do curso" value="{{$cur -> nomecurso}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <b>Período</b>
                                <p>
                                    <input type="checkbox" name="matutino" class="form-check-input" id="matutino" @if($cur->matutino==1)checked @endif>
                                    <label class="form-check-label" for="matutino">Matutino</label>
                                </p>
                                <p>
                                    <input type="checkbox" name="vespertino" class="form-check-input" id="vespertino"@if($cur->vespertino==1)checked @endif>
                                    <label class="form-check-label" for="vespertino">Vespertino</label>
                                </p>
                                <p>
                                    <input type="checkbox" name="noturno" class="form-check-input" id="noturno"@if($cur->noturno==1)checked @endif>
                                    <label class="form-check-label" for="noturno">Noturno</label>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <b>Dias da semana</b>
                            <p>
                                <input type="checkbox" name="segunda" class="form-check-input" id="segunda" @if($cur->seg==1)checked @endif>
                                <label class="form-check-label" for="segunda">Segunda-feira</label>
                            </p>
                            <p>
                                <input type="checkbox" name="terca" class="form-check-input" id="terca" @if($cur->ter==1)checked @endif>
                                <label class="form-check-label" for="terca">Terça-feira</label>
                            </p>
                            <p>
                                <input type="checkbox" name="quarta" class="form-check-input" id="quarta" @if($cur->qua==1)checked @endif>
                                <label class="form-check-label" for="quarta">Quarta-feira</label>
                            </p>
                            <p>
                                <input type="checkbox" name="quinta" class="form-check-input" id="quinta" @if($cur->qui==1)checked @endif>
                                <label class="form-check-label" for="quinta">Quinta-feira</label>
                            </p>
                            <p>
                                <input type="checkbox" name="sexta" class="form-check-input" id="sexta" @if($cur->sex==1)checked @endif>
                                <label class="form-check-label" for="sexta">Sexta-feira</label>
                            </p>
                            <p>
                                <input type="checkbox" name="sabado" class="form-check-input" id="sabado" @if($cur->sab==1)checked @endif>
                                <label class="form-check-label" for="sabado">Sábado</label>
                            </p>
                            <p>
                                <input type="checkbox" name="domingo" class="form-check-input" id="domingo" @if($cur->dom==1)checked @endif>
                                <label class="form-check-label" for="domingo">Domingo</label>
                            </p>
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
