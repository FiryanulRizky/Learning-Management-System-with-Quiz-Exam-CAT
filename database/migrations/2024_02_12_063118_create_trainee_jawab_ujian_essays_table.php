<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraineeJawabUjianEssaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainee_jawab_ujian_essays', function (Blueprint $table) {
            $table->increments('id_trainee_jawab_ujian_essays');
            $table->timestamps();
            // foreign key
            $table->integer('id_soal')->unsigned();
            $table->foreign('id_soal')->references('id_soal')->on('soals')->onDelete('cascade');
            $table->integer('id_jawaban_soal_ujian')->unsigned();
            $table->foreign('id_jawaban_soal_ujian')->references('id_jawaban_soal_ujian')->on('jawaban_soal_ujians')->onDelete('cascade');
            $table->integer('id_nilai_ujian_essay')->unsigned();
            $table->foreign('id_nilai_ujian_essay')->references('id_nilai_ujian_essay')->on('nilai_ujian_essay_trainees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trainee_jawab_ujian_essays');
    }
}
