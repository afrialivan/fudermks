<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCateringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caterings', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->nullable();
            $table->string('ig')->nullable();
            $table->string('nama');
            $table->string('slug');
            $table->text('deskripsi')->nullable();
            $table->text('alamat');
            $table->text('logo');
            $table->text('ktp');
            $table->text('selfi_ktp');
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
        Schema::dropIfExists('caterings');
    }
}
