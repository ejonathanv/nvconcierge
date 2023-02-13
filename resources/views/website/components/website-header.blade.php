<!-- Header -->
<header class="website__header">
      <div class="container d-flex website__header__lang d-none">
        <a href="#" class="d-inline-block ms-auto"> Traducir al español </a>
      </div>

      <div class="container d-flex align-items-start align-items-md-center justify-content-between">
        <!-- Logo -->
        <div>
          <a href="#" class="website__header__logo">
            <img src="{{ asset('img/nv_concierge_logo.svg') }}" alt="NV CONCIERGE" />
          </a>
        </div>

        <!-- Menu -->
        <div class="d-none d-md-flex align-items-center">
          <nav class="website__nav">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Testimonials</a>
            <a href="#">Contact</a>
          </nav>
          <nav class="website__social__icons">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
          </nav>
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
              <a href="#">Home</a>
              <a href="#">About</a>
              <a href="#">Services</a>
              <a href="#">Testimonials</a>
              <a href="#">Contact</a>
            </nav>
            <nav class="mobile__menu__social__icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
            </nav>
          </div>
        </div>
      </div>
    </header>