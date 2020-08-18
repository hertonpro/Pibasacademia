<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetraitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retrait', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pinCl');
            $table->string('montant');
            $table->string('statu')->default('0');
            $table->string('agent')->default('SYST')->index();
            $table->stringpinCl('conf')->unique();
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
        Schema::dropIfExists('retrait');
    }
}
