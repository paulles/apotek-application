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
        Schema::create('data_periksas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_periksa');
            $table->string('tgl_periksa');
            $table->integer('id_dokter');
            $table->integer('id_pasien');
            $table->string('hsl_diagnosa');
            $table->integer('id_obat');
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
        Schema::dropIfExists('data_periksas');
    }
};
