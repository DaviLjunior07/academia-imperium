@extends('layouts.admin.home')

@section('alunoActive', 'active')
@section('content')


    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Dashboard</span>
            <h3 class="page-title">Administração de alunos</h3>
        </div>
    </div>



    <form action="{{ route('salvarAluno') }}" method="post">
        @csrf
        <div class="row">
            <div class="container">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0"><i class="material-icons">person_add</i> Criar novo aluno</h6>
                    </div>
                    <div class="card-body p-0 pb-3">

                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0 text-center">
                                        <button type="button" class="btn btn-outline-accent" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                           1. Básico
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordion">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Número</label>
                                                    <input type="text" class="form-control" name="numero"
                                                           placeholder="Número do contrato">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nome</label>
                                                    <input type="text" class="form-control" name="nome"
                                                           placeholder="Nome completo">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nacionalidade</label>
                                                    <input type="text" class="form-control" name="nacionalidade"
                                                           placeholder="Nacionalidade do aluno">
                                                </div>
                                                <div class="form-group">
                                                    <label>CPF</label>
                                                    <input type="text" class="form-control" name="cpf"
                                                           placeholder="Digite o CPF">
                                                </div>

                                                <div class="form-group">
                                                    <label>RG</label>
                                                    <input type="text" class="form-control" name="rg"
                                                           placeholder="Digite o RG">
                                                </div>

                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" name="email"
                                                           placeholder="Digite o E-Mail">
                                                </div>


                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Telefone</label>
                                                    <input type="text" class="form-control" name="telefone"
                                                           placeholder="Digite o Telefone">
                                                </div>
                                                <div class="form-group">
                                                    <label>Celular</label>
                                                    <input type="text" class="form-control" name="celular"
                                                           placeholder="Digite o Celular">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nascimento</label>
                                                    <input type="text" class="form-control" name="nascimento"
                                                           placeholder="Digite o nascimento">
                                                </div>
                                                <div class="form-group">
                                                    <label>Estado civil</label>
                                                    <input type="text" class="form-control" name="estadoCivil"
                                                           placeholder="Digite o estado civil">
                                                </div>
                                                <div class="form-group">
                                                    <label>Profissão</label>
                                                    <input type="text" class="form-control" name="profissao"
                                                           placeholder="Profissão">
                                                </div>

                                                <small>Após preencher, selecione a opção <i><b>Endereço</b></i>.</small>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button type="button" class="btn btn-outline-primary collapsed"
                                                data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                           2. Endereço
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                     data-parent="#accordion">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Endereço</label>
                                                    <input type="text" class="form-control" name="endereco"
                                                           placeholder="Digite o endereço">
                                                </div>

                                                <div class="form-group">
                                                    <label>Número</label>
                                                    <input type="number" min="1" class="form-control" name="numeroEndereco"
                                                           placeholder="Número do endereço">
                                                </div>
                                                <div class="form-group">
                                                    <label>Bairro</label>
                                                    <input type="text" class="form-control" name="bairro"
                                                           placeholder="Digite o Bairro">
                                                </div>
                                                <div class="form-group">
                                                    <label>Complemento</label>
                                                    <input type="text" class="form-control" name="complemento"
                                                           placeholder="Complemento">
                                                </div>

                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Cidade</label>
                                                    <input type="text" class="form-control" name="cidade"
                                                           placeholder="Cidade">
                                                </div>
                                                <div class="form-group">
                                                    <label for="estados">Estado</label>
                                                    <select name="estado" class="form-control" id="estados">
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

                                                <div class="form-group">
                                                    <label>CEP</label>
                                                    <input type="text" class="form-control" name="cep"
                                                           placeholder="CEP">
                                                </div>
                                                <small>Após preencher, selecione a opção <i><b>Contrato</b></i>.</small>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button type="button" class="btn btn-outline-success collapsed"
                                                data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                           3. Contrato
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                     data-parent="#accordion">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="lblUnidade">Unidade</label>
                                                    <select name="unidade" id="lblUnidade" class="form-control">
                                                        <option value="Formosa">Formosa</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="lblPlano">Plano</label>
                                                    <select name="plano" id="lblUnidade" class="form-control">
                                                        <option value="1">Mensal 1x</option>
                                                        <option value="3">Trimestra 3x</option>
                                                        <option value="6">Semestral 6x</option>
                                                        <option value="12">Anual 12x</option>

                                                        <option value="m3">Melhor idade 3x</option>
                                                        <option value="e3">Executivo 3x</option>
                                                        <option value="emp3">Empresarial 3x</option>
                                                        <option value="f6">Familiar 6x</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Data de início</label>
                                                    <input type="date" class="form-control" name="inicio" placeholder="Data de início">
                                                </div>
                                                <div class="form-group">
                                                    <label>Data de término</label>
                                                    <input type="date" class="form-control" name="termino" placeholder="Data de termino">

                                                </div>

                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Parcela</label>
                                                    <input type="number" min="0" class="form-control" name="valorParcela" placeholder="Valor da parcela R$">

                                                </div>
                                                <div class="form-group">
                                                    <label>Desconto</label>
                                                    <input type="text" class="form-control" name="desconto" placeholder="Desconto">

                                                </div>
                                                <div class="form-group">
                                                    <label>Total</label>
                                                    <input type="text" class="form-control" name="total" placeholder="Valor total">

                                                </div>
                                                <div class="form-group">
                                                    <label>Dia de pagamento</label>
                                                    <input type="text" class="form-control" name="diaPagamento" placeholder="Dia de pagamento">
                                                </div>
                                                <div class="form-group">
                                                    <label for="lblSecretaria">Secretária</label>
                                                    <select name="secretaria" id="lblSecretaria" class="form-control">
                                                        <option value="1">Kenia</option>
                                                        <option value="2">Priscila</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-success btn-block mt-4">Salvar</button>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection


@section('style')
    .card {
    margin: 10px;
    }
@endsection