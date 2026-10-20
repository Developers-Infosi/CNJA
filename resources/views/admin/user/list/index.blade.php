@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Utilizadores')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
           <div class="row">
            <div class="col">
                <h2 class="h4 page-title">
                   <b> Lista de Utilizadores</b>
                </h2>
            </div>

            <div class="col text-right">
              @if (Auth::User()->level === "Administrador")
              <a href="{{ route('register') }}" class="btn btn-sm btn-primary"> <i class="fa fa-pencil text-white" aria-hidden="true"></i> Cadastrar Utilizador</a>
              @endif
            </div>
           </div>
        </div>
    </div>



    <div class="card-body card table-responsive mb-5">
        <table class="table datatables table-hover table-bordered table-striped" id="dataTable-1">
            <thead class="bg-primary thead-dark">
            <tr class="text-center">
                <th>#</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>DATA DE CRIAÇÃO</th>
                <th>NIVEL DE ACESSO</th>
                <th>ACÇÕES</th>
            </tr>
            </thead>
            <tbody class="bg-white">

            @foreach ($users as $item)
                <tr class="text-center text-dark">
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }} </td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->level }}</td>


                    <td>
                        <div class="dropdown">
                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href='{{ url("admin/user/show/{$item->id}") }}'
                                   class="dropdown-item">Detalhes</a>
                                <a href='{{ url("admin/user/edit/{$item->id}") }}'
                                   class="dropdown-item">Editar</a>
                                <a href='{{ url("admin/user/delete/{$item->id}") }}'
                                   class="dropdown-item">Eliminar</a>


                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>




@endsection
