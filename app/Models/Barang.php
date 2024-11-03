<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'nama_barang',
        'jenis_barang',
        'harga_barang',
        'jumlah_barang',
        'status',
        'stok',
    ];
}
