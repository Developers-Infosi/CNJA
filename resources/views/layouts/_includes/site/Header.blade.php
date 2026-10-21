<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-wf-page="680f7f27ef28818d06c1299e"
    data-wf-site="675f38d2d1a83e76abfde741">

<head>
    <title>@yield('titulo') - Conferência Nacional da Juventude Angolana </title>
    <meta charset="UTF-8" />


    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! RecaptchaV3::initJs() !!}



    <meta content="Conferência Nacional da Juventude Angolana " name="description">
    <meta content="Conferência Nacional da Juventude Angolana " property="og:title">
    <meta content="Conferência Nacional da Juventude Angolana " property="og:description">
    <meta content="Conferência Nacional da Juventude Angolana " property="twitter:title">
    <meta content="Conferência Nacional da Juventude Angolana " property="twitter:description">

    <meta property="og:type" content="website">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="/site/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="/site/css/webflow.css" rel="stylesheet" type="text/css">
    <link href="/site/css/angotic.webflow.css" rel="stylesheet" type="text/css">
    <link href="/site/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: [
                    "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic",
                    "Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic",
                    "Roboto:100,300,regular,500,700,900", "Outfit:100,200,300,regular,500,600,700,800,900",
                    "Barlow:200,300,regular,500,600,700,800,900"
                ]
            }
        });
    </script>
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);
    </script>

    {{-- Sweetalert --}}
    <script src="/js/sweetalert2.all.min.js"></script>

    <link rel="icon" type="image/png" href="/site/img/logo/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/site/img/logo/favicon.svg" />
    <link rel="shortcut icon" href="/site/img/logo/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/site/img/logo/apple-touch-icon.png" />
    <link rel="manifest" href="/site/img/logo/site.webmanifest" />



    <!--  CSS do Slick Slider  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <!--CSS do Fancybox-->
    <link rel="stylesheet" href="/site/css/fancybox.css" />
    <style>
        .gt_container--hich1m .gt_switcher {
            font-family: Arial;
            font-size: 12pt;
            text-align: left;
            cursor: pointer;
            overflow: hidden;
            width: 143px;
            line-height: 0;
        }

        .gt_float_switcher.notranslate {
            font-size: 15px;
            box-shadow: rgb(0 0 0 / 0%) 0 5px 15px;
        }

        .gt-current-lang {
            font-weight: 500;
        }

        .gt_float_switcher img {
            vertical-align: middle;
            display: inline-block;
            width: 22px;
            height: auto;
            margin: 0 5px 0 0;
            border-radius: 0px;
        }

        .gt_float_switcher {
            font-family: Arial;
            font-size: 15px;
            border-radius: 2px;
            color: #555;
            display: inline-block;
            line-height: 20px;
            box-shadow: rgba(0, 0, 0, 0.15) 0 5px 15px;
            background: #fff;
            overflow: hidden;
            transition: all .5s cubic-bezier(0.4, 0, 1, 1);
        }

        .gt_container--hich1m .gt_switcher .gt_selected {
            background: #fff linear-gradient(180deg, #efefef21 0%, #ffffff94 70%);
            position: relative;
            z-index: 9999;
        }

        .gt_container--hich1m .gt_switcher .gt_selected a {
            border: 1px solid #eee;
            color: #666;
            padding: 3px 5px;
            width: 161px;
            border-radius: 4px;
        }

        .slick-dots li button:before {
            font-family: 'slick';
            font-size: 9px;
            line-height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 20px;
            height: 20px;
            content: '•';
            text-align: center;
            opacity: .25;
            color: black;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .alert {
            padding: 15px;
            border: 1px solid red;
            background-color: #f8d7da;
            color: #721c24;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        input,
        select,
        textarea {
            font-size: 16px !important;
        }



        input:hover,
        select:hover,
        textarea:hover {
            border-bottom: 4px solid #603E89 !important;
        }

        input::placeholder,
        select::placeholder,
        textarea::placeholder {
            font-size: 12px !important;
            color: rgb(147, 146, 150) !important;
        }

        /* ===================== SUBMENU DESKTOP (topo, hover) ===================== */
        .has-submenu {
            position: relative;
        }

        .has-submenu .submenu-toggle {
            cursor: pointer;
        }

        .has-submenu .submenu {
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 220px;
            background: #fff;
            box-shadow: 0 8px 24px rgba(0, 0, 0, .12);
            border-radius: 8px;
            padding: 8px 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(8px);
            transition: opacity .2s ease, transform .2s ease, visibility .2s;
            z-index: 1000;
        }

        .has-submenu:hover .submenu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .has-submenu .submenu-link {
            display: block;
            padding: 11px 20px;
            white-space: nowrap;
            color: #17365d;
            text-decoration: none;
            font-weight: 500;
        }

        .has-submenu .submenu-link:hover {
            background: #f2f6fb;
        }

        /* ===================== SUBMENU MOBILE (hamburguer, sempre visível) ===================== */
        .submenu-parent-mobile {
            display: block;
            color: inherit;
            text-decoration: none;
        }

        /* filhos sempre visíveis — sem abrir/fechar */
        .submenu-mobile {
            display: block;
        }

        .submenu-link-mobile {
            display: block;
            padding: 8px 0 8px 18px;
            color: #17365d;
            text-decoration: none;
        }

        .submenu-link-mobile:hover {
            color: #0d203a;
        }
    </style>



    {{-- Modal SUCCESS --}}
    <link rel="stylesheet" type="text/css" href="/site/modal/style.css">


    @yield('CSS')


</head>


<body data-w-id="65dfdbad0e8ca8327518361c">
