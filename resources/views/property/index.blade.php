@extends('property.master')

    @section('content')
        
    <div class="container my-5">
        
        <h1>Listagem de Usuários</h1>
        <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class='bg-primary text-white'>
                <tr>
                    
                    <th> Nome</th>
                    <th> Sobrenome  </th>
                    <th> Email </th>
                    <th> Data Nascimento</th>
                    <th> CEP </th>
                    <th> Rua </th>
                    <th> Número </th>
                    <th> Cidade </th>
                    <th> Estado </th>
                    <th> Telefones </th>
                    <th>Ações</th>

                </tr>
            </thead>
            <tbody>
                 @foreach($usuarios as $user)

                  <tr>
                      
                      <td> {{$user->nome}} </td>
                      <td> {{$user->sobrenome}} </td>
                      <td> {{$user->email}} </td>
                      <td> {{$user->dt_nascimento}} </td>
                      <td> {{$user->cep}} </td>
                      <td> {{$user->rua}} </td>
                      <td> {{$user->numero}} </td>
                      <td> {{$user->cidade}} </td>
                      <td> {{$user->estado}} </td>
                      <td>{{$user->telefone}}</td>
                      
                      <td>

                        <div class="container ">
                            <a href="{{ url('/usuarios/' . $user->id) }}" class="text-primary">Ver Mais</a>
                        </div>

                        <div class="container">
                            <a href="{{ url('/usuarios/editar/' . $user->id) }}" class="text-success">Editar</a>
                        </div>

                        <div class="container">
                            <a href="{{ url('/usuarios/remover/' . $user->id) }}" class="text-danger">Excluir</a>
                        </div>

                      </td>
                  </tr>
                 @endforeach
           </tbody>
        </table>
        </div>
    </div>
@endsection
