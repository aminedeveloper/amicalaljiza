<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrancheMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tranche_media', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tranche_id')->nullable();
            $table->foreign('tranche_id')->references('id')->on('tranches')->onDelete('cascade');

            $table->string('path');
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
        Schema::dropIfExists('tranche_media');
    }
}
