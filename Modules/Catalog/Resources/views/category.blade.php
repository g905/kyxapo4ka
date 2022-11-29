@extends('main::layouts.master')

@section('categories')

<div class="catalog-wrapper">
    <ul class="catalog nav nav-pills flex-column">
        @foreach ($cats as $category)
        <li class="catalog-item nav-item">
            @if($category->code === $cat->code)
            <a class="nav-link active disabled" href="{{ route('product', ['code' => $category->code]) }}">{{ $category->name }}</a>
            @else
            <a class="nav-link" href="{{ route('product', ['code' => $category->code]) }}">{{ $category->name }}</a>
            @endif

        </li>
        @endforeach

    </ul>
</div>

@endsection

@section('content')

<div class="main-content">
    <div class="category-title-lg mb-4 d-lg-block d-none">
        <div class="category-title-text display-5">
            <img class="cat-img-bg" src="{{ Voyager::image($cat->image) }}" alt="">
            {{ $cat->name }}
        </div>
    </div>
    <div class="subcategories">
        <ul class="nav nav-pills">
            @foreach($cat->products as $prod)
            @if(!$prod->recipes->count()) @continue @endif
            <li class="nav-item">
                @if($prod->code == $product)
                <a class="nav-link active disabled" href="{{ route('product', ['code' => $cat->code, 'product' => $prod->code]) }}">{{ $prod->name }}</a>
                @else
                <a class="nav-link" href="{{ route('product', ['code' => $cat->code, 'product' => $prod->code]) }}">{{ $prod->name }}</a>
                @endif
            </li>
            @endforeach
        </ul>
    </div>

    <div class="filters">
        Фильтры
    </div>

    <div class="recipes d-flex flex-wrap justify-content-start">

        @foreach($recipes as $recipe)
        <div class="recipe">
            <a class="card-link" href="#">
                <div class="card" >
                    <!--<img src="{{ Voyager::image($recipe->thumbnail('cropped', 'main_image')) }}" class="card-img-top" alt="{{ $recipe->code }}">-->
                    <img src="{{ $recipe->main_image }}" class="card-img-top" alt="{{ $recipe->code }}">

                    <div class="card-body">
                        <h5 class="card-title text-black">
                            {{ $recipe->name }}
                        </h5>
                        <div class="recipe-description">{{ Str::limit($recipe->description, 80) }}</div>
                        <div class="parameters text-start">
                            <div class="timer mb-3">
                                <span class="timer-line"><i class="fa-regular fa-clock me-2"></i>3:30ч</span>
                            </div>
                            <div class="cost mb-3">
                                <span class="cost-line"><i class="fa-solid fa-ruble-sign me-2"></i>{{ $recipe->price }}</span>
                            </div>
                            <div class="rating text-end">
                                <span class="rating-line">
                                    @for($i = 0; $i < $recipe->rating; $i++)
                                    <i class="fa-solid fa-star me-1"></i>
                                    @endfor

                                    @for($i = 0; $i < 5 - $recipe->rating; $i++)
                                    <i class="fa-regular fa-star me-1"></i>
                                    @endfor

                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>

    <div class="more-block d-flex align-items-center justify-content-center my-5">
        <button class="btn more-btn">Еще</button>
    </div>
</div>

@endsection

@section('secondary')

@endsection