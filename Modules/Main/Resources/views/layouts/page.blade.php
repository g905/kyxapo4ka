<!DOCTYPE html>
<html>
    @include('main::includes.head')
    <body>
        @include('main::includes.header')

        @include('main::1col_page')

        @include('main::includes.footer')

        @include('main::includes.modals')

        <div class='loader'>
            <div>
                <img class="loader-img" src='{{ Module::asset('main:img/plate5.png') }}' alt="">
            </div>
        </div>

        <div class="top-btn"><i class="fa-solid fa-chevron-up"></i></div>


        <script src="{{ Module::asset('main:lib/jquery/jquery-3.6.1.min.js') }}"></script>
        <script src="{{ Module::asset('main:lib/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ Module::asset('main:lib/slick/slick.js') }}"></script>
        <script src="{{ Module::asset('main:js/main.js') }}"></script>

        @yield('scripts')

    </body>
</html>
