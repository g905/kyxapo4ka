@extends('main::layouts.master')

@section('content')

<a class="btn more-btn mb-3" href="{{ route('product', ['code' => $recipe->category->code]) }}">Назад</a>

<div class="main-content recipe-page">
    <div class="recipe-title mb-5">
        <h1 class="display-5">{{ $recipe->name }}</h1>
    </div>
    <div class="recipe-pics d-flex mb-5">
        <div class="recipe-image me-5">
            <!--<img data-fancybox data-src="{{ Voyager::image($recipe->main_image) }}" class="" src="img/borscht_1.png">-->
            <img data-fancybox data-src="{{ $recipe->main_image }}" class="" src="{{ $recipe->main_image }}">
        </div>
        @foreach(json_decode($recipe->images) as $image)
        <div class="recipe-image me-5">
            <img data-fancybox data-src="img/vinegret.png" class="" src="img/borscht_1.png">
        </div>
        @endforeach

    </div>

    <div class="recipe-description mb-5">
        {{ $recipe->description }}
    </div>

    <div class="recipe-parameters mb-5">
        <div class="timer mb-3">
            Время приготовления: <span class="timer-line ms-5"><i class="fa-regular fa-clock me-2"></i>3:30ч</span>
        </div>
        <div class="cost mb-3">
            Стоимость за одну порцию: <span class="cost-line ms-5"><i class="fa-solid fa-ruble-sign me-2"></i>{{ $recipe->price }}</span>
        </div>
    </div>



    <div class="recipe-description mb-5">
        <h4>Рецепт</h4>
        {{ $recipe->content }}

    </div>

    <div class="recipe-feedback mb-5">
        <div class="rating text-end">
            Оцените рецепт:
            <span class="rating-line ms-3">
                <i class="fa-solid fa-star me-1"></i>
                <i class="fa-solid fa-star me-1"></i>
                <i class="fa-regular fa-star me-1"></i>
                <i class="fa-regular fa-star me-1"></i>
                <i class="fa-regular fa-star me-1"></i>
            </span>
        </div>
    </div>

</div>



@endsection

@section('secondary')

<section class="index-new py-5 position-relative bg-white">
    <div class="plate2">
        <img src="{{ Module::asset('main:img/plate4.png') }}">
    </div>
    <div class="container">
        <div class="row">
            <h1 class="display-5 mb-5">Похожие</h1>
        </div>
        <div class="row">
            <div class="info-content">
                <div class="slick-pop">
                    @foreach($recipe->getSimilar() as $recipe)
                    @include('catalog::recipe_card', ['cat' => $recipe->category])
                    @endforeach

                </div>
            </div>
        </div>
</section>
@endsection