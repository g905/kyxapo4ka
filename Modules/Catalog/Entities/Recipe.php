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

}
