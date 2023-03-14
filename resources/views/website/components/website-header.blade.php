<!-- Header -->
<header class="website__header fixed">
      <div class="container d-flex align-items-start align-items-md-center justify-content-start justify-content-md-between">
        <!-- Logo -->
        <div>
          <a href="{{ route('home') }}" class="website__header__logo">
            <img src="{{ asset('img/nv_concierge_logo.svg') }}" alt="NV CONCIERGE" />
          </a>
          <p class="website__header__logo__slogan">
            <b>
              {{ __('website.slogan') }}
            </b>
          </p>
        </div>

        <!-- Menu -->
        <div>
          <div class="website__header__lang d-none d-md-flex">
            @if(app()->getLocale() == 'es')
            <a href="{{ route('website.language', 'en') }}"
              class="d-flex align-items-center ms-auto">
              <i class="fas fa-globe me-2"></i>
              <span>Translate to English</span>
            </a>
            @else
            <a href="{{ route('website.language', 'es') }}"
              class="d-flex align-items-center ms-auto">
              <i class="fas fa-globe me-2"></i>
              <span>Traducir al español</span>
            </a>
            @endif
          </div>
          <div class="align-items-center d-none d-md-flex">
            <nav class="website__nav">
              <a href="{{ route('home') }}">
                {{ __('website.header.home') }}
              </a>
              <a href="{{ route('about') }}">
                {{ __('website.header.about') }}
              </a>
              <a href="{{ route('services') }}">
                {{ __('website.header.services') }}
              </a>
              <a href="{{ route('testimonials') }}">
                {{ __('website.header.testimonials') }}
              </a>
              <a href="{{ route('contact') }}">
                {{ __('website.header.contact') }}
              </a>
            </nav>
            <nav class="website__social__icons">
              <a href="http://facebook.com/nvconciergeservices" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="http://instagram.com/nv_concierge_services" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="http://tiktok.com/@nvconciergeservices" target="_blank">
                <i class="fab fa-tiktok"></i>
              </a>
            </nav>
          </div>
        </div>

        <div class="d-block d-md-none translate_icon ms-auto">
          @if(app()->getLocale() == 'es')
          <a href="{{ route('website.language', 'en') }}">
            <i class="fas fa-globe"></i>
          </a>
          @else
          <a href="{{ route('website.language', 'es') }}">
            <i class="fas fa-globe"></i>
          </a>
          @endif
        </div>

        <!-- Mobile Menu -->
        <div class="d-block d-md-none mobile__menu">
          <a href="#" class="mobile_menu_bars">
            <i class="fas fa-bars"></i>
          </a>

          <div class="mobile__menu__container">
            <div class="mobile__menu__header">
              <a href="#" class="website__header__logo">
                <img src="{{ asset('img/nv_concierge_logo_white.svg') }}" alt="NV CONCIERGE" />
              </a>
              <a href="#" class="mobile_menu_close">
                <i class="fas fa-times"></i>
              </a>
            </div>
            <nav class="mobile__menu__nav">
              <a href="{{ route('home') }}">
                {{ __('website.header.home') }}
              </a>
              <a href="{{ route('about') }}">
                {{ __('website.header.about') }}
              </a>
              <a href="{{ route('services') }}">
                {{ __('website.header.services') }}
              </a>
              <a href="{{ route('testimonials') }}">
                {{ __('website.header.testimonials') }}
              </a>
              <a href="{{ route('contact') }}">
                {{ __('website.header.contact') }}
              </a>
            </nav>
            <nav class="mobile__menu__social__icons">
              <a href="http://facebook.com/nvconciergeservices" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="http://instagram.com/nv_concierge_services" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="http://tiktok.com/@nvconciergeservices" target="_blank">
                <i class="fab fa-tiktok"></i>
              </a>
            </nav>
          </div>
        </div>
      </div>
    </header>