@extends('layouts.merge.site')
@section('titulo', 'Detalhes do Hotel')
@section('content')

    <section class="hero-page">
        <img src="{{ Storage::url($hostelList->attachment) }}" loading="lazy" alt="" class="image-background-banner">
        <div class="overlay-page _1">
            <div class="contain">
                <div class="text-banner">
                    <div class="texto-conteudo-hero">
                        <h1 class="heading-13 white">{{ $hostelList->hotelname }}</h1>
                        <div class="line-blue"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class=container>
        <div class="row my-5">
            <div class="col-md-12 col-12">

                <h2 class="mt-5  mb-3">{{ $hostelList->hotelname }}</h2>
                @for ($i = 0; $i < $hostelList->stars; $i++)
                    <img src="/site/estrela.png" width="20">
                @endfor
                <p class="text-justify">
                    {!! html_entity_decode($hostelList->description) !!}

                </p>

            </div>



            <div class="row justify-content-center">

                <div class=col-lg-12>
                    <div id="borderDivDiv" class="row mx-n3 grid"
                        data-isotope='{"layoutMode": "masonry", "itemSelector": ".grid-item"}' id=portfolio>
                        @foreach ($hostelListGallarlery->images as $item)
                            <div class="col-lg-4 col-md-6 pb-5">
                                <a class="fancybox" href="{{ Storage::url($item->path) }}" data-fancybox="gallery1">
                                    <div
                                        style='background-image:url("{{ Storage::url($item->path) }}");background-position:center;background-size:cover;height:200px;  border-radius: 5px;'>
                                    </div>
                                </a>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <iframe src="{{ $hostelList->locationMap }}" width="100%" height="450" style="border:0;"
                    allowfullscreen="" loading="lazy" class=" lazy-loaded" data-src="{{ $hostelList->locationMap }}">
                    <noscript>
                        <iframe src="{{ $hostelList->locationMap }}" width="730" height="450" style="border:0;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

@endsection
