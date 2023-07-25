<!DOCTYPE html>
<html>
<head>
    <title>Ürün - Stok Takip</title>
</head>
<body>
    <h1>Ürün Listesi</h1>
    <ul>
        @foreach($products as $product)
            <li>
                {{ $product->name }} - {{ $product->price }} TL
                <a href="{{ route('products.edit', $product->id) }}">Düzenle</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Sil</button>
                </form>
            </li>
        @endforeach
    </ul>

    <h1>Yeni Ürün Ekle</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Ürün Adı:</label>
        <input type="text" name="name" required>
        <label for="price">Fiyat:</label>
        <input type="number" name="price" step="0.01" required>
        <button type="submit">Ekle</button>
    </form>
</body>
</html>
