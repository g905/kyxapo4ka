<!DOCTYPE html>
<html>
    <head>
        <title>Кухарочка</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="{{ Module::asset('main:img/favicon.ico') }}">
        <link rel="stylesheet" href="{{ Module::asset('main:lib/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ Module::asset('main:lib/fontawesome/css/all.css') }}">
        <link rel="stylesheet" href="{{ Module::asset('main:lib/slick/slick.css') }}">
        <link rel="stylesheet" href="{{ Module::asset('main:lib/slick/slick-theme.css') }}">
        <link rel="stylesheet" href="{{ Module::asset('main:css/index.css') }}">
    </head>
    <body>
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
                            <form class="search-form" action="" method="post">
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
        <main class="">
            <div class="plate1">
                <img src="{{ Module::asset('main:img/plate1_shadow.png') }}">
            </div>
            <div class="container pt-5">
                <div class="row">
                    <div class="col-12 col-md-3">

                        @yield('categories')

                    </div>
                    <div class="col-12 col-md-9">

                        @yield('content')

                    </div>
                </div>
            </div>

            @yield('secondary')

        </main>
        <footer>
            <div class="container">
                <div class="footer-wrap py-5 d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <div class="footer-left d-flex flex-column justify-content-between">
                        <div class="footer-logo text-center mb-4">
                            <img class="" src="{{ Module::asset('main:img/kuh_logo_2.png') }}" alt="">
                        </div>
                        <div class="footer-feedback text-center mb-4">
                            <button class="btn btn-neon-pink" type="button" href="#">
                                Обратная связь
                            </button>
                        </div>
                    </div>
                    <div class="footer-right">
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
            </div>
        </footer>
        <script src="{{ Module::asset('main:lib/jquery/jquery-3.6.1.min.js') }}"></script>
        <script src="{{ Module::asset('main:lib/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ Module::asset('main:lib/slick/slick.js') }}"></script>
        <script src="{{ Module::asset('main:js/main.js') }}"></script>
    </body>
</html>
