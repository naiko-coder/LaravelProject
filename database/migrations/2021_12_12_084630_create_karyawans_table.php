<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jabatan_id');
            $table->string('nip_kyn')->unique();
            $table->string('nama_kyn');
            $table->string('email_kyn');
            $table->string('hp_kyn');
            $table->string('alamat_kyn');
            $table->enum('jk_kyn', ['Pria', 'Wanita']);
            $table->enum('agama_kyn', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Khonghucu']);
            $table->enum('status_kyn', ['Menikah', 'Belum Menikah']);
            $table->string('foto_kyn');
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
        Schema::dropIfExists('karyawans');
    }
}
