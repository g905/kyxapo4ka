<?php

namespace Modules\Catalog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class Category extends Model {

    use HasFactory;

    protected $fillable = [];

    protected static function newFactory() {
        return \Modules\Catalog\Database\factories\CategoryFactory::new();
    }

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function getRecipes(Request $request) {
        $q = Recipe::where(['active' => true]);
        if ($request->filled('product')) {
            $prod_id = Product::where(['code' => $request->product])->get('id')->toArray();
            $q->where(['product_id' => $prod_id, 'active' => true]);
        } else {
            $q->whereIn('product_id', $this->products()->get('id')->toArray());
        }

        if ($request->filled('price')) {
            $q->where('price', '<=', $request->price);
        }

        if ($request->filled('type')) {
            $q->where(['type_id' => $request->type]);
        }

        if ($request->filled("sort")) {
            switch ($request->sort) {
                case "popular":
                    $q->orderBy("rating", "desc");
                    break;
                case "price":
                    $q->orderBy("price", "asc");
                    break;
            }
        } else {
            $request->sort = "popular";
            $q->orderBy("rating", "desc");
        }

        return $q->paginate(9);
    }

}
