@foreach($recipes as $recipe)

@include('catalog::recipe_card', ['recipe' => $recipe, 'cat' => $cat])

@endforeach

