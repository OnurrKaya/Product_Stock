<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    
    public function create()
    {
        return view('products.create');
    }

    
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'Ürün başarıyla eklendi.');
    }

    
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Ürün başarıyla güncellendi.');
    }

    
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('products.index')->with('success', 'Ürün başarıyla silindi.');
    }

    
    public function stockReport($id)
{
    $product = Product::findOrFail($id);
    return view('products.stock_report', compact('product'));
}

}
