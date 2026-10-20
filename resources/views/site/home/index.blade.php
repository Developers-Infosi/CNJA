@extends('layouts.merge.site')
@section('titulo', 'Oficial')
@section('content')

    <section class="main">
        <div class="background-video w-background-video w-background-video-atom"
            style="background-image:url(/site/img/banner/bg-luanda.png); background-size:cover; background-position:center; background-repeat:no-repeat;">
            <div class="div-block-293">
                <div class="contain">
                    <div class="div-block-182-copy">
                        <div class="div-block-181">
                            <div class="div-block-3 div-block-140">
                                <h1 class="heading white">Conferência Nacional da Juventude Angolana</h1>
                            </div>

                            <div class="div-block-140 white">
                                <div class="text-block-56 _4 white">“Juventude Angolana: Inovar, Transformar e Desenvolver Angola” </div>
                                <div class="div-block-294">
                                    <div class="text-block-102 _1">Palácio de Convenções de Luanda</div>
                                    <div class="text-block-102 _1">
                                        12 e 13 de Novembro de 2026
                                    </div>
                                </div>
                            </div>

                            <div class="div-block-183">
                                <a href="{{ route('site.about') }}" class="button-wellow w-button">Saiba Mais</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="marque-section number">
        <div class="marque-wrapper">
            <div class="div-block-149">
                <div class="div-block-130">
                    <div class="text-block-15">Chefes de Estado e de Governo em exercício e anteriores</div>
                </div>
                <div class="div-block-130">
                    <div class="text-block-15">Líderes políticos e representantes governamentais de alto nível</div>
                </div>
                <div class="div-block-130">
                    <div class="text-block-15">Líderes religiosos e representantes de confissões de fé</div>
                </div>

                 <div class="div-block-130">
                    <div class="text-block-15">
                        Jovens defensores da paz e líderes da causa jovem
                    </div>
                </div>
                 <div class="div-block-130">
                    <div class="text-block-15">
                       Mulheres mediadoras e líderes femininas
                    </div>
                </div>
            </div>
            <div class="div-block-149 _1">
                 <div class="div-block-130">
                    <div class="text-block-15">
                        Organizações da sociedade civil
                    </div>
                </div>
                <div class="div-block-130">
                    <div class="text-block-15">
                        Académicos e investigadores em resolução de conflitos
                    </div>
                </div>
                <div class="div-block-130">
                    <div class="text-block-15">Representantes de nações que alcançaram a paz após períodos de conflito
                        armado</div>
                </div>

                <div class="div-block-130">
                    <div class="text-block-15">Comunidades afectadas por conflitos e deslocamento forçado</div>
                </div>
                <div class="div-block-130">
                    <div class="text-block-15">Meios de comunicação social e formadores de opinião na agenda global pela paz
                    </div>
                </div>
                <div class="div-block-130">
                    <div class="text-block-15">Actores não estatais e redes de diplomacia track II e track III</div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-12">
        <div class="contain">
            <div class="div-block-184">
                <div class="div-block-236 t">
                    <h1 class="heading-13 h">SOBRE O REFORÇO DOS MECANISMOS DE PREVENÇÃO E RESOLUÇÃO DOS CONFLITOS EM ÁFRICA</h1>
                    <p class="paragraph-12 _1">Luanda se destaca como capital nacional, moldada tanto por sua história
                        quanto por seu compromisso de longa data com a construção e a manutenção da paz. Como centro
                        político e institucional de Angola, a cidade reflete uma trajetória nacional mais ampla, da
                        instabilidade do passado à consolidação, resiliência e engajamento constante nos níveis nacional,
                        regional e internacional.</p>

                </div>
                <div class="div-block-238"></div>
            </div>
        </div>
    </section>
    <section class="section-10 _3">
        <div class="contain">
            <div class="div-block-7 _6">
                <h2 class="heading-13 white">Speakers</h2>
                <div class="line-blue"></div>
            </div>
            <div class="w-layout-grid grid-27">

                @foreach ($speakers as $row)
                    <a href="{!! url('/speaker/' . urlencode($row->name)) !!}" class="card-slide _3 w-inline-block">
                        <div class="participante speaker"><img sizes="(max-width: 667px) 100vw, 667px"
                                srcset="{{ Storage::url($row->photo) }} 500w, {{ Storage::url($row->photo) }} 667w" alt=""
                                src="{{ Storage::url($row->photo) }}" loading="lazy" class="foto-1 _3">
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

            <div id="buttonSeeMore">
                <a href="{{ route('site.speaker') }}" class="button-wellow">Ver Mais</a>
            </div>
        </div>
    </section>




    <section class="section-34">

        <div class="contain">
            <div class="div-block-312">
                <div class="div-block-7 _6 middle">
                    <h2 class="heading-13">Entidade Organizadora</h2>
                    <div class="line-blue"></div>
                </div>

                <div class="div-block-178">

                    <a href="https://governo.gov.ao" class="crap w-inline-block">
                        <img src="/site/img/logo/logo_governo.png" loading="lazy" width="58"
                            alt="logo governo de Angola" class="image-18">
                    </a>
                </div>
            </div>

        </div>





    </section>
    <div class="code-embed-3 w-embed w-iframe"><iframe width="100%" height="500"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4851.365614058603!2d13.209633984624745!3d-8.814497073557433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f300215a66bf%3A0xd1d48ef9e7df9acc!2sCentro%20de%20Confer%C3%AAncias%20da%20Ingombota!5e1!3m2!1spt-PT!2sao!4v1787127974118!5m2!1spt-PT!2sao"
            style="border: 1px solid black"></iframe><br></div>




@endsection
