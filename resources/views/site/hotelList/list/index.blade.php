@extends('layouts.merge.site')
@section('titulo', 'Hotéis')
@section('content')

    <section class="hero-page">
        <img src="/site/img/banner/hic.png" loading="lazy" alt="" class="image-background-banner">
        <div class="overlay-page _1">
            <div class="contain">
                <div class="text-banner">
                    <div class="texto-conteudo-hero">
                        <h1 class="heading-13 white">Hotéis</h1>
                        <div class="line-blue"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="container">

        <div class="row my-5">



            @foreach ($hotelLists as $item)
                <div id="cardHotel" class="my-5 col-lg-4 col-sm-12 col-md-6">

                    <a href="{!! url('/hoteis/' . urlencode($item->hotelname)) !!}">
                        <img src="{{ Storage::url($item->attachment) }}" class="img-fluid shadow rounded">
                    </a>


                    <div class="information-session  bg-white shadow rounded p-3 ">
                        <a href="{!! url('/hoteis/' . urlencode($item->hotelname)) !!}">
                            <h6 class="">{{ $item->hotelname }}</h6>
                        </a>

                        @for ($i = 0; $i < $item->stars; $i++)
                            <img src="/site/estrela.png" width="20">
                        @endfor
                    </div>

                </div>
            @endforeach


            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-4 py-5 ">
                        <ul class="pagination">
                            {{ $hotelLists->links() }}
                        </ul>

                    </div>
                </div>
            </div>



        </div>

    </section>


@endsection
