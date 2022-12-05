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