<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class Front extends Controller
{
    public function index(){
        $products = Product::with('ProductImages')->get()->sortByDesc(function($product){
            return $product->id;
        })->take(6); //
        
       $categories = Category::all();



        return view('index', compact('products','categories'));
    }
}
