<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndonesiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indonesias', function (Blueprint $table) {
            $table->id();
            $table->string('PSNOKA')->nullable();
            $table->string('PSNOKALAMA')->nullable();
            $table->string('PSNOKALAMA2')->nullable();
            $table->string('NAMA')->nullable();
            $table->string('NMCETAK')->nullable();
            $table->string('JENKEL')->nullable();
            $table->string('AGAMA')->nullable();
            $table->string('TMPLHR')->nullable();
            $table->string('TGLLHR')->nullable();
            $table->string('FLAGTANGGUNGAN')->nullable();
            $table->string('NOHP')->nullable();
            $table->string('NIK')->nullable();
            $table->string('NOKTP')->nullable();
            $table->string('TMT')->nullable();
            $table->string('TAT')->nullable();
            $table->string('NPWP')->nullable();
            $table->string('EMAIL')->nullable();
            $table->string('NOKA')->nullable();
            $table->string('KDHUBKEL')->nullable();
            $table->string('KDSTAWIN')->nullable();
            $table->string('KDNEGARA')->nullable();
            $table->string('KDGOLDARAH')->nullable();
            $table->string('KDSTATUSPST')->nullable();
            $table->string('KDKANTOR')->nullable();
            $table->string('TSINPUT')->nullable();
            $table->string('TSUPDATE')->nullable();
            $table->string('USERINPUT')->nullable();
            $table->string('USERUPDATE')->nullable();
            $table->string('TSSTATUS')->nullable();
            $table->string('DAFTAR')->nullable();
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
        Schema::dropIfExists('indonesias');
    }
}
