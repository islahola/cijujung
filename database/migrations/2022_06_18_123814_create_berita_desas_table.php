<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaDesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita_desas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('slug');
            $table->text('konten');
            $table->string('gambar_berita');
            $table->boolean('is_active');
            $table->integer('views');
            $table->integer('user_id');
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
        Schema::dropIfExists('berita_desas');
    }
}
