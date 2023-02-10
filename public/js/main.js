var app = {
    render() {

        const t = this.methods;

        t.owl_services();
        t.owl_vehicles();

    },

    methods: {
        owl_services() {
            let owl_services = $('.owl-services');
            // Necesitamos activar el carousel .owl-services
            owl_services.owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3500,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });

            // Necesitamos activar los botones de navegación
            $('.owl-services-prev').click(function() {
                event.preventDefault();
                owl_services.trigger('prev.owl.carousel');
            });
            $('.owl-services-next').click(function() {
                event.preventDefault();
                owl_services.trigger('next.owl.carousel');
            });

        },
        owl_vehicles() {
            let owl_vehicles = $('.owl-vehicles');
            // Necesitamos activar el carousel .owl-vehicles
            owl_vehicles.owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3500,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            // Necesitamos activar los botones de navegación
            $('.owl-vehicles-prev').click(function() {
                event.preventDefault();
                owl_vehicles.trigger('prev.owl.carousel');
            });
            $('.owl-vehicles-next').click(function() {
                event.preventDefault();
                owl_vehicles.trigger('next.owl.carousel');
            });

        }
    },
}

$(document).ready(function() {
    app.render();
});