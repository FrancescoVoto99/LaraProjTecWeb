<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->index();
            $table->string('nomeEvento',25);
            $table->string('categoria',20);
            //$table->foreign('catId')->references('catId')->on('category');
            $table->dateTime('dataOra');
            $table->string('luogo',500);
            $table->string('descrizione',2500);
            $table->string('raggiungere',1000);
            $table->float('prezzo');
            $table->integer('bigliettiDisponibili');
            $table->integer('bigliettiVenduti');
            $table->float('incassoTotale');
            $table->tinyInteger('sconto');
            $table->string('regione',20);
            $table->text('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
