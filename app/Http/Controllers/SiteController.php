<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Http\Requests\SiteRequest;
use App\Models\Cadastro;


class SiteController extends Controller
{
    
    public function cliente()
    {
        
        return view('site.visual.cliente');
    }

    public function listar()
    {
        $lista = Cadastro::all();        

        return view('site.visual.listar', compact('lista'));
    }

    public function contato()
    {
        return view('site.visual.contato');
    }

    public function adicionar(SiteRequest $request)
    {
        //Pegando o dado enviado pelo form
        //$nome = $request->input('nome'); 
        //$cpf = $request->input('cpf');
        //$cep = $request->input('cep'); 
        
        //Criar um objeto do modelo (classe) cliente

        //$cadastro = new Cadastro();
        //$cadastro->nome= $request->nome;
        //$cadastro->cpf= $request->cpf;
        //$cadastro->cep= $request->cep;

        //$cadastro->save(); //Salvar no BD

        //Criar um objeto do modelo (classe) Cidade
        Cadastro::create($request->all());

        $request->session()->flash('sucesso', "Cliente Cadastrado com Sucesso");

        return redirect()->route('site.listar');
    }

}
