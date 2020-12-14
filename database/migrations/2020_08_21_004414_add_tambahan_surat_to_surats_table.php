<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTambahanSuratToSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surats', function (Blueprint $table) {
            $table->string('tujuan');
            //$table->string('asal_surat');
            // $table->date('tanggal_terima_surat');
            // $table->string('no_asal_surat');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surats', function (Blueprint $table) {
            //
        });
    }
}
