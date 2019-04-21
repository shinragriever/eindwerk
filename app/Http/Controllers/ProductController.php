<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
class ProductController extends Controller
{
   
    public function index()
    {
        
        
        
        $products = Product::with('ProductImages')->get();
        
        return view ('admin.products.index',compact('products','categories','images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = New Product();
        $categories = Category::all();
        return view('admin.products.create', compact('product','categories'));
    }

    public function store(Request $request)
    {   
        
        $this->validate($request, array(
            'name' => "required|min:2|unique:products,name",
            'description'=>'required|max:500',
            'price'=>'required|numeric',
            'category_id'=>'required',
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ));
        
        $id = Product::create($request->all())->id;
        $order=0;
        $featured=1;
        foreach ($request->images as $image) {
            $file = Storage::disk('public')->put('images',$image);
            $file = "/storage/".$file;
            $thumbnail = $image;
            $filename = time() . $thumbnail->getClientOriginalName();
            $thumbnail = Image::make($thumbnail)->fit(75)->save();
            $tpath= '/storage/thumbnails/'.$filename;
            Storage::disk('thumbnails')->put($filename,$thumbnail);
            
            
            
            
            ProductImage::create([
                'product_id' => $id,
                'file' => $file,
                'thumbnail' => $tpath,
                'featured' => $featured,
                'order_column' => $order
            ]);
            $order++;
            $featured=0;
        }
        


        return redirect()->route('products.index')->with('success','Product has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
        
        return view ('test');
    }

 
    public function edit(Product $product)
    {
        $files = [];
        $images = $product->ProductImages->sortBy('order_column');
        
        foreach($images as $image){
            array_push($files,$image);
        }
        
        
        $categories = Category::all();
        
        return view('admin.products.edit', compact('product','categories','files'));
    }


    public function update(Request $request, Product $product)
    {
        
        $this->validate($request, array(
            'name' => "required|min:2|unique:products,name,$product->id",
            'description'=>'required|max:500',
            'price'=>'required|numeric',
            'category_id'=>'required',
           
            
       
        ));
        $product->update($request->all());
        

        return redirect()->route('products.index')->with('succes','Product has been updated!');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('error','Product has been deleted!');
    }

    private function validateRequest(){
        
        return request()->validate(
            
        [
            'name' => "required|min:2|unique:products,name",
            'description'=>'required|max:500',
            'price'=>'required|numeric',
            'category_id'=>'required'
        ]);
        
    }

    public function getProductImages($id){
        $contents = Storage::get();
        dd($contents);
    }

    public function newFeatureImage(){

    }
}
