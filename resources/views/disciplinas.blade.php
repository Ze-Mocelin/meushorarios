@extends('adminlte::page')

@section('title', 'Disciplinas')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Disciplinas</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Disciplinas</li>
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
                                Cadastrar disciplina
                            </h3>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                Cadastrar disciplina
                            </button>
                            @include('modal.disciplina.disciplina_create')

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Disciplinas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th style="width: 10px">#</th>
                                <th>Disciplina</th>
                                <th>Qtde de aulas</th>
                                <th>Ação</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($disciplina as $disc )
                              <tr>
                                <td>{{ $disc -> id }}</td>
                                <td>{{ $disc -> nome }}</td>
                                <td>{{ $disc -> abreviatura }}</td>
                                <td>
                                  <div class="">
                                    <div class="" style="">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-{{$disc->id}}">
                                            <i class="fas fa-edit"></i>Editar
                                        </button>

                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$disc->id}}">
                                            <i class="fas fa-trash"></i>Excluir
                                        </button>

                                        @include('modal.disciplina.disciplina_edit')
                                        @include('modal.disciplina.disciplina_delete')

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


