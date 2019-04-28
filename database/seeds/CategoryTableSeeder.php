<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 		Category::insert([
 			[
 				'name'=> 'Electronics',
 				'slug'=> Str::slug('Electronics'),
 			],
 			[
 				'name'=> 'Clothes',
 				'slug'=> Str::slug('Clothes'),
 			],

 			[
 				'name'=> 'Shoes',
 				'slug'=> Str::slug('Shoes'),
 			]


 		]);
    }
}
