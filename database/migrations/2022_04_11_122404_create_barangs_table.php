<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->string('harga');
            $table->string('email');
            $table->string('nama_suplier');
            $table->string('status')->nullable();
            $table->string('stock');
            $table->string('image')->nullable();
            $table->unsignedInteger('uom_id');
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('kategori_id');
            $table->timestamps();
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
