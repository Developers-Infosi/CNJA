@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastrar Programa & Actividade')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h4 page-title">
                <b> <u> <a href="{{ route('admin.schedule.index') }}">Listar Programas  & Actividades</a></u> > Cadastrar Programa & Actividade</b>
            </h2>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.schedule.store') }}" method="POST" class="row" enctype="multipart/form-data">
                @csrf
                @include('forms._formSchedule.index')
                <div class="col-md-12">
                    <div class="form-group text-center">
                        <button type="submit" class="btn px-5 col-md-4 btn-success">
                            Salvar
                            <span class="fe fe-chevron-right fe-16"></span>
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>



@endsection
