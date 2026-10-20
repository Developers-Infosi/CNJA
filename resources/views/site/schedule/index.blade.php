@extends('layouts.merge.site')
@section('titulo', 'Programa do Evento')
@section('content')
    <section class="hero-page">
        <img src="/site/img/banner/bn-20.jpg" loading="lazy" alt="" class="image-background-banner">
        <div class="overlay-page _1">
            <div class="contain">
                <div class="text-banner">
                    <div class="texto-conteudo-hero">
                        <h1 class="heading-13 white">Programa do Evento</h1>
                        <div class="line-blue"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="informa-o _1 _2">
        <div class="contain">


            <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="tabs _2 w-tabs">
                <div class="tabs-menu-2 _1 _3 w-tab-menu" role="tablist">
                    <a data-w-tab="Tab 1" class="tab-programa w-inline-block w-tab-link w--current" id="w-tabs-0-data-w-tab-0" href="#w-tabs-0-data-w-pane-0" role="tab" aria-controls="w-tabs-0-data-w-pane-0" aria-selected="false" tabindex="-1">
                        <div>1º DIA</div>
                    </a>
                    <a data-w-tab="Tab 2" class="tab-programa w-inline-block w-tab-link" id="w-tabs-0-data-w-tab-1" href="#w-tabs-0-data-w-pane-1" role="tab" aria-controls="w-tabs-0-data-w-pane-1" aria-selected="false" tabindex="-1">
                        <div>2º DIA</div>
                    </a>

                </div>



                 <div class="tabs-content w-tab-content">
                    <div data-w-tab="Tab 1" class="tab-pane-tab-1 w-tab-pane" id="w-tabs-0-data-w-pane-0" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-0" style="">
                        <section class="section-17 b">
                            <div class="contain">



                                <div class="projectos-business">

                                    @foreach($schedulesI as $schedule)


                                    <div id="schedule">

                                                <div class="schedule-inside">
                                                    <div id="timeSection">

                                                        <span>{{ $schedule->start_time }} - {{ $schedule->end_time }}</span>
                                                        <span>Local: {{ $schedule->room }}</span>

                                                    </div>

                                                    <div id="contentSection">

                                                        <div id="programSection">
                                                            <span>{{ $schedule->program }}</span>
                                                        </div>



                                                            <div id="moderatorSection">
                                                                    <span>{{ $schedule->theme }}</span>
                                                                    <p>{!! html_entity_decode($schedule->moderator) !!}</p>
                                                                    <p>{!! html_entity_decode($schedule->speaker) !!}</p>
                                                            </div>

                                                             @if($schedule->logo)
                                                            <div id="imageSection">


                                                                    <img src="{{ Storage::url($schedule->logo) }}" class="img-fluid" />


                                                            </div>
                                                            @endif


                                                    </div>
                                                </div>

                                    </div>


                                    @endforeach



                                </div>


                                <div class="div-block-265">
                                    <div class="div-block-213 _2">
                                        <div class="div-block-211 _1">
                                            <div class="div-block-212 b">
                                                <div class="text-block-71">DIA</div>
                                            </div>
                                            <div class="div-block-212 b">
                                                <div class="text-block-71">Horários</div>
                                            </div>
                                            <div class="div-block-212 b">
                                                <div class="text-block-71">Projectos</div>
                                            </div>
                                            <div class="div-block-212 b">
                                                <div class="text-block-71">Local</div>
                                            </div>
                                        </div>
                                        <div class="div-block-214 _1">
                                            <div class="div-block-215 b">
                                                <div class="text-block-72">10 de Julho</div>
                                            </div>
                                            <div class="div-block-215 b">
                                                <div class="text-block-72">10:00 - 10:30</div>
                                            </div>
                                            <div class="div-block-215 b">
                                                <div class="text-block-72">Projecto # 01</div>
                                            </div>
                                            <div class="div-block-215 b"></div>
                                        </div>
                                        <div class="div-block-214 _1">
                                            <div class="div-block-215 b"></div>
                                            <div class="div-block-215 b">
                                                <div class="text-block-72">10:00 - 10:30</div>
                                            </div>
                                            <div class="div-block-215 b">
                                                <div class="text-block-72">Projecto # 01</div>
                                            </div>
                                            <div class="div-block-215"></div>
                                        </div>
                                        <div class="div-block-214 _1">
                                            <div class="div-block-215"></div>
                                            <div class="div-block-215">
                                                <div class="text-block-72">10:00 - 10:30</div>
                                            </div>
                                            <div class="div-block-215">
                                                <div class="text-block-72">Projecto # 01</div>
                                            </div>
                                            <div class="div-block-215"></div>
                                        </div>
                                        <div class="div-block-214 _1">
                                            <div class="div-block-215"></div>
                                            <div class="div-block-215">
                                                <div class="text-block-72">10:00 - 10:30</div>
                                            </div>
                                            <div class="div-block-215">
                                                <div class="text-block-72">Projecto # 01</div>
                                            </div>
                                            <div class="div-block-215"></div>
                                        </div>
                                        <div class="div-block-214 _1">
                                            <div class="div-block-215"></div>
                                            <div class="div-block-215">
                                                <div class="text-block-72">10:00 - 10:30</div>
                                            </div>
                                            <div class="div-block-215">
                                                <div class="text-block-72">Projecto # 01</div>
                                            </div>
                                            <div class="div-block-215">
                                                <div class="text-block-72">HCTA - Sala Talatona</div>
                                            </div>
                                        </div>
                                        <div class="div-block-214 _1">
                                            <div class="div-block-215"></div>
                                            <div class="div-block-215">
                                                <div class="text-block-72">10:00 - 10:30</div>
                                            </div>
                                            <div class="div-block-215">
                                                <div class="text-block-72">Projecto # 01</div>
                                            </div>
                                            <div class="div-block-215"></div>
                                        </div>
                                        <div class="div-block-214 _1">
                                            <div class="div-block-215"></div>
                                            <div class="div-block-215">
                                                <div class="text-block-72">10:00 - 10:30</div>
                                            </div>
                                            <div class="div-block-215">
                                                <div class="text-block-72">Projecto # 01</div>
                                            </div>
                                            <div class="div-block-215"></div>
                                        </div>
                                        <div class="div-block-214 _1">
                                            <div class="div-block-215"></div>
                                            <div class="div-block-215">
                                                <div class="text-block-72">10:00 - 10:30</div>
                                            </div>
                                            <div class="div-block-215">
                                                <div class="text-block-72">Projecto # 01</div>
                                            </div>
                                            <div class="div-block-215"></div>
                                        </div>
                                        <div class="div-block-214 _1">
                                            <div class="div-block-215"></div>
                                            <div class="div-block-215">
                                                <div class="text-block-72">10:00 - 10:30</div>
                                            </div>
                                            <div class="div-block-215">
                                                <div class="text-block-72">Projecto # 01</div>
                                            </div>
                                            <div class="div-block-215"></div>
                                        </div>
                                        <div class="div-block-214 _1">
                                            <div class="div-block-215"></div>
                                            <div class="div-block-215">
                                                <div class="text-block-72">10:00 - 10:30</div>
                                            </div>
                                            <div class="div-block-215">
                                                <div class="text-block-72">Projecto # 01</div>
                                            </div>
                                            <div class="div-block-215"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>


                    <div data-w-tab="Tab 2" class="tab-pane-tab-1 w-tab-pane" id="w-tabs-0-data-w-pane-1" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-1" style="">
                        <section class="section-17 b">
                            <div class="contain">


                                <div class="projectos-business">

                                    @foreach($schedulesII as $schedule)

                                    <div id="schedule">

                                                <div class="schedule-inside">
                                                    <div id="timeSection">

                                                        <span>{{ $schedule->start_time }} - {{ $schedule->end_time }}</span>
                                                        <span>Local: {{ $schedule->room }}</span>

                                                    </div>

                                                    <div id="contentSection">

                                                        <div id="programSection">
                                                            <span>{{ $schedule->program }}</span>
                                                        </div>



                                                            <div id="moderatorSection">
                                                                    <span>{{ $schedule->theme }}</span>
                                                                    <p>{!! html_entity_decode($schedule->moderator) !!}</p>
                                                                    <p>{!! html_entity_decode($schedule->speaker) !!}</p>
                                                            </div>

                                                             @if($schedule->logo)
                                                            <div id="imageSection">


                                                                <img src="{{ Storage::url($schedule->logo) }}" class="img-fluid" />


                                                            </div>
                                                            @endif


                                                    </div>
                                                </div>

                                    </div>
                                    @endforeach



                                </div>

                            </div>
                        </section>
                    </div>


                </div>
            </div>
        </div>
    </section>






@endsection


