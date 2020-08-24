<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('no_surat');
            $table->string('prihal');
            $table->string('tujuan');
            $table->string('no_asal_surat');
            $table->date('tanggal_terima_surat');
            $table->longText('keterangan');
            $table->string('file');
            $table->softDeletes();
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
        Schema::dropIfExists('keluars');
    }
}
