<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatadirisTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datadiris', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_lengkap');
            $table->string('tempat_tgl_lahir');
            $table->string('alamat');
            $table->integer('no_telp');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('hobi')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('datadiris');
    }
}
