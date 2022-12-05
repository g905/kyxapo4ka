<footer>
    <div class="container">
        <div class="footer-wrap py-5 d-flex flex-column flex-md-row align-items-center justify-content-between">
            <div class="footer-left d-flex flex-column justify-content-between">
                <div class="footer-logo text-center mb-4">
                    <img class="" src="{{ Module::asset('main:img/kuh_logo_3.png') }}" alt="">
                </div>
                <div class="footer-feedback text-center mb-4">
                    <button class="btn btn-neon-pink" type="button" data-bs-toggle="modal" data-bs-target="#feedbackModal">
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