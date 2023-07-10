<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTagihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tagihan', function (Blueprint $table) {
            $table->increments('id_pelanggan');
            $table->string('no_pelanggan');
            $table->string('nama_pelanggan');
            $table->string('alamat');
            $table->string('jml_tagihan');
            $table->string('keterangan');
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
        Schema::dropIfExists('tb_tagihan');
    }
}
