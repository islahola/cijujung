<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrukturPemerintahanDesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('struktur_pemerintahan_desas', function (Blueprint $table) {
            $table->id();
            $table->string("foto_pengurus");
            $table->string("nama");
            $table->string("jabatan");
            $table->string("tempat_lahir");
            $table->string("tanggal_lahir");
            $table->string("pendidikan");
            $table->string("nip");
            $table->string("user_id");
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
        Schema::dropIfExists('struktur_pemerintahan_desas');
    }
}
