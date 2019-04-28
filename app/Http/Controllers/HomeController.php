<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class HomeController extends Controller
{
    public function showWelcome(){
    	
    		$data= [];
    		$data['hero'] = true;
    		$data['hero_title'] = 'Welcome to ' . config('app.name');
    		$data['products'] = Product::with('photos')->select(['id', 'name', 'slug', 'sales_price'])->paginate(9);
    		

    	return view('welcome',$data);
    }

    public function showCategory($slug){

    		$data= [];
    		$data['hero'] = true;

    	$category= Category::with('products.photos')->select(['id', 'name'])->where("slug", $slug)->first();

    	if($category){
    		   $data['hero_title'] = $category->name;




    		$data['category'] = $category;
    		$data['products'] = $category->products;

    		return view('category', $data);

    	}

    	return redirect()->route('home');
    }

}
