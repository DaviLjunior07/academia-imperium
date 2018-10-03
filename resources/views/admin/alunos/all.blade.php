@extends('layouts.admin.home')

@section('alunoActive', 'active')
@section('content')
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Dashboard</span>
            <h3 class="page-title">Administração de alunos</h3>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <span class="float-right" style="margin-right:10px;margin-bottom: 5px;">
                <a href="{{ route('novoAluno') }}" class="btn btn-accent">Adicionar</a>
            </span>
        </div>
    </div>

    <div class="row">
        <div class="col">



            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Todos alunos cadastrados</h6>
                </div>
                <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                        <thead class="bg-light">
                        <tr>
                            <th scope="col" class="border-0">#</th>
                            <th scope="col" class="border-0">Nome</th>
                            <th scope="col" class="border-0">Email</th>
                            <th scope="col" class="border-0">Situação</th>
                            <th scope="col" class="border-0">Ações</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($alunos as $aluno)
                            <tr>
                                <td>{{ $aluno->id }}/td>
                                <td>{{ $aluno->nome }}</td>
                                <td>{{ $aluno->email }}</td>
                                <td>

                                    @switch($aluno->situacao)
                                        @case(0)
                                            <b class="text-success">
                                                <i class="material-icons">brightness_1</i> Ativo
                                            </b>
                                        @break

                                        @case(1)
                                            <b class="text-warnig">
                                               <i class="material-icons">brightness_1</i> Inativo
                                            </b>
                                        @break

                                        @case(2)
                                            <b class="text-danger">
                                               <i class="material-icons">brightness_1</i> Cancelado
                                            </b>
                                        @break

                                    @endswitch

                                </td>
                                <td>
                                    <a href="{{ route('apagarAluno', ['id' => $aluno->id])}}" class="btn btn-outline-danger btn-sm">Apagar</a>
                                    <a href="{{ route('verAluno', ['id' => $aluno->id]) }}" class="btn btn-outline-primary btn-sm">Visualizar</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection