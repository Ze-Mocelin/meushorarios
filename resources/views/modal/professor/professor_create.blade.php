<?php
$curso = App\Models\Curso::all();
$disciplina = App\Models\Disciplina::all();
?>
<style>
    table, td{
        border-collapse: collapse;
        border: 1px solid #000;
        padding: 10px;
    }
    .checkbox{
        text-align: center;
        /*Centering the text in a td of the table*/
    }
</style>
<div class="card-body">
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cadastrar professor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('professores/create')}}">
                    {{csrf_field()}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nome">Nome do professor</label>
                                <input type="text" name="nome" class="form-control" id="nome" placeholder="nome do professor" style="width:500px">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="nome">Horas</label>
                                <input type="text" name="horas" class="form-control" id="horas" placeholder="horas" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nome">Disciplina</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="disciplina" id="disciplina">
                                    @foreach ($disciplina as $disc)
                                    <option value="{{ $disc -> id }}">{{ $disc -> nome }}</option>
                                    @endforeach
                                  </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
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
                            <b>Dias de impossibilidade do professor</b>
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th style="width: 30px">Segunda</th>
                                    <th style="width: 30px">Terça</th>
                                    <th style="width: 30px">Quarta</th>
                                    <th style="width: 30px">Quinta</th>
                                    <th style="width: 30px">Sexta</th>
                                    <th style="width: 30px">Sábado</th>
                                    <th style="width: 30px">Domingo</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td style="text-align: center;"><input type="checkbox" name="mseg11" class="form-check-input" id="mseg11"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mter11" class="form-check-input" id="mter11"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqua11" class="form-check-input" id="mqua11"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqui11" class="form-check-input" id="mqui11"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msex11" class="form-check-input" id="msex11"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msab11" class="form-check-input" id="msab11"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mdom11" class="form-check-input" id="mdom11"checked ></td>
                                  </tr>
                                  <tr>
                                    <td style="text-align: center;"><input type="checkbox" name="mseg12" class="form-check-input" id="mseg12"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mter12" class="form-check-input" id="mter12"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqua12" class="form-check-input" id="mqua12"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqui12" class="form-check-input" id="mqui12"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msex12" class="form-check-input" id="msex12"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msab12" class="form-check-input" id="msab12"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mdom12" class="form-check-input" id="mdom12"checked ></td>
                                  </tr>
                                  <tr>
                                    <td style="text-align: center;"><input type="checkbox" name="mseg13" class="form-check-input" id="mseg13"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mter13" class="form-check-input" id="mter13"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqua13" class="form-check-input" id="mqua13"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqui13" class="form-check-input" id="mqui13"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msex13" class="form-check-input" id="msex13"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msab13" class="form-check-input" id="msab13"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mdom13" class="form-check-input" id="mdom13"checked ></td>
                                  </tr>
                                  <tr>
                                    <td style="text-align: center;"><input type="checkbox" name="mseg14" class="form-check-input" id="mseg14"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mter14" class="form-check-input" id="mter14"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqua14" class="form-check-input" id="mqua14"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqui14" class="form-check-input" id="mqui14"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msex14" class="form-check-input" id="msex14"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msab14" class="form-check-input" id="msab14"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mdom14" class="form-check-input" id="mdom14"checked ></td>
                                  </tr>
                                  <tr>
                                    <td style="text-align: center;"><input type="checkbox" name="mseg15" class="form-check-input" id="mseg15"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mter15" class="form-check-input" id="mter15"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqua15" class="form-check-input" id="mqua15"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqui15" class="form-check-input" id="mqui15"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msex15" class="form-check-input" id="msex15"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msab15" class="form-check-input" id="msab15"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mdom15" class="form-check-input" id="mdom15"checked ></td>
                                  </tr>
                                  <tr>
                                    <td style="text-align: center;"><input type="checkbox" name="mseg16" class="form-check-input" id="mseg16"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mter16" class="form-check-input" id="mter16"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqua16" class="form-check-input" id="mqua16"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqui16" class="form-check-input" id="mqui16"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msex16" class="form-check-input" id="msex16"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msab16" class="form-check-input" id="msab16"checked ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mdom16" class="form-check-input" id="mdom16"checked ></td>
                                  </tr>
                                </tbody>
                              </table>
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
