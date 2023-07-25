@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Stok Detayları</h2>
        <p><strong>Ürün Adı:</strong> {{ $stock->product->name }}</p>
        <p><strong>Miktar:</strong> {{ $stock->quantity }}</p>
        <a href="{{ route('stocks.index') }}" class="btn btn-primary">Stok Listesine Geri Dön</a>
    </div>
@endsection
