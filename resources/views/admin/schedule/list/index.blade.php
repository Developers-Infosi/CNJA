@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Programas & Actividades')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
           <div class="row">
               <div class="col-12 col-lg-10 col-md-10">
                   <h2 class="h4 page-title">
                       <b> Lista de Programas & Actividades</b>
                   </h2>
               </div>

               <div class="col-12 col-lg-2 col-md-2">
                    <a class="btn btn-sm btn-primary" href="{{ route('admin.schedule.create') }}"><i class="fa fa-pencil text-white" aria-hidden="true"></i>Cadastrar Programa</a>
               </div>
           </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body table-responsive">
            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary thead-dark">
                    <tr class="text-center">
                        <th>#</th>
                        <th>TEMA</th>
                        <th>PROGRAMA</th>

                        <th>DIA</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($schedules as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>

                            <td>{{ $item->theme }} </td>
                            <td>{{ $item->program }} </td>

                            <td>{{ $item->day }} </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href='{{ url("admin/schedule/show/{$item->id}") }}'
                                            class="dropdown-item">Detalhes</a>

                                        <a href='{{ url("admin/schedule/edit/{$item->id}") }}'
                                            class="dropdown-item">Editar</a>


                                        <a href='{{ url("admin/schedule/delete/{$item->id}") }}' class="dropdown-item">
                                            Eliminar
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection
