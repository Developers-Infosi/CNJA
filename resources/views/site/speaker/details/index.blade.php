@extends('layouts.merge.site')
@section('titulo', 'Detalhes sobre o Speaker')
@section('content')
    <section class="hero-page">
        <img src="/site/img/banner/bn-20.jpg" loading="lazy" alt="" class="image-background-banner">
        <div class="overlay-page _1">
            <div class="contain">
                <div class="text-banner">
                    <div class="texto-conteudo-hero">
                        <h1 class="heading-13 white">{{ $speaker->name }}</h1>
                        <div class="line-blue"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-17 _6000 cinzass">
        <div class="contain">

            <div class="div-block-231">
                <div class="div-block-230">


                    <div id="informationSector">

                        <div id="titleSector">
                            <div class="imgSector">
                                <img src="{{ Storage::url($speaker->photo) }}" class="img-fluid" alt="{{ $speaker->name }}" />
                            </div>

                            <div class="titleSpeaker">
                                  <span>{{ $speaker->name }}</span>
                                  <span>{{ $speaker->function }}</span>
                                  <span>{{ $speaker->company }}</span>
                            </div>

                        </div>

                        <div id="textSector">


                            <div class="description">
                               <p>
                                 {!! html_entity_decode($speaker->description) !!}
                               </p>
                            </div>
                        </div>

                    </div>



                </div>

            </div>
        </div>
    </section>

@endsection
