<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLjubimacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ljubimacs', function (Blueprint $table) {
            $table->id();
            $table->string('tip');
            $table->string('rasa');
            $table->string('ime');
            $table->string('boja');
            $table->integer('godine');
            $table->foreignId('vlasnik_id')->constrained('vlasniks');
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
        Schema::dropIfExists('ljubimacs');
    }
}
