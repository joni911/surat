<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNoSuratToSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surats', function (Blueprint $table) {
            $table->string('asal_surat');
            $table->string('no_surat_input');
            $table->date('tanggal_terima_surat');

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
