<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use Illuminate\Support\Facades\Storage;

class ProductImageController extends Controller
{
    
    public function __invoke($id){
        
        
        $product = Product::with('ProductImages')->findorfail($id);
        
        return view('test', compact('product'));
    }




   }
