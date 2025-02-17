<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Laravel\Prompts\Prompt;

class ProductController extends Controller
{
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'name' => 'required',
            'categorie' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
        ]);


        $photoPath = $request->file('photo')->store('products', 'public');

        Product::create([
            'id'=>$request->id,
            'name' => $request->name,
            'categorie' => $request->categorie,
            'photo' => $photoPath,
            'price' => $request->price,
        ]);


        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }




    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function index_admin()
    {
        $products = Product::all();
        return view('admin', compact('products'));
    }
    

    public function edit($id)
{
    $product = Product::findOrFail($id); // Retrieve the item from DB
    return view('products.edit', compact('product'));
}


public function update(Request $request, $id)
{
    $request->validate([
        'id'=>'required',
        'name' => 'required',
        'categorie' => 'required',
        'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'price' => 'required|numeric',
    ]);

    $product = Product::findOrFail($id);
    $product->id = $request->id;
    $product->name = $request->name;
    $product->categorie = $request->categorie;
    if ($request->hasFile('photo')) {
        $product->photo = $request->file('photo')->store('products', 'public');
    }
    $product->price = $request->price;
    $product->save();

    // تحقق إذا كان هناك صورة جديدة
    

    return redirect()->route('admin')->with('success', 'Item updated successfully!');
}

public function destroy($id){
    $product=Product::findOrFail($id);
    $product->delete();
    return redirect()->route('products.index')->with('succes','product deleted successfully');
}

}
