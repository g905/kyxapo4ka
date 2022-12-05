@foreach($recipes as $recipe)

@include('catalog::recipe_card', ['recipe' => $recipe])

@endforeach

