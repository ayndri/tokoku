<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('idProduk');
            $table->string('namaProduk');
            $table->text('deskProduk');
            $table->string('fotoProduk');
            $table->string('sku')->nullable();
            $table->integer('idGaleri')->nullable();
            $table->integer('idKategori')->nullable();
            $table->integer('idAttr')->nullable();
            $table->integer('idTag')->nullable();
            $table->integer('idStok')->nullable();
            $table->integer('hargaProduk')->nullable();
            $table->integer('diskonProduk')->nullable();
            $table->string('shortProduk')->nullable();
            $table->string('visibiProduk')->nullable();
            $table->string('statusProduk');
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
        Schema::dropIfExists('products');
    }
};
