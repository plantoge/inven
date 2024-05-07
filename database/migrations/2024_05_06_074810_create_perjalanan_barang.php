<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerjalananBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perjalanan_barang', function (Blueprint $table) {
            $table->char('PERBAR_ID', 50)->primary();
            $table->string('PERBAR_BARANG_ID')->nullable();
            $table->dateTime('PERBAR_TANGGAL_MASUK')->nullable();
            $table->dateTime('PERBAR_TANGGAL_PINDAH')->nullable();
            $table->string('PERBAR_RUANGAN_SEBELUM')->nullable();
            $table->string('PERBAR_RUANGAN_SEKARANG')->nullable();
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
        Schema::dropIfExists('perjalanan_barang');
    }
}
