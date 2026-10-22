@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Programa & Actividade')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
           <div class="col-md-10">
             <h2 class="h4 page-title">
                <b>
                <a href="{{ route('admin.schedule.index') }}"><u>Listar Programas & Actividades</u></a> >
                {{ $schedule->program }}</b>
            </h2>

           </div>

             <div class="col-md-2 ml-auto">
                <a href="{{ route("admin.schedule.edit", $schedule->id) }}" class="btn btn-sm btn-primary">Editar</a>
             </div>
             </div>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h4 class=" ml-5 page-title"><b>{{ $schedule->theme.": ".$schedule->program }}</b></h4>
                        <div class="row m-5 align-items-center">

                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b class="text-primary">Dia do Evento</b>
                                        </h5>
                                        <p class="text-dark text-justify">{{ $schedule->day }} - Dia</p>

                                    </div>


                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b class="text-primary">Moderador</b>
                                        </h5>
                                        <p class="text-dark text-justify">{!! html_entity_decode($schedule->moderator) !!}</p>

                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b class="text-primary">Oradores</b>
                                        </h5>
                                        <p class="text-dark text-justify">{!! html_entity_decode($schedule->speaker) !!}</p>

                                    </div>

                                    @isset($schedule->start_time)
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b class="text-primary">Horário</b>
                                        </h5>

                                        <p class="text-dark text-justify">{{ $schedule->start_time }}h - {{ $schedule->end_time }}h</p>

                                    </div>
                                    @endisset


                                    @if ($schedule->description)
                                        <div class="col-md-12 mb-2">
                                            <h5 class="mb-1">
                                                <b>Descrição</b>
                                            </h5>
                                            <p class="text-dark text-justify">{!! html_entity_decode($schedule->description) !!}</p>

                                        </div>
                                    @endif





                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-12 mb-2">
                                        <hr>
                                        <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $schedule->created_at }}
                                        </p>
                                        <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $schedule->updated_at }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>


@endsection
