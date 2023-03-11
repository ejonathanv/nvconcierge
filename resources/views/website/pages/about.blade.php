<x-website-layout pageTitle="{{ $pageTitle }}">
    <x-page-jumbotron title="{{ __('website.pages.about.title') }}" subtitle="{{ __('website.pages.about.subtitle') }}" image="img/banners/GARITA_SAN_YSIDRO.jpg" />

    <section class="py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-10 mx-auto">
                    <div class="row flex align-items-center justify-content-between">
                        <div class="col-sm-5">
                            <img src="{{ asset('img/nvconcierge_about_mission.png') }}" class="img-fluid" alt="Mission">
                        </div>
                        <div class="col-sm-6">
                            <h1 class="mb-4">
                                {{ __('website.pages.about.mission.title') }}
                            </h1>
                            <p class="lead m-0">
                                {{ __('website.pages.about.mission.subtitle') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>