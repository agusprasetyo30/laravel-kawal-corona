<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCovidTuban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid-tuban-total', function (Blueprint $table) {
            $table->id();
            $table->string('kecamatan', 15);
            $table->integer('jumlah_suspek')->nullable()->default(0);
            $table->integer('jumlah_kasus')->nullable()->default(0);
            $table->integer('jumlah_dirawat')->nullable()->default(0);
            $table->integer('jumlah_positif')->nullable()->default(0);
            $table->integer('jumlah_sembuh')->nullable()->default(0);
            $table->integer('jumlah_meninggal')->nullable()->default(0);

            $table->timestamps();
        });

        Schema::create('covid-tuban-penambahan', function (Blueprint $table) {
            $table->id();
            $table->string('kecamatan', 15);
            $table->integer('jumlah_suspek')->nullable()->default(0);
            $table->integer('jumlah_kasus')->nullable()->default(0);
            $table->integer('jumlah_dirawat')->nullable()->default(0);
            $table->integer('jumlah_positif')->nullable()->default(0);
            $table->integer('jumlah_sembuh')->nullable()->default(0);
            $table->integer('jumlah_meninggal')->nullable()->default(0);

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
        Schema::dropIfExists('covid-tuban');
    }
}
