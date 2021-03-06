<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_barang', 100);
            $table->string('link_gambar', 100)->nullable();
            $table->integer('quantity');
            $table->integer('harga_satuan');
            $table->integer('jumlah');
            $table->string('status', 20);
            $table->integer('pengajuan_id')->unsigned();
            $table->timestamps();
            $table->foreign('pengajuan_id')->references('id')->on('pengajuan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
