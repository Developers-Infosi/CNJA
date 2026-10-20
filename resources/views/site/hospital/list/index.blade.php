@extends('layouts.merge.site')
@section('titulo', 'Hospitais')
@section('content')

    <section class="hero-page">
        <img src="/site/img/banner/hospital.jpg" loading="lazy" alt="" class="image-background-banner">
        <div class="overlay-page _1">
            <div class="contain">
                <div class="text-banner">
                    <div class="texto-conteudo-hero">
                        <h1 class="heading-13 white">Hospitais</h1>
                        <div class="line-blue"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class=container>
        <div class="row ">
            <div class="col-md-12 col-12">
                <p class="text-justify mt-5">
                    {!! html_entity_decode($hospitalDocument->body) !!}
                </p>
            </div>
        </div>

        <div class="row">

            @foreach ($Hospitais as $item)
                <div id="cardHotel" class="my-5 col-lg-4 col-sm-12 col-md-6">

                    <a href="{!! url('/hospitais/' . urlencode($item->hospitalName)) !!}">
                        <img src="{{ Storage::url($item->attachment) }}" class="img-fluid shadow rounded">
                    </a>


                    <div class="information-session  bg-white shadow rounded p-3 ">
                        <a href="{!! url('/hospitais/' . urlencode($item->hospitalName)) !!}">
                            <h6 class="">{{ $item->hospitalName }}</h6>
                        </a>

                    </div>

                </div>
            @endforeach


        </div>

    </section>

    </main>
@endsection
