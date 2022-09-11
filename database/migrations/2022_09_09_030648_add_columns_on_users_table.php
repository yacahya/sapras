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
            $table->string("no_hp")->after("email")->nullable();
            $table->string("nik")->after("no_hp")->nullable();
            $table->string("temp_lahir")->after("nik")->nullable();
            $table->string("tgl_lahir")->after("temp_lahir")->nullable();
            $table->string("alamat")->after("tgl_lahir")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("no_hp");
            $table->dropColumn("nik");
            $table->dropColumn("temp_lahir");
            $table->dropColumn("tgl_lahir");
            $table->dropColumn("alamat");
        });
    }
};
