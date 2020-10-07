{{-- Extender o layout principal --}}
@extends('site.layouts.principal')

{{-- Section para o titulo --}}
@section('titulo','Cliente')

{{-- Section para a acao --}}
@section('acao', 'Listar')

{{-- Section Principal --}}
@section('conteudo-principal') {{-- Tem que colocar o nome do yeild onde quero jogar o conteudo  --}}


<table class="table table-hover">



        <div class="form-group  ">
          <input type="password" class="form-control" id="" placeholder="Cpf">
        </div>
        <button type="submit" class="btn btn-primary">buscar</button>


    <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Cpf</th>
                <th scope="col">Nome</th>
                <th scope="col">Cep</th>
                <th scope="col">Opções</th>                
              </tr>

            </thead>
            <tbody>
                @forelse ($lista as $lista)
                <tr>
                  <td>{{$lista->cpf}}</td>
                  <td>{{$lista->nome}}</td>
                  <td>{{$lista->cep}}</td>                  
                  <td class="right align">Excluir  Remover</td>
                </tr>            
                @empty
                  <tr>
                    <td colspan="2">Não Existem Cadastros</td>
                  </tr>
                    
                @endforelse($lista as $lista)
                      
            </tbody>
            
        </table>

        @if (session('sucesso'))
          <div>
              {{session('sucesso')}}
          </div>
           
       @endif

        <div class="span3">          
           
        <a href="{{route('site.cliente')}}" class="btn btn-primary btn-lg btn-block">Cadastrar</a> <hr/>
            
       </div>

       
        
        
    </div>
    

</table>
@endsection
