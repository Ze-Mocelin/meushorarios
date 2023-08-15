@extends('adminlte::page')

@section('title', 'Cursos')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Cursos</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Cursos</li>
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
$curso = App\Models\Curso::all();
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
                                Cadastrar cursos
                            </h3>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                Cadastrar curso
                            </button>
                            @include('modal.cursos.curso_create')

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Cursos</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th style="width: 10px">#</th>
                                <th>Nome do curso</th>
                                <th>Ação</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($curso as $cur )
                              <tr>
                                <td>{{ $cur -> id }}</td>
                                <td>{{ $cur -> nomecurso }}</td>
                                <td>
                                  <div class="">
                                    <div class="" style="">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-{{$cur->id}}">
                                            <i class="fas fa-edit"></i>Editar
                                        </button>

                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$cur->id}}">
                                            <i class="fas fa-trash"></i>Excluir
                                        </button>

                                        @include('modal.cursos.curso_edit')
                                        @include('modal.cursos.curso_delete')

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


