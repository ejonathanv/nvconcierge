<x-website-layout pageTitle="{{ $pageTitle }}">
    <x-page-jumbotron
        title="{{ __('website.pages.services.title') }}"
        subtitle="{{ __('website.pages.services.subtitle') }}"
        image="img/banners/GARITA_SAN_YSIDRO.jpg" />

    <section class="py-5 py-md-2">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-10 mx-auto">
                    <div class="row flex align-items-center justify-content-between">
                        <div class="col-12 col-sm-5 mb-5">
                            <img src="{{ asset('img/services/humphrey-muleba-R8P8iZ9nRko-unsplash.jpg') }}" class="img-fluid" alt="Mission">
                        </div>
                        <div class="col-12 col-sm-6">
                            <h1 class="mb-5">
                                {{ __('website.services.1.title') }}
                            </h1>
                            <p class="lead m-0">
                                {{ __('website.services.1.subtitle') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-10 mx-auto">
                    <div class="row flex align-items-center justify-content-between">
                        <div class="col-12 col-sm-6 mb-5">
                            <h1 class="mb-5">
                                {{ __('website.services.2.title') }}
                            </h1>
                            <p class="lead">
                                {{ __('website.services.2.subtitle') }}
                            </p>
                        </div>
                        <div class="col-sm-5">
                            <img src="{{ asset('img/services/pexels-cottonbro-studio-7581589.jpg') }}" class="img-fluid" alt="Mission">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-10 mx-auto">
                    <div class="row flex align-items-center justify-content-between">
                        <div class="col-sm-5 mb-5">
                            <img src="{{ asset('img/services/Business_Transportation.png') }}" class="img-fluid" alt="Mission">
                        </div>
                        <div class="col-sm-6">
                            <h1 class="mb-5">
                                {{ __('website.services.3.title') }}
                            </h1>
                            <p class="lead">
                                {{ __('website.services.3.subtitle') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-10 mx-auto">
                    <div class="row flex align-items-center justify-content-between">
                        <div class="col-12 col-sm-6 mb-5">
                            <h1 class="mb-5">
                                {{ __('website.services.4.title') }}
                            </h1>
                            <p class="lead">
                                {{ __('website.services.4.subtitle') }}
                            </p>
                        </div>
                        <div class="col-sm-5">
                            <img src="{{ asset('img/services/pexels-yan-krukau-8867258.jpg') }}" class="img-fluid" alt="Mission">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>