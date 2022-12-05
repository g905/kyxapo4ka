<div class="recipe">
    <a class="card-link" href="{{ route('product', ['code' => $recipe->category->code, 'recipe' => $recipe->code]) }}">
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