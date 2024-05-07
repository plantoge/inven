<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->char('BARMAS_ID', 50)->primary();
            $table->char('BARMAS_BARANG_ID', 50)->nullable();
            $table->char('BARMAS_RUANGAN_ID', 50)->nullable();
            $table->string('BARMAS_NOMOR')->nullable();
            $table->string('BARMAS_KODE')->nullable();
            $table->dateTime('BARMAS_TANGGAL_MASUK')->nullable();
            $table->bigInteger('BARMAS_QTY')->nullable();
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
        Schema::dropIfExists('barang_masuk');
    }
}
