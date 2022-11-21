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
        Schema::create('spoors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('petaks_id')->constrained('petaks');
            $table->integer('t_lama');
            $table->integer('t_baru');
            $table->integer('l_lama');
            $table->integer('l_baru');
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
        Schema::dropIfExists('spoors');
    }
};
