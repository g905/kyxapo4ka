@section('categories')

<div class="catalog-wrapper">
    <ul class="catalog nav nav-pills flex-column">
        @foreach ($cats as $category)
        <li class="catalog-item nav-item">
            @if(Request::route()->getName() != "index")
            @if($category->code === $cat->code)
            <a class="nav-link active disabled" href="{{ route('product', ['code' => $category->code]) }}">{{ $category->name }}</a>
            @else
            <a class="nav-link" href="{{ route('product', ['code' => $category->code]) }}">{{ $category->name }}</a>
            @endif
            @else
            <a class="nav-link" href="{{ route('product', ['code' => $category->code]) }}">{{ $category->name }}</a>
            @endif

        </li>
        @endforeach

    </ul>
</div>

@endsection