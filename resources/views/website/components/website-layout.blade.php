<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Meta tags for SEO -->
    <meta name="description" content="NV CONCIERGE - NOUVELLE VIE, ANY TASK JUST ASK" />
    <meta name="keywords" content="Concierge, Services, Tijuana, San Diego," />
    <title>NV CONCIERGE - NOUVELLE VIE</title>

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
