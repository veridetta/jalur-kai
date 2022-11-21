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
        Schema::create('busurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('petaks_id')->constrained('petaks');
            $table->integer('no_busur');
            $table->integer('km');
            $table->integer('antara');
            $table->integer('no_titik');
            $table->integer('lp_km');
            $table->integer('lp_hm');
            $table->string('jembatan');
            $table->integer('lb_ukur');
            $table->integer('lb_hitung');
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
        Schema::dropIfExists('busurs');
    }
};
