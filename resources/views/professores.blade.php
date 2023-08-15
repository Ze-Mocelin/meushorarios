@extends('adminlte::page')

@section('title', 'Professores')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Professores</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Professores</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>

      <row>
        <div class="container-fluid">
            <div>
                @if (Session('status'))
                <div class="bg-success" style="padding: 20px;">
                    {{Session('status')}}
                </div>
            @endif
            @if(Session('error'))
                <div class="bg-danger" style="padding: 20px;">
                    {{Session('error')}}
                </div>
            @endif
            @if(Session('message'))
                <div class="bg-success" style="padding: 20px;">
                    {{Session('message')}}
                </div>
            @endif
            </div>
        </div>
    </row>
@stop

<?php
$professor = App\Models\Professor::all();
$disciplina = App\Models\Disciplina::all();
?>
@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-edit"></i>
                                Cadastrar professor
                            </h3>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                Cadastrar professor
                            </button>
                            @include('modal.professor.professor_create')

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Professores</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th style="width: 10px">#</th>
                                <th>Professor</th>
                                <th>Disciplina</th>
                                <th>Período</th>
                                <th>Horas</th>
                                <th>Ação</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($professor as $prof )
                              <tr>
                                <td>{{ $prof -> id }}</td>
                                <td>{{ $prof -> nome }}</td>
                                <td>
                                @foreach ($disciplina as $disc)
                                    @if ($prof -> disciplina == $disc->id) {{$disc -> nome }} @endif
                                @endforeach
                                </td>
                                <td>
                                    @if($prof->matutino==1) matutino @endif
                                    @if($prof->vespertino==1)   vespertino @endif
                                    @if($prof->noturno==1)  noturno @endif
                                </td>
                                <td>{{ $prof -> horas }}</td>
                                <td>
                                  <div class="">
                                    <div class="" style="">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-{{$prof->id}}">
                                            <i class="fas fa-edit"></i>Editar
                                        </button>

                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$prof->id}}">
                                            <i class="fas fa-trash"></i>Excluir
                                        </button>

                                        @include('modal.professor.professor_edit')
                                        @include('modal.professor.professor_delete')

                                </td>

                              </tr>
                              @endforeach

                            </tbody>
                          </table>

                          </div>
                      </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('js')
@stop

