<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKayuMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kayu_masuk', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah');
            $table->decimal('harga_beli');
            $table->decimal('harga_total');
            $table->timestamps();
        });
        Schema::table('kayu_masuk', function (Blueprint $table) {
            $table->unsignedBigInteger('kayu_masuk_id');
            $table->foreign('kayu_masuk_id')->references('id')->on('kayu')->onDelete('cascade');
            $table->unsignedBigInteger('supplier_id');
            $table->foreign('supplier_id')->references('id')->on('supplier')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kayu_masuk');
    }
}
