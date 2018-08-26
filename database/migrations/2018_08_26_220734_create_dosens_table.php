<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip', 15)->unique();
            $table->string('nama_lengkap', 35);
            $table->enum('jenis_kelamim',['Laki-laki','Perempuan']);
            $table->string('tempat_lahir', 35);
            $table->date('tanggal_lahir');
            $table->enum('status_nikah',['Nikah','Lajang','Janda','Duda']);
            $table->text('alamat');
            $table->string('telpon');
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
        Schema::dropIfExists('dosens');
    }
}
