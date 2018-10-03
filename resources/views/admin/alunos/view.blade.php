@extends('layouts.admin.home')

@section('alunoActive', '')
@section('content')
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Overview</span>
            <h3 class="page-title">Perfil do aluno</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Default Light Table -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-small mb-4 pt-3">
                <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                        <img class="rounded-circle" src="https://image.flaticon.com/icons/png/128/149/149071.png"
                             alt="User Avatar" width="110"></div>
                    <h4 class="mb-0">
                        {{ $aluno->nome }}
                    </h4>

                    @if($aluno->profissao != null)
                        <strong>Profissão:</strong> <i>{{ $aluno->profissao }}</i>
                        <br>
                    @else
                    @endif
                    <a href="mailto:{{ $aluno->email }}" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2">
                        <i class="material-icons mr-1">local_post_office</i>Email
                    </a>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-4">
                        <div class="progress-wrapper text-center">
                            <strong class="text-muted d-block mb-2">Status do aluno</strong>
                            @switch($aluno->situacao)
                                @case(0)
                                <b class="text-success">
                                    <i class="material-icons">brightness_1</i> Ativo
                                </b>
                                @break

                                @case(1)
                                <b class="text-warnings">
                                    <i class="material-icons">brightness_1</i> Inativo
                                </b>
                                @break

                                @case(2)
                                <b class="text-danger">
                                    <i class="material-icons">brightness_1</i> Cancelado
                                </b>
                                @break

                            @endswitch
                        </div>
                    </li>
                    <li class="list-group-item p-4">
                        <p>
                            <button class="btn btn-primary" type="button" data-toggle="collapse"
                                    data-target="#contentId" aria-expanded="false"
                                    aria-controls="contentId">
                                Mudar situação
                            </button>
                        </p>
                        <div class="collapse" id="contentId">
                            <a href="{{ route('atualizaSituacao', ['id' => $aluno->id, 'code' => 0]) }}" class="btn btn-sm btn-outline-success mb-1">Ativo</a><br>
                            <a href="{{ route('atualizaSituacao', ['id' => $aluno->id, 'code' => 1]) }}" class="btn btn-sm btn-outline-warning mb-1">Inativo</a><br>
                            <a href="{{ route('atualizaSituacao', ['id' => $aluno->id, 'code' => 2]) }}" class="btn btn-sm btn-outline-danger mb-1">Cancelado</a><br>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Detalhes do aluno</h6>
                </div>

                <form action="{{ route('atualizarAluno') }}" method="post">
                    @csrf

                    <input type="hidden" name="id" value="{{ $aluno->id }}">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="feFirstName">Nome completo</label>
                                                <input type="text" name="nome" class="form-control" id="feFirstName"
                                                       placeholder="Nome completo do aluno" value="{{ $aluno->nome }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="feLastName">Nº do Contrato</label>
                                                <input type="text" name="numero" class="form-control" id="feLastName"
                                                       placeholder="Nº do Contrato" value="{{ $aluno->numero }}"></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="feEmailAddress">Email</label>
                                                <input type="email" class="form-control" id="feEmailAddress" name="email"
                                                       placeholder="email" value="{{ $aluno->email }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="fePassword">RG</label>
                                                <input type="text" class="form-control" id="fePassword" name="rg"
                                                       placeholder="RG" value="{{ $aluno->rg }}">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-12">
                                                <label for="feEstadoCivil">Estado civil</label>

                                                <input type="text" class="form-control" id="feEstadoCivil" name="estadoCivil"
                                                       placeholder="RG" value="{{ $aluno->estadoCivil }}">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="feNacionalidade">Nacionalidade</label>
                                                <input type="text" class="form-control" id="feNacionalidade"
                                                       name="nacionalidade" value="{{ $aluno->nacionalidade }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="feCPF">CPF</label>
                                                <input type="text" class="form-control" id="feCPF" name="cpf"
                                                       placeholder="CPF" value="{{ $aluno->cpf }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="feInputAddress">Endereço</label>
                                            <input type="text" name="endereco" class="form-control" id="feInputAddress" value="{{ $aluno->endereco }}">
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="feInputCity">Cidade</label>
                                                <input type="text" name="cidade" value="{{ $aluno->cidade }}"
                                                       class="form-control" id="feInputCity"></div>
                                            <div class="form-group col-md-4">
                                                <label for="estados">Estado</label>

                                                <select name="estado" class="form-control" id="estados">

                                                    <option value="{{ $aluno->estado }}">{{ $aluno->estado }}</option>
                                                    <option disabled>-------------</option>
                                                    <option value="GO">Goiás</option>
                                                    <option value="AC">Acre</option>
                                                    <option value="AL">Alagoas</option>
                                                    <option value="AP">Amapá</option>
                                                    <option value="AM">Amazonas</option>
                                                    <option value="BA">Bahia</option>
                                                    <option value="CE">Ceará</option>
                                                    <option value="DF">Distrito Federal</option>
                                                    <option value="ES">Espírito Santo</option>
                                                    <option value="MA">Maranhão</option>
                                                    <option value="MT">Mato Grosso</option>
                                                    <option value="MS">Mato Grosso do Sul</option>
                                                    <option value="MG">Minas Gerais</option>
                                                    <option value="PA">Pará</option>
                                                    <option value="PB">Paraíba</option>
                                                    <option value="PR">Paraná</option>
                                                    <option value="PE">Pernambuco</option>
                                                    <option value="PI">Piauí</option>
                                                    <option value="RJ">Rio de Janeiro</option>
                                                    <option value="RN">Rio Grande do Norte</option>
                                                    <option value="RS">Rio Grande do Sul</option>
                                                    <option value="RO">Rondônia</option>
                                                    <option value="RR">Roraima</option>
                                                    <option value="SC">Santa Catarina</option>
                                                    <option value="SP">São Paulo</option>
                                                    <option value="SE">Sergipe</option>
                                                    <option value="TO">Tocantins</option>
                                                </select>

                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputZip">CEP</label>
                                                <input type="text" class="form-control" id="inputZip" name="cep"
                                                       value="{{ $aluno->cep }}">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputComplemento">Complemento</label>
                                                <input type="text" class="form-control" name="complemento"
                                                       id="inputComplemento"
                                                       value="{{ $aluno->complemento }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputZip">Bairro</label>
                                                <input type="text" name="bairro" class="form-control" id="inputZip"
                                                       value="{{ $aluno->bairro }}">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="feDescription">Descrição</label>
                                                <textarea class="form-control" id="feDescription" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?</textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-accent">Atualizar dados</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <!-- End Default Light Table -->

@endsection