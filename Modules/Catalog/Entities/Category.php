<?php

namespace Modules\Catalog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model {

    use HasFactory;

    protected $fillable = [];

    protected static function newFactory() {
        return \Modules\Catalog\Database\factories\CategoryFactory::new();
    }

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function getRecipes() {
        //dd($this->products()->get('id')->toArray());
        return Recipe::whereIn('product_id', $this->products()->get('id')->toArray())->get();
    }

    public function getRecipesByProduct($product) {
        $prod_id = Product::where(['code' => $product])->get('id')->toArray();
        return Recipe::where(['product_id' => $prod_id])->get();
    }

}
