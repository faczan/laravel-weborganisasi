<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposal_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('NPM', 100);
            $table->string('Nama', 100);
            $table->string('Nama_0rganisasi', 100);
            $table->string('Judul_Laporan', 100);
            $table->string('Tanggal_Laporan', 100);
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
        Schema::dropIfExists('proposal_kegiatan');
    }
}
