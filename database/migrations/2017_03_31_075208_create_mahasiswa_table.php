<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('mahasiswa', function (Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('roles_id')->nullable();   
            $table->string('nim');
            $table->string('nama');
            $table->string('panggilan');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('golongan_darah');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('telepon');
            $table->string('hp');
            $table->string('email')->unique();
            $table->string('alamat');
            $table->string('jumlah_saudara');
            $table->string('anak_ke');
            $table->string('daerah_asal');
            $table->string('sekolah_asal');
            $table->string('status_sekolah');
            $table->string('jurusan_sekolah');
            $table->string('prodi_sekolah');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('alamat_ortu');
            $table->string('jalur_masuk');
            $table->date('tanggal_masuk');
            $table->string('prodi');         
            $table->string('username')->unique();
            $table->string('password');
            $table->string('aktif');
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
        Schema::drop('mahasiswa');
    }
}
