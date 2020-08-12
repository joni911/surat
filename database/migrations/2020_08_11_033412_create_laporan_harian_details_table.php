<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanHarianDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_harian_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('laporan_harian_details_id')->unique();
            $table->string('nama_kegiatan');
            $table->integer('jumlah_kegiatan');
            $table->integer('alokasi_waktu');
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
        Schema::dropIfExists('laporan_harian_details');
    }
}
