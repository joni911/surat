<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJustmensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('justmens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unique();
            $table->bigInteger('laporan_harian_details_id')->unique();
            $table->integer('justment_waktu');
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
        Schema::dropIfExists('justmens');
    }
}
