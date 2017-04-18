<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformasiPenggunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_pengguna', function (Blueprint $table) {
            $table->increments('id_informasi_pengguna');
            $table->string('nama_lengkap');
            $table->Integer('jenis_kelamin_id')->unsigned();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->Integer('agama_id')->unsigned();
            $table->Integer('status_perkawinan_id')->unsigned();
            $table->string('pekerjaan');
            $table->string('avatar');
            $table->timestamps();
            $table->Integer('users_id')->unsigned();
            $table->foreign('jenis_kelamin_id')->references('id_jenis_kelamin')->on('referensi_jenis_kelamin');
            $table->foreign('agama_id')->references('id_agama')->on('referensi_agama');
            $table->foreign('status_perkawinan_id')->references('id_status_perkawinan')->on('referensi_status_perkawinan');
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informasi_pengguna');
    }
}
