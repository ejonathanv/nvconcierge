<!-- Footer -->
<footer class="website__footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 mb-5 mb-md-0">
                <a href="#" class="logo">
                    <img src="{{ asset('img/nv_concierge_logo_white.svg') }}" alt="NV Concierge - Tijuana">
                </a>
            </div>
            <div class="col-12 col-md-3 my-5 my-md-0 d-none d-md-block">
                <nav class="footer__nav">
                    <a href="#">
                        {{ __('website.footer.menu.home') }}
                    </a>
                    <a href="#">
                        {{ __('website.footer.menu.about') }}
                    </a>
                    <a href="#">
                        {{ __('website.footer.menu.services') }}
                    </a>
                    <a href="#">
                        {{ __('website.footer.menu.testimonials') }}
                    </a>
                    <a href="#">
                        {{ __('website.footer.menu.contact') }}
                    </a>
                    <a href="#">
                        {{ __('website.footer.menu.privacy') }}
                    </a>
                </nav>
            </div>
            <div class="col-12 col-md-3">
                <h3 class="text-white">
                    {{ __('website.footer.opening.title') }}
                </h3>
                <p class="text-white">
                    {{ __('website.footer.opening.week') }} <br>
                    {{ __('website.footer.opening.weekend') }} <br>
                    {{ __('website.footer.opening.holiday') }}
                </p>
            </div>
            <div class="col-12 col-md-3">
                <h3 class="mb-3 text-light">
                    {{ __('website.footer.contact.title') }}
                </h3>
                <p class="text-gold">
                    {{ __('website.footer.contact.subtitle') }}
                </p>
                <p class="m-0 text-light">
                    {{ __('website.footer.contact.phone') }} <br>
                    {{ __('website.footer.contact.email') }} <br>
                    {{ __('website.footer.contact.whatsapp') }}
                </p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <p class="m-0 small text-light">
                    © 2020 - {{ date('Y') }} NV Concierge. {{ __('website.footer.copy') }}
                </p>
            </div>
            <div class="col-12 col-md-6 footer__social__icons d-none d-md-block">
                <div class="d-flex align-item-center justify-content-md-end">
                    <p class="small m-0 text-light">
                        <b>
                            {{ __('website.footer.social.title') }}:
                        </b>
                    </p>
                    <a href="#" class="social__link">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social__link">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social__link">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="contact__icons d-none d-md-block">
    <a href="tel:+526643865794" class="phone">
        <i class="fas fa-phone-alt"></i>
    </a>
    <a href="mailto:info@nvconcierge.com" class="email">
        <i class="fas fa-envelope"></i>
    </a>
    <a href="https://wa.me/526643865794" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>