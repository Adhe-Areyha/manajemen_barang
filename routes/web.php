<?php

use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return redirect()->route('barangs.index'); // Redirect ke halaman barang
});

Route::resource('barangs', BarangController::class);
