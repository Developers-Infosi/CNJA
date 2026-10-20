@extends('layouts.merge.site')
@section('titulo', 'Detalhes de Transportes')
@section('content')

    <section class="hero-page">
        <img src="/site/img/banner/bn-20.jpg" loading="lazy" alt="" class="image-background-banner">
        <div class="overlay-page _1">
            <div class="contain">
                <div class="text-banner">
                    <div class="texto-conteudo-hero">
                        <h1 class="heading-13 white">Transportes > {{ $laceCar->name }}</h1>
                        <div class="line-blue"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   


    <section class=container>
        <div class="row my-5">
            <div class="col-md-12 col-12">

                <h2 class="mt-5  mb-3"> {{ $laceCar->name }}</h2>

                <p class="text-justify">
                    {!! html_entity_decode($laceCar->description) !!}

                </p>

            </div>


        </div>
    </section>


@endsection
