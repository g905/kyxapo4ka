<?php

namespace Modules\Catalog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model {

    use HasFactory;

    protected $fillable = [];

    protected static function newFactory() {
        return \Modules\Catalog\Database\factories\ProductFactory::new();
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function recipes() {
        return $this->hasMany(Recipe::class);
    }

}
