<?php

namespace App\Http\Controllers\Apis;

use App\Models\Brand;
use App\Models\Product;
use App\traits\ApiTrait;
use App\Models\Subcategory;
use App\Http\Services\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::all();
        return ApiTrait::data(compact('products'));
        // return response()->json(compact('products'));
    }
    public function create(){
        $brands = Brand::select('id','name_en','name_ar')->orderBy('name_en')->get();
        $subcategories = Subcategory::select('id','name_en','name_ar')->orderBy('name_en')->get();
        return  ApiTrait::data(compact('brands','subcategories'));
    }
    public function edit($id){
        $products = Product::findOrFail($id);
        $brands = Brand::select('id','name_en','name_ar')->orderBy('name_en')->get();
        $subcategories = Subcategory::select('id','name_en','name_ar')->orderBy('name_en')->get();
        return  ApiTrait::data(compact('products','brands','subcategories'));
    } 
     public function store(StoreProductRequest $request){
        $productImage = Media::upload($request->file('image'),'products');
        $data = $request->except('image');
        $data['image'] = $productImage;
        Product::create($data);
        return  ApiTrait::successMessage('product stored Success',201);
    }
    public function update(StoreProductRequest $request ,$id){
        $product = Product::findOrFail($id);
        
        $data = $request->except('image');
        if($request->hasFile('image')){
            $productImage = Media::upload($request->file('image'),'products');
            $removedPhotoPath = public_path("assets\images\products\\{$product->image}");
            Media::delete($removedPhotoPath);
            $data['image'] = $productImage;
        }
        
        $product->update($data);
       return ApiTrait::successMessage('product updated Success',200);

    }
    public function destroy($id){
        $product = Product::findOrFail($id);

        $removedPhotoPath = public_path("assets\images\products\\{$product->image}");
        Media::delete($removedPhotoPath);

        $product->delete();
       return ApiTrait::successMessage('product deleted Success',200);
    }
   
}
