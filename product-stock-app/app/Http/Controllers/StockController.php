<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Product;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();
        return view('stocks.stock_index', compact('stocks'));
    }

    public function create()
    {
        $products = Product::all();
        return view('stocks.stock_create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        Stock::create([
            'product_id' => $request->input('product_id'),
            'quantity' => $request->input('quantity'),
        ]);

        return redirect()->route('stocks.index')->with('success', 'Stok başarıyla eklendi.');
    }

    public function show($id)
    {
        $stock = Stock::findOrFail($id);
        return view('stocks.stock_show', compact('stock'));
    }

    public function edit($id)
    {
        $stock = Stock::findOrFail($id);
        $products = Product::all();
        return view('stocks.stock_edit', compact('stock', 'products'));
    }

    public function update(Request $request, $id)
    {
        $stock = Stock::findOrFail($id);
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $stock->update([
            'product_id' => $request->input('product_id'),
            'quantity' => $request->input('quantity'),
        ]);

        return redirect()->route('stocks.index')->with('success', 'Stok başarıyla güncellendi.');
    }

    public function destroy($id)
    {
        Stock::destroy($id);
        return redirect()->route('stocks.index')->with('success', 'Stok başarıyla silindi.');
    }
}
