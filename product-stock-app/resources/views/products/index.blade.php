@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ürün Listesi</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Ürün Adı</th>
                    <th>Fiyat</th>
                    <th>Açıklama</th>
                    <th>Stok Giriş Raporu</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <a href="{{ route('products.stock_report', ['id' => $product->id]) }}" class="btn btn-sm btn-info">Rapor</a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('products.destroy', ['id' => $product->id]) }}">
                                 @csrf
                                 @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Ürünü silmek istediğinizden emin misiniz?')">Sil</button>
                             </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Ürün Ekle</a>
    </div>
@endsection
