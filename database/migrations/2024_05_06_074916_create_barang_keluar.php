<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangKeluar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_keluar', function (Blueprint $table) {
            $table->char('BARKEL_ID', 50)->primary();
            $table->char('BARKEL_BARANG_ID', 50)->nullable();
            $table->char('BARKEL_RUANGAN_ID', 50)->nullable();
            $table->string('BARKEL_NOMOR')->nullable();
            $table->string('BARKEL_KODE')->nullable();
            $table->dateTime('BARKEL_TANGGAL_KELUAR')->nullable();
            $table->bigInteger('BARKEL_QTY')->nullable();
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
        Schema::dropIfExists('barang_keluar');
    }
}
