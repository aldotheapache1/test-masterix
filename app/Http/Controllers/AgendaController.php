<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Contato;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    public function index()
    {

        $search = request('search');

        if ($search) {

            $contatos = Pessoa::where([
                ['nome', 'like', '%' . $search . '%']
            ])->get();

            $tiposContatos = Contato::all();
        } else {
            $contatos = Pessoa::orderBy('nome', 'asc')->paginate(10);

            $tiposContatos = Contato::all();
        }

        return view('index', ['contatos' => $contatos, 'tiposContatos' => $tiposContatos, 'search' => $search]);
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        $pessoa = new Pessoa;
        $pessoa->nome = $request->nome;
        $pessoa->data_aniversario = $request->data_aniversario;
        $pessoa->rua = $request->rua;
        $pessoa->numero = $request->numero;
        $pessoa->bairro = $request->bairro;
        $pessoa->cidade = $request->cidade;
        $pessoa->estado = $request->estado;
        $pessoa->pais = $request->pais;
        $pessoa->save();

        $count = count($request->moreFields);
        $request->validate([
            'moreFields.*.nome' => 'required',
            'moreFields.*.valor' => 'required',
        ]);
        for ($i=0; $i < $count; $i++) { 
            $contato = new Contato;
            $contato->pessoa_id = $pessoa->id;
            $contato->nome = $request->moreFields[$i]['nome'];
            $contato->valor = $request->moreFields[$i]['valor'];
            $contato->save();
        }
        return redirect('/')->with('msg', 'Contato cadastrado com sucesso!');
    }

    public function edit($id)
    {

        $pessoa = Pessoa::findOrFail($id);
        $contatos = Contato::where('pessoa_id', $pessoa->id)->get();
        return view('pages.edit', ['pessoa' => $pessoa, 'contatos' => $contatos]);
    }

    public function update(Request $request)
    {
        //fiz isso para realizar o update nas duas tabelas pessoas e contatos
        DB::table('pessoas')->where('id', $request->id)->update(['nome' => $request->nome, 'data_aniversario' => $request->data_aniversario, 'rua' => $request->rua, 'numero' => $request->numero, 'bairro' => $request->bairro, 'cidade' => $request->cidade, 'estado' => $request->estado, 'pais' => $request->pais ]);

        

        $contatos = Contato::where('pessoa_id', $request->id)->get();
        $count = count($request->moreFields);
        $countContatos = count($contatos);
        $request->validate([
            'moreFields.*.nome' => 'required',
            'moreFields.*.valor' => 'required',
        ]);
        //se a alteração acrescentar algo
        if($count > $countContatos){
            for ($i=0; $i < $countContatos; $i++) { 
                DB::table('contatos')->where('id', $contatos[$i]->id)->update(['nome' => $request->moreFields[$i]['nome'], 'valor' => $request->moreFields[$i]['valor']]);
            }
            for ($i=$countContatos ; $i < $count; $i++) { 
                $contato = new Contato;
                $contato->pessoa_id = $request->id;
                $contato->nome = $request->moreFields[$i]['nome'];
                $contato->valor = $request->moreFields[$i]['valor'];
                $contato->save();
            }
        }
        //se a alteração excluir algo
        else if ($count < $countContatos){
            for ($i=0 ; $i < $countContatos; $i++) { 
                //o contato que não existir no request é excluido do banco
                if (isset($request->moreFields[$i]['nome']) == false and isset($request->moreFields[$i]['valor']) == false and $request->id == $contatos[$i]->pessoa_id) {
                    DB::table('contatos')->delete($contatos[$i]->id);
                }
            }

        }
        //se a alteração for não acrescentar nada
        else if($count == $countContatos){

            for ($i=0; $i < $countContatos; $i++) { 
                DB::table('contatos')->where('id', $contatos[$i]->id)->update(['nome' => $request->moreFields[$i]['nome'], 'valor' => $request->moreFields[$i]['valor']]);
            }
        }
        return redirect('/')->with('msg', 'Contato editado com sucesso!');
    }

    public function destroy($id)
    {
        
        DB::table('contatos')->where('pessoa_id', $id)->delete();
        $pessoa = Pessoa::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'O contato excluído com sucesso!');
    }
}
