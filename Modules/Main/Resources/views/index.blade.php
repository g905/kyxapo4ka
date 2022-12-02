@extends('main::layouts.master')

@include('catalog::categories')

@section('content')

<div class="main-content">
    <div class="slider-wrapper d-none d-md-block">
        <div class="slick-index">
            <div class="slide">
                <img src="{{ Module::asset('main:img/banner1.png') }}" alt="">
            </div>
            <div class="slide">
                <img src="{{ Module::asset('main:img/banner1.png') }}" alt="">
            </div>
            <div class="slide">
                <img src="{{ Module::asset('main:img/banner1.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="index-text">
        <span class="display-6">Кухарочка</span> - это Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>

@endsection


@section('secondary')

@if(Modules\Catalog\Entities\Recipe::getPopular()->count())
<section class="index-popular py-5">
    <div class="container">
        <div class="row">
            <h1 class="display-5 mb-5">Популярные</h1>
        </div>
        <div class="row">
            <div class="pop-content">
                <div class="slick-pop">
                    @foreach(Modules\Catalog\Entities\Recipe::getPopular() as $recipe)

                    @include('catalog::recipe_card', ['cat' => $recipe->category])

                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>
@endif


@if(Modules\Catalog\Entities\Recipe::getNew()->count())
<section class="index-new py-5 bg-white position-relative">
    <div class="plate2">
        <img src="{{ Module::asset('main:img/plate3.png') }}">
    </div>
    <div class="container">
        <div class="row">
            <h1 class="display-5 mb-5">Новые</h1>
        </div>
        <div class="row">
            <div class="new-content">
                <div class="slick-pop">

                    @foreach(Modules\Catalog\Entities\Recipe::getNew() as $recipe)

                    @include('catalog::recipe_card', ['cat' => $recipe->category])

                    @endforeach

                </div>

            </div>
        </div>
    </div>
</section>

@endif

@endsection