<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Barang</h1>
        <form action="{{ route('barangs.update', $barang->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <label>Nama Barang:</label>
            <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" required>

            <label>Jenis Barang:</label>
            <input type="text" name="jenis_barang" value="{{ $barang->jenis_barang }}" required>

            <label>Harga Barang:</label>
            <input type="number" name="harga_barang" value="{{ $barang->harga_barang }}" step="0.01">

            <label>Jumlah Barang:</label>
            <input type="number" name="jumlah_barang" value="{{ $barang->jumlah_barang }}" required>

            <label>Status:</label>
            <select name="status">
                <option value="Tersedia" {{ $barang->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                <option value="Kosong" {{ $barang->status == 'Kosong' ? 'selected' : '' }}>Kosong</option>
            </select>

            <label>Stok:</label>
            <input type="number" name="stok" value="{{ $barang->stok }}">

            <button type="submit">Update</button>
        </form>
        <a href="{{ route('barangs.index') }}">Kembali</a>
    </div>
</body>
</html>
