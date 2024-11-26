<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(4);
        $hour = $this->hour();
        return view('products.index', compact('products', 'hour'));
    }

    public function hour()
    {
        return Carbon::now('America/Sao_Paulo')->toTimeString();
    }


    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required:numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);
        $newProduct = Product::create($data);
        return redirect(route('product.index'));

    }
    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }
    public function update(Request $request, Product $product){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required:numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);
        $product->update($data);
        return redirect(route('product.index'))->with('success', 'ProductSeeder updated successfully');
    }
    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success', 'ProductSeeder deleted successfully');

    }
}
