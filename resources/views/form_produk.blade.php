<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk POS</title>
</head>
<body>
    <h2>Form Tambah Produk Baru</h2>

    @if(session('sukses'))
        <p style="color: green; font-weight: bold;">{{ session('sukses') }}</p>
    @endif

    <form action="{{ route('produk.simpan') }}" method="POST">
        @csrf <label>Nama Produk:</label><br>
        <input type="text" name="nama_produk" required><br><br>

        <label>Harga Produk (Rp):</label><br>
        <input type="number" name="harga" required><br><br>

        <button type="submit">Simpan ke Database</button>
    </form>
</body>
</html>