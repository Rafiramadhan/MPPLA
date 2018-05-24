<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBakpaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bakpaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_bakpao');
            $table->integer('harga_bakpao');
            $table->string('path_gambar');
            $table->integer('stok_bakpao')->default(0);
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
        Schema::dropIfExists('bakpaos');
    }
}
