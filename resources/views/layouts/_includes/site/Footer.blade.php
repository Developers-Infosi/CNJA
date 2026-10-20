<div class="footer _1">
    <div class="contain">
        <div class="w-layout-grid grid-6">
            <div id="w-node-a5afc7b8-20e9-5b6a-f082-c37cde0c073a-de0c0737">
                <div class="div-block-15"></div>
                <div>
                    <p class="paragraph-3">
                        Um espaço de diálogo entre a juventude angolana e o Governo para debater desafios,
                        partilhar ideias e construir soluções para o futuro de Angola.
                    </p>
                </div>
            </div>
            <div id="w-node-a5afc7b8-20e9-5b6a-f082-c37cde0c073f-de0c0737" class="_2 _900">
                <h3 class="heading-5 trust">Sobre</h3>

                <a href="{{ route('site.about') }}" class="link-5">Sobre a Conferência</a>
                <a href="{{ route('site.information') }}" class="link-5">Informações Úteis</a>
                <a href="{{ route('site.schedule') }}" class="link-5">Programa</a>
                <a href="{{ route('site.contact') }}" class="link-5">Contactos</a>
                <a href="{{ route('site.policyPrivacy') }}" class="link-5">Politica de Privacidade</a>
            </div>
            <div id="w-node-a5afc7b8-20e9-5b6a-f082-c37cde0c074c-de0c0737" class="_2 _900">
                <h3 class="heading-5 trust">Inscrição</h3>
                <a href="{{ route('site.midia') }}" class="link-5">Imprensa</a>
                <a href="#" class="link-5">Registo de Participantes</a>

            </div>
            <div id="w-node-a5afc7b8-20e9-5b6a-f082-c37cde0c075b-de0c0737" class="_2 _900">
                <h3 class="heading-5 trust">Links uteis </h3>
                <a href="https://governo.gov.ao/" target="_blank" class="link-5">Governo de Angola</a>
                <a href="https://angolahoje.ao/" target="_blank" class="link-5">Angola Hoje</a>
            </div>
        </div>
        <div class="div">
            <div class="div-block-161">
                <div class="div-block-159" style="color:aliceblue;">
                    Local do Evento: <br>
                    Palácio de Convenções de Luanda, Angola.
                </div>

            </div>
        </div>
    </div>
</div>



<section class="master-pub">
    <div class="div-block-135">
        <a href="#" class="link-8" data-ix="fechar-pub">Fechar</a>
    </div>
    <div class="div-block-136"></div>
</section>
<div class="div-block-271">
    <div class="div-block-273">
        <div class="div-block-272"></div>
    </div>
</div>




<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=675f38d2d1a83e76abfde741"
    type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
</script>
<script src="/site/js/webflow.js" type="text/javascript"></script><!--  JS do Slick Slider  -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/marquee3000@1.0.0/marquee3k.min.js"></script>

<script>
    Marquee3k.init();
</script>
<script>
    // Espera o carregamento completo da página
    $(document).ready(function() {
        // Inicialização para o Slider 1
        $('.slider-parceiro').slick({
            infinite: true, // Loop infinito
            slidesToShow: 4, // Exibe 4 slides por vez
            slidesToScroll: 1, // Avança 1 slide por vez
            autoplay: true, // Habilita o autoplay
            autoplaySpeed: 2000, // Intervalo de 2 segundos entre os slides
            arrows: true, // Exibe as setas de navegação
            dots: true, // Exibe os dots de navegação
            responsive: [{
                    breakpoint: 1024, // Para telas de tablets
                    settings: {
                        slidesToShow: 3, // Exibe 3 slides por vez
                        slidesToScroll: 1,
                        arrows: false, // Opcional: desabilita as setas em tablets
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2, // Exibe 2 slides em telas menores
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1, // Exibe 1 slide em telas muito pequenas
                        slidesToScroll: 1,
                    }
                }
            ]
        });
        // Inicialização para o Slider 2
        $('.slider-sponsor').slick({
            infinite: true, // Loop infinito
            slidesToShow: 4, // Exibe 5 slides por vez
            slidesToScroll: 1, // Avança 1 slide por vez
            autoplay: true, // Habilita o autoplay
            autoplaySpeed: 2000, // Intervalo de 2 segundos entre os slides
            arrows: true, // Exibe as setas de navegação
            dots: true, // Exibe os dots de navegação
            responsive: [{
                    breakpoint: 1024, // Para telas de tablets
                    settings: {
                        slidesToShow: 3, // Exibe 3 slides por vez
                        slidesToScroll: 1,
                        arrows: false, // Opcional: desabilita as setas em tablets
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3, // Exibe 3 slides em telas menores
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1, // Exibe 1 slide em telas muito pequenas
                        slidesToScroll: 1,
                    }
                }
            ]
        });
        // Inicialização para o Slider 3
        $('.slider-expositor').slick({
            infinite: true, // Loop infinito
            slidesToShow: 5, // Exibe 5 slides por vez
            slidesToScroll: 1, // Avança 1 slide por vez
            autoplay: true, // Habilita o autoplay
            autoplaySpeed: 2000, // Intervalo de 2 segundos entre os slides
            arrows: true, // Exibe as setas de navegação
            dots: true, // Exibe os dots de navegação
            responsive: [{
                    breakpoint: 1024, // Para telas de tablets
                    settings: {
                        slidesToShow: 3, // Exibe 3 slides por vez
                        slidesToScroll: 1,
                        arrows: false, // Opcional: desabilita as setas em tablets
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3, // Exibe 3 slides em telas menores
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1, // Exibe 1 slide em telas muito pequenas
                        slidesToScroll: 1,
                    }
                }
            ]
        });
        // Inicialização para o Slider 4
        $('.slider-startup').slick({
            infinite: true, // Loop infinito
            slidesToShow: 5, // Exibe 5 slides por vez
            slidesToScroll: 1, // Avança 1 slide por vez
            autoplay: true, // Habilita o autoplay
            autoplaySpeed: 2000, // Intervalo de 2 segundos entre os slides
            arrows: true, // Exibe as setas de navegação
            dots: true, // Exibe os dots de navegação
            responsive: [{
                    breakpoint: 1024, // Para telas de tablets
                    settings: {
                        slidesToShow: 3, // Exibe 3 slides por vez
                        slidesToScroll: 1,
                        arrows: false, // Opcional: desabilita as setas em tablets
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3, // Exibe 3 slides em telas menores
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1, // Exibe 1 slide em telas muito pequenas
                        slidesToScroll: 1,
                    }
                }
            ]
        });
        // Inicialização para o Slider 5
        $('.slider-speaker').slick({
            infinite: true, // Loop infinito
            slidesToShow: 5, // Exibe 5 slides por vez
            slidesToScroll: 1, // Avança 1 slide por vez
            autoplay: true, // Habilita o autoplay
            autoplaySpeed: 2000, // Intervalo de 2 segundos entre os slides
            arrows: true, // Exibe as setas de navegação
            dots: true, // Exibe os dots de navegação
            responsive: [{
                    breakpoint: 1024, // Para telas de tablets
                    settings: {
                        slidesToShow: 3, // Exibe 3 slides por vez
                        slidesToScroll: 1,
                        arrows: false, // Opcional: desabilita as setas em tablets
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3, // Exibe 3 slides em telas menores
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1, // Exibe 1 slide em telas muito pequenas
                        slidesToScroll: 1,
                    }
                }
            ]
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

{{-- Fanycybox --}}
<script src="/site/js/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox]", {

    });
</script>
<script>
    gsap.to(".marquee-content", {
        xPercent: -100,
        repeat: -1,
        duration: 20,
        ease: "linear"
    });
</script>


<script>
    function openTab(evt, tabName) {

        // Esconder todos os conteúdos
        let tabcontent = document.getElementsByClassName("tabcontent");
        for (let i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Remover classe active de todos os botões
        let tablinks = document.getElementsByClassName("tablinks");
        for (let i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove("active");
        }

        // Mostrar o conteúdo selecionado
        document.getElementById(tabName).style.display = "block";

        // Ativar botão clicado
        evt.currentTarget.classList.add("active");
    }

    // Abrir o primeiro tab automaticamente
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector(".tablinks").click();
    });
</script>

<script>
    // Impede que o clique no item pai (só abre o submenu) feche o menu
    document.querySelectorAll('.has-submenu .submenu-toggle').forEach(function(el) {
        el.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
        });
    });
</script>



@yield('JS')

</body>

</html>
