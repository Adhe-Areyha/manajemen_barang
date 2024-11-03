<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Barang</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Pastikan Anda sudah menginstal Bootstrap jika menggunakan CSS ini -->
</head>
<body>
    <div class="container">
        @yield('content') <!-- Konten dari view lain akan ditampilkan di sini -->
    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Jika Anda menggunakan JavaScript -->
</body>
</html>
