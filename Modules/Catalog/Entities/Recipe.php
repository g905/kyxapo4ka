<?php

namespace Modules\Catalog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use TCG\Voyager\Traits\Resizable;

class Recipe extends Model {

    use HasFactory;
    use Resizable;

    protected $fillable = [];

    protected static function newFactory() {
        return \Modules\Catalog\Database\factories\RecipeFactory::new();
    }

    public function type() {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function category() {
        return $this->product->belongsTo(Category::class);
    }

    public function getSimilar() {
        return $this->where(['product_id' => $this->product->id])->inRandomOrder()->take(5)->get();
    }

    public static function getPopular() {
        return self::where(['active' => true])->where(['popular' => true])->where('rating', '>=', '5')->take(10)->get();
    }

    public static function getNew() {
        return self::where(['active' => true])->where(['new' => true])->take(10)->get();
    }

}
