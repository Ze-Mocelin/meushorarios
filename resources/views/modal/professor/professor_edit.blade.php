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
    <div class="modal fade" id="modal-edit-{{$prof->id}}">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar professor - {{ $prof -> nome }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('professores/edit/'.$prof->id)}}">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$prof->id}}" />
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nome">Nome do professor</label>
                                <input type="text" name="nome" class="form-control" id="nome" placeholder="nome do professor" style="width:500px" value="{{ $prof -> nome }}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="nome">Horas</label>
                                <input type="text" name="horas" class="form-control" id="horas" placeholder="horas" value="{{ $prof->horas}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nome">Disciplina</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="disciplina" id="disciplina">
                                    @foreach ($disciplina as $disc)
                                    <option value="{{ $disc -> id }}"@if($prof->disciplina==$disc->id) selected @endif>{{ $disc -> nome }}</option>
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
                                    <input type="checkbox" name="matutino" class="form-check-input" id="matutino" @if($prof->matutino==1)checked @endif>
                                    <label class="form-check-label" for="matutino">Matutino</label>
                                </p>
                                <p>
                                    <input type="checkbox" name="vespertino" class="form-check-input" id="vespertino" @if($prof->vespertino==1) checked @endif>
                                    <label class="form-check-label" for="vespertino">Vespertino</label>
                                </p>
                                <p>
                                    <input type="checkbox" name="noturno" class="form-check-input" id="noturno" @if($prof->noturno==1) checked @endif>
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
                                    <td style="text-align: center;"><input type="checkbox" name="mseg11" class="form-check-input" id="mseg11" @if($prof->mseg11==0)checked @endif></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mter11" class="form-check-input" id="mter11" @if($prof->mter11==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqua11" class="form-check-input" id="mqua11" @if($prof->mqua11==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqui11" class="form-check-input" id="mqui11 "@if($prof->mqui11==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msex11" class="form-check-input" id="msex11" @if($prof->msex11==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msab11" class="form-check-input" id="msab11" @if($prof->msab11==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mdom11" class="form-check-input" id="mdom11" @if($prof->mdom11==0)checked @endif ></td>
                                  </tr>
                                  <tr>
                                    <td style="text-align: center;"><input type="checkbox" name="mseg12" class="form-check-input" id="mseg12" @if($prof->mseg12==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mter12" class="form-check-input" id="mter12" @if($prof->mter12==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqua12" class="form-check-input" id="mqua12" @if($prof->mqua12==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqui12" class="form-check-input" id="mqui12" @if($prof->mqui12==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msex12" class="form-check-input" id="msex12" @if($prof->msex12==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msab12" class="form-check-input" id="msab12" @if($prof->msab12==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mdom12" class="form-check-input" id="mdom12" @if($prof->mdom12==0)checked @endif ></td>
                                  </tr>
                                  <tr>
                                    <td style="text-align: center;"><input type="checkbox" name="mseg13" class="form-check-input" id="mseg13" @if($prof->mseg13==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mter13" class="form-check-input" id="mter13" @if($prof->mter13==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqua13" class="form-check-input" id="mqua13" @if($prof->mqua13==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqui13" class="form-check-input" id="mqui13" @if($prof->mqui13==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msex13" class="form-check-input" id="msex13" @if($prof->msex13==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msab13" class="form-check-input" id="msab13" @if($prof->msab13==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mdom13" class="form-check-input" id="mdom13" @if($prof->mdom13==0)checked @endif ></td>
                                  </tr>
                                  <tr>
                                    <td style="text-align: center;"><input type="checkbox" name="mseg14" class="form-check-input" id="mseg14" @if($prof->mseg14==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mter14" class="form-check-input" id="mter14" @if($prof->mter14==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqua14" class="form-check-input" id="mqua14" @if($prof->mqua14==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqui14" class="form-check-input" id="mqui14" @if($prof->mqui14==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msex14" class="form-check-input" id="msex14" @if($prof->msex14==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msab14" class="form-check-input" id="msab14" @if($prof->msab14==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mdom14" class="form-check-input" id="mdom14" @if($prof->mdom14==0)checked @endif ></td>
                                  </tr>
                                  <tr>
                                    <td style="text-align: center;"><input type="checkbox" name="mseg15" class="form-check-input" id="mseg15" @if($prof->mseg15==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mter15" class="form-check-input" id="mter15" @if($prof->mter15==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqua15" class="form-check-input" id="mqua15" @if($prof->mqua15==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqui15" class="form-check-input" id="mqui15" @if($prof->mqui15==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msex15" class="form-check-input" id="msex15" @if($prof->msex15==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msab15" class="form-check-input" id="msab15" @if($prof->msab15==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mdom15" class="form-check-input" id="mdom15" @if($prof->mdom15==0)checked @endif ></td>
                                  </tr>
                                  <tr>
                                    <td style="text-align: center;"><input type="checkbox" name="mseg16" class="form-check-input" id="mseg16" @if($prof->mseg16==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mter16" class="form-check-input" id="mter16" @if($prof->mter16==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqua16" class="form-check-input" id="mqua16" @if($prof->mqua16==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mqui16" class="form-check-input" id="mqui16" @if($prof->mqui16==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msex16" class="form-check-input" id="msex16" @if($prof->msex16==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="msab16" class="form-check-input" id="msab16" @if($prof->msab16==0)checked @endif ></td>
                                    <td style="text-align: center;"><input type="checkbox" name="mdom16" class="form-check-input" id="mdom16" @if($prof->mdom16==0)checked @endif ></td>
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
