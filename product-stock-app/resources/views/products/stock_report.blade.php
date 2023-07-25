@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ürün Bazlı Stok Giriş Raporu - {{ $product->name }}</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Tarih</th>
                    <th>Miktar</th>
                </tr>
            </thead>
            <tbody>
                @if ($product->stocks !== null && count($product->stocks) > 0)
                    @foreach ($product->stocks as $stock)
                        <tr>
                            <td>{{ $stock->created_at }}</td>
                            <td>{{ $stock->quantity }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="2">Stok girişi bulunmamaktadır.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
