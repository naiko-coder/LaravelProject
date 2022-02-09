<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('masuk')->nullable();;
            $table->time('jam_msk')->nullable();;
            $table->string('pulang')->nullable();
            $table->time('jam_plng')->nullable();
            $table->date('tanggal')->nullable();;
            $table->string('nip_kyn')->nullable();;
            $table->string('nama_kyn')->nullable();;
            $table->string('jabatan_kyn')->nullable();;
            $table->string('info')->nullable();;
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
        Schema::dropIfExists('laporans');
    }
}
