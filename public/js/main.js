var app = {
    render() {

        const t = this.methods;

        t.mobile_menu();
        // t.fixed_menu();
        t.owl_services();
        t.owl_vehicles();
        t.number_counter_on_scroll();

    },

    methods: {
        mobile_menu() {
            let btn = $('.mobile_menu_bars');
            let menu = $('.mobile__menu__container');
            let close_btn = $('.mobile_menu_close');
            let body = $('body');

            btn.click(function() {
                menu.addClass('active');
                body.addClass('overflow-hidden');
                body.scrollTop(0);
            });

            close_btn.click(function() {
                menu.removeClass('active');
                body.removeClass('overflow-hidden');
            });
        },
        fixed_menu() {
            let menu = $('.website__header');
            $(window).scroll(function() {
                if ($(window).scrollTop() > 180) {
                    menu.addClass('fixed');
                } else {
                    menu.removeClass('fixed');
                }
            });
        },
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
                autoplayTimeout: 4500,
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

        },
        number_counter_on_scroll() {
            // let number_counter = $('.number_counter');
            // Each counter has a data-number_counter attribute with the number to count to
            let number_counter = $('.number_counter');

            $(window).scroll(function() {
                number_counter.each(function() {
                    let $this = $(this);
                    let top_of_element = $this.offset().top;
                                        

                    if($this.text() == 0 && $(window).scrollTop() + $(window).height() > top_of_element) {
                        let number = $this.data('number_counter');
                        $({ Counter: 0 }).animate({ Counter: number }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function() {
                                $this.text(Math.ceil(this.Counter));
                            }
                        });
                    }
                });
            });
        }
    },
}

$(document).ready(function() {
    app.render();
});