<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Meta tags for SEO -->
    <meta name="description" content="NV CONCIERGE - NOUVELLE VIE, ANY TASK JUST ASK" />
    <meta name="keywords" content="Concierge, Services, Tijuana, San Diego," />
    <meta name="format-detection" content="telephone=no">
    <title>NV CONCIERGE - NOUVELLE VIE</title>

    <!-- Start of Async Drift Code -->
    <script>
    "use strict";

    !function() {
    var t = window.driftt = window.drift = window.driftt || [];
    if (!t.init) {
        if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
        t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
        t.factory = function(e) {
        return function() {
            var n = Array.prototype.slice.call(arguments);
            return n.unshift(e), t.push(n), t;
        };
        }, t.methods.forEach(function(e) {
        t[e] = t.factory(e);
        }), t.load = function(t) {
        var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
        o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
        var i = document.getElementsByTagName("script")[0];
        i.parentNode.insertBefore(o, i);
        };
    }
    }();
    drift.SNIPPET_VERSION = '0.3.1';
    drift.load('5i3ykgkiawgg');
    </script>
    <!-- End of Async Drift Code -->

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />
    <!-- Website Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- Website Responsive -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
  </head>
  <body>
    <x-website-header />
    <main class="main">
      {{ $slot }}
    </main>
    <x-website-footer />

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/133291f590.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <!-- Main -->
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
