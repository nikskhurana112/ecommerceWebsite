<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add(){
        return view("admin.add");
    }
    public function create(Request $req){
        $data['name'] = $req->product_name;
        $data['description'] = $req->product_description;
        $data['price'] = $req->product_price;
        $data['imagePath'] = $req->image_path->store("product", ['disk' => 'public']);

        Product::create($data);
        session()->flash("success", "Product added Successfully");
        return redirect()->back();
    }

    public function displayTable(){
        $products = Product::latest()->paginate(10);
        return view("admin.products_table")->with(['products' => $products]);
    }
    public function deleteProduct(Request $req){
        $product = Product::where('id', '=', $req->id)->delete();
        return redirect()->back();
    }
    public function editProduct(Request $req){
        $product = Product::find($req->id);
        return view('admin.edit')->with(['product' => $product]);
    }
    public function updateProduct(Request $req){
        $product = Product::find($req->id);
        $product->name = $req->name;
        $product->description = $req->description;
        $product->imagePath = $req->imagePath;
        $product->price = $req->price;

        $product->save();
        return redirect()->route("admin.product.product_list");
    }
    
}
