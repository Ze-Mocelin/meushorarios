<div class="card-body">
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cadastrar novo curso</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('cursos/create')}}">
                    {{csrf_field()}}
                <div class="card-body">
                    <div class="row">
                        <div class="form-group">
                            <label for="nomecurso">Nome do curso</label>
                            <input type="text" name="nomecurso" class="form-control" id="exampleInputEmail1" placeholder="nome do curso">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <b>Período</b>
                                <p>
                                    <input type="checkbox" name="matutino" class="form-check-input" id="matutino">
                                    <label class="form-check-label" for="matutino">Matutino</label>
                                </p>
                                <p>
                                    <input type="checkbox" name="vespertino" class="form-check-input" id="vespertino">
                                    <label class="form-check-label" for="vespertino">Vespertino</label>
                                </p>
                                <p>
                                    <input type="checkbox" name="noturno" class="form-check-input" id="noturno">
                                    <label class="form-check-label" for="noturno">Noturno</label>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <b>Dias da semana</b>
                            <p>
                                <input type="checkbox" name="segunda" class="form-check-input" id="segunda">
                                <label class="form-check-label" for="segunda">Segunda-feira</label>
                            </p>
                            <p>
                                <input type="checkbox" name="terca" class="form-check-input" id="terca">
                                <label class="form-check-label" for="terca">Terça-feira</label>
                            </p>
                            <p>
                                <input type="checkbox" name="quarta" class="form-check-input" id="quarta">
                                <label class="form-check-label" for="quarta">Quarta-feira</label>
                            </p>
                            <p>
                                <input type="checkbox" name="quinta" class="form-check-input" id="quinta">
                                <label class="form-check-label" for="quinta">Quinta-feira</label>
                            </p>
                            <p>
                                <input type="checkbox" name="sexta" class="form-check-input" id="sexta">
                                <label class="form-check-label" for="sexta">Sexta-feira</label>
                            </p>
                            <p>
                                <input type="checkbox" name="sabado" class="form-check-input" id="sabado">
                                <label class="form-check-label" for="sabado">Sábado</label>
                            </p>
                            <p>
                                <input type="checkbox" name="domingo" class="form-check-input" id="domingo">
                                <label class="form-check-label" for="domingo">Domingo</label>
                            </p>
                        </div>
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
