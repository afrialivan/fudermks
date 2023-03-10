<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('id_catering');
            $table->string('id_categori'); 
            $table->string('nama'); 
            $table->integer('harga'); 
            $table->string('slug'); 
            $table->text('isi_menu'); 
            $table->text('foto')->nullable(); 
            $table->text('deskripsi');
            $table->text('kisaran_porsi');
            $table->text('pengemasan');
            $table->text('catatan_lainnya')->nullable();
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
        Schema::dropIfExists('menus');
    }
}
