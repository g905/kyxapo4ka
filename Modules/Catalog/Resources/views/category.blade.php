@extends('main::layouts.master')

@include('catalog::categories')

@section('content')

<div class="main-content">
    <div class="category-title-lg mb-4 d-lg-block d-none">
        <div class="category-title-text display-5">
            <img class="cat-img-bg" src="{{ Voyager::image($cat->image) }}" alt="">
            {{ $cat->name }}
        </div>
    </div>

    <div class="filters">
        <div class="filters-form">
            <form class="ff" method="post" action="">
                @csrf

                <input type='hidden' name='code' value='{{ $cat->code }}'>

                <div class="subcategories">

                    @foreach($cat->products as $prod)
                    @if(!$prod->recipes->count()) @continue @endif
                    @if(isset($request->product) && ($prod->code == $request->product))
                    <input type="radio" class="btn-check" name="product" id="{{ $prod->code }}" value="{{ $prod->code }}" checked>
                    <label class="btn prod-link" for="{{ $prod->code }}">{{ $prod->name }}</label>
                    <!--<a class="nav-link active disabled" href="{{ route('product', ['code' => $cat->code, 'product' => $prod->code]) }}">{{ $prod->name }}</a>-->
                    @else
                    <input type="radio" class="btn-check" name="product" id="{{ $prod->code }}" value="{{ $prod->code }}" >
                    <label class="btn prod-link" for="{{ $prod->code }}" >{{ $prod->name }}</label>
                    <!--<a class="nav-link" href="{{ route('product', ['code' => $cat->code, 'product' => $prod->code]) }}">{{ $prod->name }}</a>-->
                    @endif

                    @endforeach

                </div>
                <div class="prices mb-3">
                    <span style="color: #666">Цена:&nbsp;</span>
                    @foreach($prices as $price)

                    @if(isset($request->price) && ($price == $request->price))
                    <input type="radio" class="btn-check" name="price" id="price-{{ $price }}" value="{{ $price }}" checked>
                    <label class="btn prod-link" for="price-{{ $price }}">до {{ $price }}р.</label>
                    @else
                    <input type="radio" class="btn-check" name="price" id="price-{{ $price }}" value="{{ $price }}" >
                    <label class="btn prod-link" for="price-{{ $price }}">до {{ $price }}р.</label>
                    @endif

                    @endforeach
                </div>

                <div class="types mb-3">
                    @if(count($recipes))<span style="color: #666">Тип:&nbsp;</span>@endif
                    @foreach($types as $type)
                    @if(!$type->recipes->count()) @continue @endif

                    @if(isset($request->type) && ($type->id == $request->type))
                    <input type="radio" class="btn-check" name="type" id="type-{{ $type->id }}" value="{{ $type->id }}" checked>
                    <label class="btn prod-link" for="type-{{ $type->id }}">{{ $type->name }}</label>

                    @else
                    <input type="radio" class="btn-check" name="type" id="type-{{ $type->id }}" value="{{ $type->id }}" >
                    <label class="btn prod-link" for="type-{{ $type->id }}" >{{ $type->name }}</label>

                    @endif

                    @endforeach
                </div>

                <div class="sort-by mb-3">
                    @foreach($sorts as $sort)

                    @if(isset($request->sort) && ($sort["code"] == $request->sort))
                    <input type="radio" class="btn-check" name="sort" id="sort-{{ $sort["code"] }}" value="{{ $sort["code"] }}" checked>
                    <label class="btn prod-link" for="sort-{{ $sort["code"] }}">{{ $sort["text"] }}</label>

                    @else
                    <input type="radio" class="btn-check" name="sort" id="sort-{{ $sort["code"] }}" value="{{ $sort["code"] }}" >
                    <label class="btn prod-link" for="sort-{{ $sort["code"] }}">{{ $sort["text"] }}</label>

                    @endif

                    @endforeach
                </div>

            </form>
        </div>
    </div>

    <div class="recipes d-flex flex-wrap justify-content-start mb-5">
        @foreach($recipes as $recipe)

        @include('catalog::recipe_card')

        @endforeach
    </div>



    <div class="more-block d-flex align-items-center justify-content-center mb-5">
        @if($recipes->nextPageUrl())
        <button class="btn more-btn" data-next='{{ $recipes->nextPageUrl() }}'>Еще</button>
        @endif
    </div>


</div>

@endsection

@section('secondary')

@endsection



@section('scripts')

<script>
    let btn = $('.more-btn');
    var nextUrl = $(btn).data('next');
    $(btn).click(function () {
        $.ajax({
            url: nextUrl,
            dataType: 'html',
            data: $('.ff').serialize(),
            beforeSend: function () {
                $('.loader').fadeIn(200);
            },
            complete: function () {
                $('.loader').fadeOut(400);
            },
            success: function (data) {
                $('.recipes').append(JSON.parse(data)["aaa"]);
                nextUrl = JSON.parse(data)["bbb"];
                if (!nextUrl) {
                    $('.more-btn').hide();
                }
            },
            error: function (err) {
                console.log(err);
            }
        });
    });
    $('.ff').change(function (e) {
        let form = $('.ff').serializeArray();
        $.ajax({
            url: "{{ route('ajax_filter') }}",
            type: 'post',
            dataType: 'html',
            data: form,
            beforeSend: function () {
                $('.loader').fadeIn(200);
            },
            complete: function () {
                $('.loader').fadeOut(400);
            },
            success: function (data) {
                console.log(data);
                $('.recipes').html("");
                $('.recipes').append(JSON.parse(data)["aaa"]);
                nextUrl = JSON.parse(data)["bbb"];
                if (nextUrl) {
                    $('.more-btn').show();
                } else {
                    $('.more-btn').hide();
                }
            },
            error: function (err) {
                console.log(err);
            }
        });
    });

</script>

@endsection