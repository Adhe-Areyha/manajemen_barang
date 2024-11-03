<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id(); // Kolom ID otomatis
            $table->string('nama_barang'); // Kolom nama barang
            $table->string('jenis_barang'); // Kolom jenis barang
            $table->decimal('harga_barang', 10, 2)->nullable(); // Kolom harga barang (nullable)
            $table->integer('jumlah_barang'); // Kolom jumlah barang
            $table->enum('status', ['Tersedia', 'Kosong'])->nullable(); // Kolom status barang (nullable)
            $table->integer('stok')->nullable(); // Kolom stok (nullable)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}