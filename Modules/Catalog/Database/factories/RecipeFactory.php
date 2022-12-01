<?php

namespace Modules\Catalog\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory {

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Catalog\Entities\Recipe::class;
    protected $type_ids = [];
    protected $product_ids = [];

    public function __construct($attributes = []) {

        $this->type_ids = \Modules\Catalog\Entities\Type::get('id')->toArray();
        $this->product_ids = \Modules\Catalog\Entities\Product::get('id')->toArray();

        parent::__construct($attributes);
    }

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        $name = fake()->boolean() ? fake()->lastName() . " " . fake()->firstName() : fake()->name();
        return [
            'name' => $name,
            'code' => \Illuminate\Support\Str::slug($name),
            'type_id' => $this->type_ids[fake()->numberBetween(0, count($this->type_ids) - 1)]["id"],
            'product_id' => $this->product_ids[fake()->numberBetween(0, count($this->product_ids) - 1)]["id"],
            'description' => fake()->realText(100),
            'main_image' => "https://picsum.photos/seed/" . fake()->numberBetween(0, 2342342) . "/300/300",
            'images' => "[]",
            'content' => fake()->realText(1000),
            'price' => fake()->numberBetween(0, 2000),
            'rating' => fake()->numberBetween(0, 5),
            'popular' => fake()->boolean(),
            'new' => fake()->boolean(),
            'active' => fake()->boolean(70)
        ];
    }

}
