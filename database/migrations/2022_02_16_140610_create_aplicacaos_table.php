<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAplicacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aplicacaos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('nomeloja');
            $table->text('numerodaloja');
            $table->text('faixadeip');
            $table->text('gateway');
            $table->text('mascara');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aplicacaos');
    }
}
