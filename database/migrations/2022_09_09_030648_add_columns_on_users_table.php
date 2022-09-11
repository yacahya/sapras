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
        Schema::table('users', function (Blueprint $table) {
            $table->string("nik")->after("id")->nullable();
            $table->string("alamat")->after("id")->nullable();
            $table->string("temp_lahir")->after("id")->nullable();
            $table->string("tgl_lahir")->after("id")->nullable();
            $table->string("no_hp")->after("id")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
