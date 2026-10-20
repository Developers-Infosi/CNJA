@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Hospitais')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <div class="row align-items-center">

                <div class="col-12 col-lg-10 col-md-10 col-sm-12">
                    <h2 class="h5 page-title">
                        <b>Lista de Hospitais</b>
                    </h2>
                </div>

                <div class="col-12 col-lg-2 col-md-10 col-sm-12">
                    <a href="{{ route("admin.hospital.create") }}" class="btn btn-sm btn-primary">Cadastrar Hospital</a>
                </div>

            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary thead-dark">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Nome do Hospital</th>

                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($hospitais as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>
                            <td>
                                {!! html_entity_decode($item->hospitalName) !!}

                            </td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href='{{ url("admin/hospital/show/{$item->id}") }}'
                                            class="dropdown-item">Detalhes</a>

                                        <a href='{{ url("admin/hospital/edit/{$item->id}") }}'
                                            class="dropdown-item">Editar</a>


                                        <a href='{{ url("admin/hospital/delete/{$item->id}") }}' class="dropdown-item">
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
