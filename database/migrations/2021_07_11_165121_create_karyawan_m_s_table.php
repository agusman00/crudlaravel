<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanMSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('namadepan');
            $table->string('namabelakang');
            $table->string('perusahaan');
            $table->string('email');
            $table->bigInteger('tlpn');
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
        Schema::dropIfExists('karyawan_m_s');
    }
}
