<section class="website__stats">
    <div class="container">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-12 col-md-4 mb-5 mb-md-0">
                <div>
                <img src="{{ asset('img/flags-03.svg') }}" class="flags" alt="">
                </div>
                <i class="fas fa-car fa-3x mb-4 text-white"></i>
                <h1 class="text-white number_counter" data-number_counter="2346">
                    0
                </h1>
                <h3 class="text-white">
                    {{ __('website.stats.local_trips_completed') }}
                </h3>
            </div>
            <div class="col-12 col-md-4">
                <div>
                <img src="{{ asset('img/flags-02.svg') }}" class="flags" alt="">
                </div>
                <i class="fas fa-car fa-3x mb-4 text-white"></i>
                <h1 class="text-white number_counter" data-number_counter="1086">
                    0
                </h1>
                <h3 class="text-white">
                    {{ __('website.stats.cross_border_trips_completed') }}
                </h3>
            </div>
        </div>
    </div>
</section>