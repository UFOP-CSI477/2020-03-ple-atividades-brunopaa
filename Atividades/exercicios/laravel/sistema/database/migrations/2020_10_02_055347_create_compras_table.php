<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->datetime('now');
            $table->timestamps();
            $table->unsignedBigInteger('pessoa_id');
            $table->unsignedBigInteger('produto_id');

            $table->foreign('pessoa_id')->references('id')->on('pessoas');
            $table->foreign('produto_id')->references('id')->on('produto');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
