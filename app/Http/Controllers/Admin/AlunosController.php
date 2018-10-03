<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use App\Models\Contrato;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function index()
    {
        $a = Aluno::paginate();
        return view('admin.alunos.all')->with(['alunos' => $a]);
    }

    public function create()
    {
        return view('admin.alunos.create');
    }

    public function save(Request $request)
    {

        try {

            // Realiza o cadastro do aluno

            $a = new Aluno;
            $a->numero = $request->numero;
            $a->nome = $request->nome;
            $a->rg = $request->rg;
            $a->cpf = $request->cpf;

            $a->email = $request->email;
            $a->telefone = $request->telefone;
            $a->celular = $request->celular;
            $a->nascimento = $request->nascimento;

            $a->nacionalidade = $request->nacionalidade;
            $a->estadoCivil = $request->estadoCivil;
            $a->profissao = $request->profissao;

            // Endereço do aluno
            $a->endereco = $request->endereco;
            $a->numeroEndereco = $request->numeroEndereco;
            $a->complemento = $request->complemento;
            $a->bairro = $request->bairro;

            $a->cidade = $request->cidade;
            $a->cep = $request->cep;
            $a->estado = $request->estado;
            // Salva o aluno
            $a->save();

            // Realiza o cadastro do novo contrato
            $c = new Contrato;
            $c->unidade = $request->unidade;
            $c->plano = $request->plano;
            $c->inicio = $request->inicio;
            $c->termino = $request->termino;
            $c->valorParcela = $request->valorParcela;
            $c->desconto = $request->desconto;
            $c->total = $request->total;
            $c->diaPagamento = $request->diaPagamento;
            $c->secretaria = $request->secretaria;

            // Vincula o rg do aluno
            $c->rg = $request->rg;
            // Salva o contrato do aluno
            $c->save();

            return redirect()->back()->with('success', 'Aluno cadastrado com sucesso!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Não foi possível cadastrar este aluno: ' . $e->getMessage());
        }
    }

    public function delete($id)
    {
        try {

            Aluno::find($id)->delete();
            return redirect()->back()->with('success', 'Aluno apagado com sucesso!');
        } catch (\Exception $e){
            return redirect()->back()->with('error', 'Não foi possível apagar este aluno: ' . $e->getMessage());

        }
    }

    public function view($id)
    {
        try {
            $a = Aluno::find($id);

            return view('admin.alunos.view')->with(['aluno' => $a]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Não foi possível encontrar este aluno: ' . $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $a = Aluno::find($request->id)->update($request->all());
            return redirect()->back()->with('success', 'Aluno alterado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Não foi possível alterar este aluno: ' . $e->getMessage());
        }
    }
}
