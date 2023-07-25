@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Stok Listesi</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Ürün Adı</th>
                    <th>Miktar</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stocks as $stock)
                    <tr>
                        <td>{{ $stock->product->name }}</td>
                        <td>{{ $stock->quantity }}</td>
                        <td>
                            <form method="POST" action="{{ route('stocks.destroy', ['id' => $stock->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Stok girişini silmek istediğinizden emin misiniz?')">Sil</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('stocks.create') }}" class="btn btn-primary">Stok Ekle</a>
    </div>
@endsection
