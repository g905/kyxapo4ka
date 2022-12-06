@extends('main::layouts.page')

@section('content')

<div class="main-content recipe-page">
    <div class="recipe-title mb-5">
        <h1 class="display-5">{{ trans_choice('Найден|Найдено|Найдено', $recipes->total()) }} {{ $recipes->total() }} {{ trans_choice('рецепт|рецепта|рецептов', $recipes->total()) }}</h1>
    </div>
    @if($recipes->count())
    <div class="recipes d-flex flex-wrap">
        @include('catalog::recipes_chunk', ['recipes' => $recipes])
    </div>
    <div class="more-block d-flex align-items-center justify-content-center my-5">
        @if($recipes->nextPageUrl())
        <button class="btn more-btn" data-next='{{ $recipes->nextPageUrl() }}'>Еще</button>
        @endif
    </div>
    @endif
    products: {{ $products->count() }}

</div>


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

</script>

@endsection

пр Мира 90, к.1 в 15:00