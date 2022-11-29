<?php

namespace App\Models\Voyager\Widgets;

use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Str;
use Nwidart\Modules\Facades\Module;

/**
 * Description of RecipeDimmer
 *
 * @author g905
 */
class RecipeDimmer extends \TCG\Voyager\Widgets\BaseDimmer {

    protected $config = [];

    public function run() {
        $count = \Modules\Catalog\Entities\Recipe::count();
        $string = trans_choice('рецептов', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-receipt',
            'title' => "{$count} {$string}",
            'text' => __('voyager::dimmer.user_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('Все рецепты'),
                'link' => route('voyager.recipes.index'),
            ],
            'image' => Module::asset('main:img/fruit_salad.jpg'),
        ]));
    }

    public function shouldBeDisplayed() {
        return Auth::user()->can('browse', Voyager::model('User'));
    }

}
