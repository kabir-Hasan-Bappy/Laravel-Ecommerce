<?php

use App\Models\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Product::class, function (Faker $faker) {
    return [
        		'name'=> $faker->name,
 				'slug'=> Str::slug($faker->name),
 				'category_id'=> random_int(1, 3),
 				'description'=> $faker->text,
 				'purchase_price'=> random_int(100, 10000),
 				'sales_price'=> random_int(100, 10000),
 				'quantity'=> random_int(1, 10),
    ];
});

	$factory->afterCreating(Product::class, function ($product, $faker) {
	$product-> photos()->create(['image'=>$faker->imageUrl()]);
});