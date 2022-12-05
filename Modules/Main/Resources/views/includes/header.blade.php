<header>
    <div class="container">
        <div class="row pt-3">
            <div class="col-12 col-md-2">
                <div class="logo mb-3 d-flex justify-content-center justify-content-md-start">
                    <a href="/"><img class="" src="{{ Voyager::image(setting('site.logo')) }}" alt=""></a>
                </div>
            </div>
            <div class="col-12 col-md-10">
                <div class="contacts d-flex flex-column justify-content-between h-100 align-items-md-end align-items-center">
                    <div class="contacts-top d-flex flex-nowrap flex-column flex-md-row align-items-md-end align-items-center">
                        <div class="contacts-email me-0 me-md-5">
                            <a href="mailto:{{ setting('site.email') }}">
                                <span>
                                    <i class="fa-regular fa-envelope me-1"></i>
                                    {{ setting('site.email') }}
                                </span>
                            </a>
                        </div>
                        <div class="contacts-phone">
                            <a href="tel://{{ preg_replace('/\s+/', '', setting('site.phone')); }}">
                                <span>
                                    <i class="fa-solid fa-phone me-1"></i>
                                    {{ setting('site.phone') }}
                                </span>
                            </a>
                        </div>

                    </div>
                    <div class="contacts-bottom mt-3">
                        <div class="contacts-messengers d-flex justify-content-end">
                            <div class="msg viber me-4">
                                <i class="fa-brands fa-viber"></i>
                            </div>
                            <div class="msg whatsapp me-4">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <div class="msg telegram">
                                <i class="fa-brands fa-telegram"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-2"></div>
            <div class="col-12 col-md-8">
                <div class="search my-3">
                    <form class="search-form" action="{{ route('search') }}" method="get">
                        @csrf
                        <div class="input-group">
                            <span class="input-group-text">Поиск</span>
                            <input type="text" class="form-control" aria-label="query" placeholder="Рецепт или продукт">
                            <span class="input-group-text p-0">
                                <button type="submit" class="btn search-submit">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-2"></div>
        </div>
    </div>
</header>