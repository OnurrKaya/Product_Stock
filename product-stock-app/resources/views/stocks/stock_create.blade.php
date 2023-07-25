@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Stok Ekle</h2>
        <form method="POST" action="{{ route('stocks.store') }}">
            @csrf
            <div class="form-group">
                <label for="product_id">Ürün Seçin:</label>
                <select class="form-control" id="product_id" name="product_id" required>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Miktar:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            <button type="submit" class="btn btn-primary">Ekle</button>
        </form>
    </div>
@endsection
