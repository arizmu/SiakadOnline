<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim',   10)->unique();
            $table->string('nisn',  10)->unique();
            $table->string('nama_lengkap', 35);
            $table->enum('jenis_kelammin', ['Laki-laki','Perempuan']);
            $table->string('tempat_lahir', 25);
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('telpon', 15);
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
        Schema::dropIfExists('mahasiswas');
    }
}
