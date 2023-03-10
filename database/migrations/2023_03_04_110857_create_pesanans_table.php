<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('id_catering');
            $table->string('id_user');
            $table->string('id_menu');
            $table->date('tgl_pengantaran');
            $table->integer('jumlah_menu');
            $table->integer('total');
            $table->enum('status', ['Belum Konfirmasi', 'Belum Bayar', 'Proses', 'Selesai'])->default('Belum Konfirmasi');
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
        Schema::dropIfExists('pesanans');
    }
}
