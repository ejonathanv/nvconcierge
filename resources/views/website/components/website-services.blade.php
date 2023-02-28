<!-- Services -->
<section class="website__services__carousel">
    <div class="container">
        <h2 class="mb-4 mb-md-5">
            {{ __('website.services.title') }}
        </h2>
        <div class="owl__services">
            <div class="owl-carousel owl-services">
                <div class="service__box" style="background-image: url({{ asset('img/services/humphrey-muleba-R8P8iZ9nRko-unsplash.jpg') }})">
                    <div class="service__box__content">
                        <h1 class="service__box__title text-uppercase">
                            {{ __('website.services.cross_border') }}
                        </h1>
                        <div class="service__box__link">
                            <a href="#">
                                {{ __('website.read_more') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="service__box" style="background-image: url({{ asset('img/services/christopher-boswell-GEzNsJarkGU-unsplash.jpg') }})">
                    <div class="service__box__content">
                        <h1 class="service__box__title text-uppercase">
                            {{ __('website.services.non_emergency') }}
                        </h1>
                        <div class="service__box__link">
                            <a href="#">
                                {{ __('website.read_more') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="service__box" style="background-image: url({{ asset('img/services/cristofer-maximilian-iYn35RwhQTE-unsplash.jpg') }})">
                    <div class="service__box__content">
                        <h1 class="service__box__title text-uppercase">
                            {{ __('website.services.business') }}
                        </h1>
                        <div class="service__box__link">
                            <a href="#">
                                {{ __('website.read_more') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="service__box" style="background-image: url({{ asset('img/services/jason-goodman-Ti7LQ0r-zy4-unsplash.jpg') }})">
                    <div class="service__box__content">
                        <h1 class="service__box__title text-uppercase">
                            {{ __('website.services.translation') }}
                        </h1>
                        <div class="service__box__link">
                            <a href="#">
                                {{ __('website.read_more') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="owl-services-control owl-services-prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a href="#" class="owl-services-control owl-services-next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
</section>