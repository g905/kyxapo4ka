<div class="search my-3">
    <form class="search-form" action="{{ route('search') }}" method="get">
        <div class="input-group">
            <span class="input-group-text">Поиск</span>
            <input type="text" name="query" class="form-control" aria-label="query" placeholder="Рецепт или продукт" value="{{ request()->filled('query') ? request()->get('query') : "" }}" required>
            <span class="input-group-text p-0">
                <button type="submit" class="btn search-submit">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </span>
        </div>
    </form>
</div>