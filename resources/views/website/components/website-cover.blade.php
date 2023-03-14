<!-- Cover -->
<section class="website__cover">
    <div class="d-flex website__cover__slider__container">
        <div class="ms-auto website__cover__slider">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-touch="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="website__cover__slider__item" style="background-image: url({{ asset('img/banners/GARITA_SAN_YSIDRO.jpg') }})"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="website__cover__slider__item" style="background-image: url({{ asset('img/banners/pexels-ketut-subiyanto-4964951.jpg') }})"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="website__cover__slider__item" style="
                    background-image: url({{ asset('img/banners/new_city_tijuana.jpg') }})"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="website__cover__slider__item" style="
                    background-image: url({{ asset('img/banners/tijuana_aeropuerto.jpg') }})"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="website__cover__slider__item" style="background-image: url({{ asset('img/banners/SAN_DIEGO_AIRPORT.jpg') }})"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="website__cover__slider__item" style="background-image: url({{ asset('img/banners/comp-new-tj-hero.jpg') }})"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="website__cover__slider__item" style="background-image: url({{ asset('img/banners/pexels-tiger-lily-4483610.jpg') }})"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="website__cover__desc">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>
                        {{ __('website.cover.title') }}
                    </h1>
                    <p class="lead">
                        {{ __('website.cover.subtitle') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>