@extends('main::layouts.master')

@section('categories')


<div class="catalog-wrapper">
    <ul class="catalog nav nav-pills flex-column">

        @foreach ($cats as $cat)
        <li class="catalog-item nav-item">
            <a class="nav-link" href="{{ route('product', ['code' => $cat->code]) }}">{{ $cat->name }}</a>
        </li>
        @endforeach

    </ul>
</div>

@endsection

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

<section class="index-popular py-5">
    <div class="container">
        <div class="row">
            <h1 class="display-5 mb-5">Популярное</h1>
        </div>
        <div class="row">
            <div class="pop-content">
                <div class="slick-pop">

                    <div class="recipe">
                        <a class="card-link" href="#">
                            <div class="card" >
                                <img src="{{ Module::asset('main:img/steak.png') }}" class="card-img-top" alt="...">

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
                    <div class="recipe">
                        <a class="card-link" href="#">
                            <div class="card" >
                                <img src="{{ Module::asset('main:img/vinegret.png') }}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title text-black">
                                        Винегрет "Неоновый Ад" в две строки
                                    </h5>
                                    <div class="recipe-description">Салат. Вкусно. Вообще без мазика, но плохие парни добавляют мазик и норм вообще.</div>
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
                    <div class="recipe">
                        <a class="card-link" href="#">
                            <div class="card" >
                                <img src="{{ Module::asset('main:img/borscht_1.png') }}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title text-black">
                                        Борщ классический
                                    </h5>
                                    <div class="recipe-description">Вкусное и простое блюдо на каждый день.</div>
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
                    <div class="recipe">
                        <a class="card-link" href="#">
                            <div class="card" >
                                <img src="{{ Module::asset('main:img/borscht_1.png') }}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title text-black">
                                        Борщ классический
                                    </h5>
                                    <div class="recipe-description">Вкусное и простое блюдо на каждый день.</div>
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
                    <div class="recipe">
                        <a class="card-link" href="#">
                            <div class="card" >
                                <img src="{{ Module::asset('main:img/vinegret.png') }}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title text-black">
                                        Винегрет "Неоновый Ад" в две строки
                                    </h5>
                                    <div class="recipe-description">Салат. Вкусно. Вообще без мазика, но плохие парни добавляют мазик и норм вообще.</div>
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
                    <div class="recipe">
                        <a class="card-link" href="#">
                            <div class="card" >
                                <img src="{{ Module::asset('main:img/borscht_1.png') }}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title text-black">
                                        Борщ классический
                                    </h5>
                                    <div class="recipe-description">Вкусное и простое блюдо на каждый день.</div>
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
    </div>
</section>

<section class="index-new py-5 bg-white">
    <div class="container">
        <div class="row">
            <h1 class="display-5 mb-5">Новые</h1>
        </div>
        <div class="row">
            <div class="new-content">
                <div class="slick-pop">

                    <div class="recipe">
                        <a class="card-link" href="#">
                            <div class="card" >
                                <img src="{{ Module::asset('main:img/steak.png') }}" class="card-img-top" alt="...">

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
                    <div class="recipe">
                        <a class="card-link" href="#">
                            <div class="card" >
                                <img src="{{ Module::asset('main:img/vinegret.png') }}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title text-black">
                                        Винегрет "Неоновый Ад" в две строки
                                    </h5>
                                    <div class="recipe-description">Салат. Вкусно. Вообще без мазика, но плохие парни добавляют мазик и норм вообще.</div>
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
                    <div class="recipe">
                        <a class="card-link" href="#">
                            <div class="card" >
                                <img src="{{ Module::asset('main:img/borscht_1.png') }}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title text-black">
                                        Борщ классический
                                    </h5>
                                    <div class="recipe-description">Вкусное и простое блюдо на каждый день.</div>
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
                    <div class="recipe">
                        <a class="card-link" href="#">
                            <div class="card" >
                                <img src="{{ Module::asset('main:img/borscht_1.png') }}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title text-black">
                                        Борщ классический
                                    </h5>
                                    <div class="recipe-description">Вкусное и простое блюдо на каждый день.</div>
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
                    <div class="recipe">
                        <a class="card-link" href="#">
                            <div class="card" >
                                <img src="{{ Module::asset('main:img/vinegret.png') }}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title text-black">
                                        Винегрет "Неоновый Ад" в две строки
                                    </h5>
                                    <div class="recipe-description">Салат. Вкусно. Вообще без мазика, но плохие парни добавляют мазик и норм вообще.</div>
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
                    <div class="recipe">
                        <a class="card-link" href="#">
                            <div class="card" >
                                <img src="{{ Module::asset('main:img/borscht_1.png') }}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title text-black">
                                        Борщ классический
                                    </h5>
                                    <div class="recipe-description">Вкусное и простое блюдо на каждый день.</div>
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
    </div>
</section>

@endsection