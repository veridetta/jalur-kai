<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('petaks_id')->constrained('petaks');
            $table->string('hasil');
            $table->string('geser');
            $table->string('hasil_baru');
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
        Schema::dropIfExists('panahs');
    }
};
