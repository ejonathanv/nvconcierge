<x-website-layout pageTitle="{{ $pageTitle }}">
    <x-page-jumbotron
        title="{{ __('website.pages.contact.title') }}"
        subtitle="{{ __('website.pages.contact.subtitle') }}"
        image="img/banners/GARITA_SAN_YSIDRO.jpg" />

    <section class="py-5 py-md-5">
        <div class="container">

            <div class="col-sm-10 mx-auto">
                <h1 class="mb-5">
                    {{ __('website.footer.opening.title') }}
                </h1>

                <p>
                    {{ __('website.footer.opening.week') }}
                </p>
                <p>
                    {{ __('website.footer.opening.weekend') }}
                </p>
                <p>
                    {{ __('website.footer.opening.holiday') }}
                </p>

                <h1 class="my-5">
                    {{ __('website.footer.contact.title') }}
                </h1>

                <p>
                    {{ __('website.footer.contact.phone') }}
                </p>
                <p>
                    {{ __('website.footer.contact.email') }}
                </p>
                <p>
                    {{ __('website.footer.contact.whatsapp') }}
                </p>
            </div>

        </div>
    </section>
</x-website-layout>