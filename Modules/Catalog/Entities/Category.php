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

    public function getRecipes($product = null) {
        $q = Recipe::where(['active' => true]);
        if ($product) {
            $prod_id = Product::where(['code' => $product])->get('id')->toArray();
            $q->where(['product_id' => $prod_id, 'active' => true]);
        } else {
            $q->whereIn('product_id', $this->products()->get('id')->toArray());
        }
        return $q->get();
    }

}
