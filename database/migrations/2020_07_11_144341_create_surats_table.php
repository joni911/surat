<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('no_surat');
            $table->string('prihal');
            $table->string('asal_surat');
            $table->string('no_asal_surat');
            $table->date('tanggal_terima_surat');
            $table->longText('keterangan');
            $table->string('file');
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
        Schema::dropIfExists('surats');
    }
}
