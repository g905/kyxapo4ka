@extends('main::layouts.master')

@section('content')

<div class="main-content">
    <div class="recipe-title mb-5">
        <h1 class="display-5">{{ $recipe->name }}</h1>
    </div>

    <div class="recipe-pics d-flex mb-5">
        <div class="recipe-image me-5">
            <img data-fancybox data-src="img/vinegret.png" class="" src="img/borscht_1.png">
        </div>
        <div class="recipe-image">
            <img data-fancybox data-src="img/vinegret.png" class="" src="img/borscht_1.png">
        </div>
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

    <!--<div class="recipe-ingredients mb-5">
        <h4>Ингредиенты</h4>
        <table class="table caption-top w-50">

            <tr>
                <td>Картошка</td>
                <td>5шт</td>
            </tr>
            <tr>
                <td>Свекла</td>
                <td>5шт</td>
            </tr>
            <tr>
                <td>Селитра аммиачная</td>
                <td>500гр</td>
            </tr>
            <tr>
                <td>Ананас</td>
                <td>5шт</td>
            </tr>
        </table>
    </div>-->

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
        <img src="img/plate2.png">
    </div>
    <div class="container">
        <div class="row">
            <h1 class="display-5 mb-5">Похожие</h1>
        </div>
        <div class="row">
            <div class="info-content">
                <div class="slick-pop">
                    <div class="slide">
                        <a class="card-link" href="#">
                            <div class="card" >
                                <img src="img/steak.png" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title text-black">
                                        Стейк из говядины
                                    </h5>
                                    <div class="recipe-description">Брутальный кусок мяса средней прожарки.</div>
                                    <div class="parameters text-start">
                                        <div class="timer mb-3">
                                            <span class="timer-line"><i class="fa-regular fa-clock me-2"></i>3:30ч</span>
                                        </div>
                                        <div class="cost mb-3">
                                            <span class="cost-line"><i class="fa-solid fa-ruble-sign me-2"></i>300р</span>
                                        </div>
                                        <div class="rating text-end">
                                            <span class="rating-line">
                                                <i class="fa-solid fa-star me-1"></i>
                                                <i class="fa-solid fa-star me-1"></i>
                                                <i class="fa-regular fa-star me-1"></i>
                                                <i class="fa-regular fa-star me-1"></i>
                                                <i class="fa-regular fa-star me-1"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a class="card-link" href="#">
                            <div class="card" >
                                <img src="img/steak.png" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title text-black">
                                        Стейк из говядины
                                    </h5>
                                    <div class="recipe-description">Брутальный кусок мяса средней прожарки.</div>
                                    <div class="parameters text-start">
                                        <div class="timer mb-3">
                                            <span class="timer-line"><i class="fa-regular fa-clock me-2"></i>3:30ч</span>
                                        </div>
                                        <div class="cost mb-3">
                                            <span class="cost-line"><i class="fa-solid fa-ruble-sign me-2"></i>300р</span>
                                        </div>
                                        <div class="rating text-end">
                                            <span class="rating-line">
                                                <i class="fa-solid fa-star me-1"></i>
                                                <i class="fa-solid fa-star me-1"></i>
                                                <i class="fa-regular fa-star me-1"></i>
                                                <i class="fa-regular fa-star me-1"></i>
                                                <i class="fa-regular fa-star me-1"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a class="card-link" href="#">
                            <div class="card" >
                                <img src="img/steak.png" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title text-black">
                                        Стейк из говядины
                                    </h5>
                                    <div class="recipe-description">Брутальный кусок мяса средней прожарки.</div>
                                    <div class="parameters text-start">
                                        <div class="timer mb-3">
                                            <span class="timer-line"><i class="fa-regular fa-clock me-2"></i>3:30ч</span>
                                        </div>
                                        <div class="cost mb-3">
                                            <span class="cost-line"><i class="fa-solid fa-ruble-sign me-2"></i>300р</span>
                                        </div>
                                        <div class="rating text-end">
                                            <span class="rating-line">
                                                <i class="fa-solid fa-star me-1"></i>
                                                <i class="fa-solid fa-star me-1"></i>
                                                <i class="fa-regular fa-star me-1"></i>
                                                <i class="fa-regular fa-star me-1"></i>
                                                <i class="fa-regular fa-star me-1"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a class="card-link" href="#">
                            <div class="card" >
                                <img src="img/steak.png" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title text-black">
                                        Стейк из говядины
                                    </h5>
                                    <div class="recipe-description">Брутальный кусок мяса средней прожарки.</div>
                                    <div class="parameters text-start">
                                        <div class="timer mb-3">
                                            <span class="timer-line"><i class="fa-regular fa-clock me-2"></i>3:30ч</span>
                                        </div>
                                        <div class="cost mb-3">
                                            <span class="cost-line"><i class="fa-solid fa-ruble-sign me-2"></i>300р</span>
                                        </div>
                                        <div class="rating text-end">
                                            <span class="rating-line">
                                                <i class="fa-solid fa-star me-1"></i>
                                                <i class="fa-solid fa-star me-1"></i>
                                                <i class="fa-regular fa-star me-1"></i>
                                                <i class="fa-regular fa-star me-1"></i>
                                                <i class="fa-regular fa-star me-1"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
</section>
@endsection