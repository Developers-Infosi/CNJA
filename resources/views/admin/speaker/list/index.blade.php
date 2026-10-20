@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Speakers')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <div class="row justify-content-between">
                <div class="col-12 col-md-10 col-lg-10">
                    <h2 class="h4 page-title">
                        <b>Lista de Speakers</b>
                    </h2>
                </div>

                <div class="col-12 col-md-2 col-lg-2">
                    <a href="{{ route('admin.speaker.create')  }}" class="btn btn-sm btn-primary"> <i class="fa fa-pencil text-white" aria-hidden="true"></i> Cadastrar Orador</a>
                </div>

            </div>
        </div>
    </div>



    <div class="card-body card table-responsive">
        <table class="table datatables table-hover table-bordered table-striped" id="dataTable-2">
            <thead class="bg-primary thead-dark">
            <tr class="text-center">
                <th>#</th>

                <th>NOME</th>
                <th>FUNÇÃO</th>
                <th>ORG.</th>

                <th>ACÇÕES</th>
            </tr>
            </thead>
            <tbody class="bg-white">

            @foreach ($speakers as $item)
                <tr class="text-center text-dark">
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->function }} </td>
                    <td>{{ $item->company }}</td>

                    <td>
                        <div class="dropdown">
                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                <a href='{{ route('admin.speaker.show', $item->id) }}'
                                   class="dropdown-item">Detalhes</a>

                                <a href='{{ route('admin.speaker.edit', $item->id) }}'
                                   class="dropdown-item">Editar</a>

                                <a href='{{ route('admin.speaker.delete', $item->id) }}'
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

@section('JS')
    <script>
        $('#dataTable-2').DataTable({
            autoWidth: true,
            "lengthMenu": [
                [8, 16, 32, -1],
                [8, 16, 32, "All"]
            ],
            "order": [
                [0, 'desc']
            ]
        });
    </script>
@endsection
