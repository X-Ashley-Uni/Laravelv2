<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function indexProduct()
    {
        $data = DB::table("products")->get();
        return view('product.indexProduct', ['products' => $data]);
    }
    public function addProduct()
    {
        return view('product.indexProduct');
    }
    public function saveProduct(Request $req)
    {

        $validated = $req->validate([
            "description" => ['required', 'min:5'],
            "quantity" => ['required', 'min:1'],
            "price" => ['required', 'min:1'],

        ]);
        $data = Product::create($validated);

        return redirect("/indexProduct")->with('success', ' Product has been added!');
    }
    public function editProduct($id)
    {
        $data = Product::findOrFail($id);
        return view('product.editProduct', ['product' => $data]);
        return redirect('/indexProduct')->with('success', 'Product has been edited successfully!');
    }
    public function updateProduct(Request $req)
    {
        $req->validate([
            "description" => ['required', 'min:5'],
            "quantity" => ['required', 'min:1'],
            "price" => ['required', 'min:1'],
        ]);
        $data = Product::find($req->id);
        $data->description = $req->description;
        $data->quantity = $req->quantity;
        $data->price = $req->price;

        $data->save();
        return redirect('/indexProduct')->with('success', 'Product has been edited successfully!');
    }
    public function delete($id)
    {
        $delete = DB::table("products")
            ->where("id", "=", $id)
            ->delete();
        return redirect('/')->with('success', 'The Product has been deleted, hala ka jan');
    }
}
