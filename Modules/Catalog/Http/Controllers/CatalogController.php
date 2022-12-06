<?php

namespace Modules\Catalog\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Catalog\Entities\Type;

class CatalogController extends Controller {

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index() {
        return view('catalog::index');
    }

    public function category(Request $request, $code, $recipe = null) {

        if ($recipe) {
            return view('catalog::recipe', ['recipe' => \Modules\Catalog\Entities\Recipe::where(['code' => $recipe])->first()]);
        }

        $cat = \Modules\Catalog\Entities\Category::where(['code' => $request->code])->first();
        $cats = \Modules\Catalog\Entities\Category::where(['active' => true])->orderBy('sort')->get();

        $recipes = $cat->getRecipes($request);

        $prices = [300, 500, 800, 1000, 1500, 2000];
        $sorts = [
            ["code" => "popular", "text" => "Сначала популярные"],
            ["code" => "price", "text" => "Сначала дешевые"]
        ];

        if ($request->ajax()) {
            //sleep(fake()->numberBetween(0.1, 1.5));
            $a = view('catalog::recipes_chunk', ['recipes' => $recipes]);
            $d["aaa"] = $a->render();
            $d["bbb"] = $recipes->nextPageUrl();
            return $d;
        }

        return view('catalog::category', ['cat' => $cat, 'cats' => $cats, 'recipes' => $recipes, 'types' => Type::all(), 'prices' => $prices, 'sorts' => $sorts, 'request' => $request]);
    }

    public function search(Request $request) {
        $recipes = \Modules\Catalog\Entities\Recipe::query()
                        ->where('name', 'LIKE', "%{$request->get('query')}%")
                        ->orWhere('description', 'LIKE', "%{$request->get('query')}%")
                        ->orWhere('content', 'LIKE', "%{$request->get('query')}%")->paginate(8);
        $products = \Modules\Catalog\Entities\Product::query()
                        ->where('name', 'LIKE', "%{$request->get('query')}%")->get();

        $recipes->appends(['query' => $request->get('query')]);

        if ($request->ajax()) {
            sleep(fake()->numberBetween(0.1, 1.5));
            $a = view('catalog::recipes_chunk', ['recipes' => $recipes]);
            $d["aaa"] = $a->render();
            $d["bbb"] = $recipes->nextPageUrl();
            return $d;
        }

        return view('catalog::search', ['recipes' => $recipes, 'products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create() {
        return view('catalog::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request) {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id) {
        return view('catalog::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id) {
        return view('catalog::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id) {
        //
    }

}
