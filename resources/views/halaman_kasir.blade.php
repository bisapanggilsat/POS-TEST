<!DOCTYPE html>
<html>
<head>
    <title>POS Monolith</title>
</head>
<body>
    <h1>Sistem Kasir Toko</h1>
    <p>Nama Kasir: <strong>{{ $kasir }}</strong></p>
    <p>Total Belanjaan: Rp. {{ number_format($total) }}</p>
</body>
</html>