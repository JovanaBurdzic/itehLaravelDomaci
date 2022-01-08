<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BrisiBojuLjubimac extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ljubimacs', function (Blueprint $table) {
            $table->dropColumn('boja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ljubimacs', function (Blueprint $table) {
            $table->after('ime', function ($table) {
                $table->string('boja');
            });
        });
    }
}
