<x-website-layout pageTitle="{{ $pageTitle }}">
    <x-page-jumbotron
        title="{{ __('website.pages.services.title') }}"
        subtitle="{{ __('website.pages.services.subtitle') }}"
        image="img/banners/GARITA_SAN_YSIDRO.jpg" />

    <section class="py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-10 mx-auto">
                    <div class="row flex align-items-center justify-content-between">
                        <div class="col-sm-5">
                            <img src="{{ asset('img/services/humphrey-muleba-R8P8iZ9nRko-unsplash.jpg') }}" class="img-fluid" alt="Mission">
                        </div>
                        <div class="col-sm-6">
                            <h1 class="mb-5">
                                {{ __('website.services.1.title') }}
                            </h1>
                            <p class="lead">
                                {{ __('website.services.1.subtitle') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>