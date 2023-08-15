@extends('adminlte::page')

@section('title', 'Turmas')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Turmas</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Turmas</li>
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
$turma = App\Models\Turma::all();
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
                                Cadastrar turmas
                            </h3>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                Cadastrar turmas
                            </button>
                            @include('modal.turmas.turma_create')
                            <div class="col-md-12">
                                <section class="content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Turmas cadastradas</h3>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">
                                                        <table id="example2" class="table table-bordered table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th>Nome da turma</th>
                                                                <th>Curso</th>
                                                                <th>Ação</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                        @foreach ($turma as $tur)
                                                            <tr>
                                                                <td>{{ $tur -> nometurma}}</td>
                                                                <td>@foreach ($curso as $cur)
                                                                    @if($tur->curso==$cur->id) {{$cur -> nomecurso}}@endif
                                                                @endforeach
                                                                    </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-{{$tur->id}}">
                                                                        <i class="fas fa-edit"></i>Editar
                                                                    </button>

                                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$tur->id}}">
                                                                        <i class="fas fa-trash"></i>Excluir
                                                                    </button>

                                                                    @include('modal.turmas.turma_edit')
                                                                    @include('modal.turmas.turma_delete')
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th>Nome da turma</th>
                                                                <th>Curso</th>
                                                                <th>Ação</th>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop


