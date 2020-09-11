<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;

class CreateMessageriemodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messageriemodels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('destination')->index();
            $table->unsignedBigInteger('expediteur')->index();
            $table->dateTime('etat')->nullable();
            $table->string('objet')->nullable();
            $table->string('contenu');
            $table->integer('status')->default('0');
            $table->foreign('destination')->references('id')->on('users');
            $table->foreign('expediteur')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messageriemodels');
    }
}
