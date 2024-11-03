<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9fafb;
    }

    .container {
        max-width: 600px;
        background-color: #ffffff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    .table {
        width: 100%;
        margin-bottom: 20px;
    }

    td {
        padding: 10px;
        vertical-align: middle;
    }

    label {
        font-weight: bold;
        color: #555;
    }

    input[type="text"],
    select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border-radius: 4px;
        padding: 10px;
        margin-bottom: 20px;
    }

    .btn-primary {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>

<div class="container">
    <h1>Tambah Barang</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('barangs.store') }}" method="POST">
        @csrf
        <table class="table">
            <tr>
                <td><label for="nama_barang">Nama Barang:</label></td>
                <td><input type="text" name="nama_barang" id="nama_barang" class="form-control" required></td>
            </tr>
            <tr>
                <td><label for="jenis_barang">Jenis Barang:</label></td>
                <td><input type="text" name="jenis_barang" id="jenis_barang" class="form-control" required></td>
            </tr>
            <tr>
                <td><label for="harga_barang">Harga Satuan:</label></td>
                <td><input type="text" name="harga_barang" id="harga_barang" class="form-control" placeholder="Masukkan harga" value="0" required></td>
            </tr>
            <tr>
                <td><label for="jumlah_barang">Jumlah Barang:</label></td>
                <td><input type="text" name="jumlah_barang" id="jumlah_barang" class="form-control" placeholder="Masukkan jumlah barang" required></td>
            </tr>
            <tr>
                <td><label for="status">Status:</label></td>
                <td>
                    <select name="status" id="status" class="form-control">
                        <option value="Tersedia">Tersedia</option>
                        <option value="Kosong">Kosong</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="stok">Stok:</label></td>
                <td><input type="text" name="stok" id="stok" class="form-control" placeholder="Masukkan stok" value="0" required></td>
            </tr>
        </table>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<script>
    document.getElementById('stok').addEventListener('input', function() {
        const inputField = this;
        if (isNaN(inputField.value) || inputField.value.trim() === '') {
            inputField.setCustomValidity('Stok harus berupa angka.');
        } else {
            inputField.setCustomValidity('');
        }
    });
</script>
@endsection
