<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterBarang extends Migration
{
    public function up()
    {
        Schema::create('master_barang', function (Blueprint $table) {
            $table->char('BARANG_ID', 50)->primary();
            $table->string('BARANG_KATEGORI')->nullable();
            $table->string('BARANG_BRAND')->nullable();
            $table->string('BARANG_NOMOR')->nullable();
            $table->string('BARANG_KODE')->nullable();
            $table->string('BARANG_NAMA')->nullable();
            $table->text('BARANG_DESKRIPSI')->nullable();
            $table->string('BARANG_SATUAN')->nullable();
            $table->string('BARANG_STOK_MASTER')->nullable();
            $table->text('BARANG_CATATAN')->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_barang');
    }
}
