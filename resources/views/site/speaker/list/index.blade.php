@extends('layouts.merge.site')
@section('titulo', 'Speakers')
@section('content')


    <section class="section-10 _3" style="margin-top:100px!important;">
        <div class="contain">
            <div class="div-block-7 _6">
                <h2 class="heading-13 white">Speakers</h2>
                <div class="line-blue"></div>
            </div>
             <div class="w-layout-grid grid-27">

                @foreach ($speakers as $row)
                    <a href="{!! url("/speaker/".urlencode($row->name)) !!}" class="card-slide _3 w-inline-block">
                        <div class="participante speaker"><img sizes="(max-width: 667px) 100vw, 667px"
                                srcset="{{ Storage::url($row->photo) }} 500w, {{ Storage::url($row->photo) }} 667w"
                                alt="" src="{{ Storage::url($row->photo) }}" loading="lazy" class="foto-1 _3">
                        </div>
                        <div class="nome-speakers">{{ $row->name }}</div>
                        <div>
                            <div class="fun-o">
                                {{ $row->function }} <br>
                                <strong>{!! html_entity_decode($row->company) !!}</strong>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>



        </div>
    </section>

@endsection
