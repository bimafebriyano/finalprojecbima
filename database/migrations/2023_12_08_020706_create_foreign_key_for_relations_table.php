<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeyForRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up():void

    {
        Schema::table('relations', function (Blueprint $table) {
            $table->foreign('mahasiswa_npm')->reference('npm')->on('mahasiswas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('dosen_nidn')->reference('nidn')->on('dosens')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('matakuliah_kode')->reference('kode_mk')->on('matakuliahs')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('relations',function(Blueprint$table){
            //$table->dropForeign('relation_user_id_foreign');

            $table->dropForeign('relation_mahasiswa_npm_foreign');
            $table->dropForeign('relation_dosen_nidn_foreign');
            $table->dropForeign('relation_matakuliah_kode_foreign');
        });
    }
    };
