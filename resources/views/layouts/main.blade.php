<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>@yield('title','Лабораторія Limaria')</title>
    <meta name="description" content="@yield('description', 'Дослідницька лабораторія Limaria – провідний центр у сфері медичних, харчових та ветеринарних досліджень. Точні аналізи, сучасне обладнання та висококваліфіковані фахівці. Надійність і якість, яким довіряють клієнти.')">

      {{--    <meta name="description" content="Дослідницька лабораторія Limaria – провідний центр у сфері медичних, харчових та ветеринарних досліджень. Точні аналізи, сучасне обладнання та висококваліфіковані фахівці. Надійність і якість, яким довіряють клієнти.">--}}
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="robots" content="index,follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('images/favicon-96x96.png')}}" type="image/x-icon" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="{{asset('images/favicon.svg')}}" />
    <link rel="shortcut icon" href="{{asset('images/favicon.svg')}}" />
    <meta name="apple-mobile-web-app-title" content="Limaria" />
    <link rel="manifest" href="{{asset('images/site.webmanifest')}}" />

    <link rel="canonical" href="https://limaria.com.ua/" />
    <!-- Stylesheets-->
      <script type="application/ld+json">
          {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Лабораторія «Лімарія»",
            "image": "https://limaria.com.ua/images/LIMARIA.png",
            "telephone": "+380751020039",
            "email": "info@limaria.com.ua",
            "address": {
              "@type": "PostalAddress",
              "streetAddress": "Київська область, Вишгородський район, Лютіж, вул. Вітряного 64",
              "postalCode": "07352"
            },
            "url": "https://limaria.com.ua/"
          }
      </script>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,700,800%7COswald:300,400,500">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    @stack('styles')
  </head>
  <body>
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="{{asset('images/ie8-panel/warning_bar_0000_us.webp')}}" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>

  <div class="page">
        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            @include("partials.navbar")

        </header>
        @yield("content")
        @include("partials.footer")
    </div>

  <div class="preloader">
      <div class="preloader-logo"><img src="{{asset('images/logo-default-358x102.webp')}}" alt="" width="179" height="51"/>
      </div>
      <div class="preloader-body">
          <div id="loadingProgressG">
              <div class="loadingProgressG" id="loadingProgressG_1"></div>
          </div>
      </div>
  </div>

  <!-- Global Mail form Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" ></script>
  <script src="{{asset('js/core.min.js')}}" ></script>
  <script src="{{asset('js/script.js')}}" async ></script>
  @stack('scripts')
  </body>
</html>
