<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKayuKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kayu_keluar', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah');
            $table->decimal('harga_jual');
            $table->decimal('harga_total');
            $table->timestamps();
        });

        Schema::table('kayu_keluar', function (Blueprint $table) {
            $table->unsignedBigInteger('kayu_keluar_id');
            $table->foreign('kayu_keluar_id')->references('id')->on('kayu')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kayu_keluar');
    }
}
