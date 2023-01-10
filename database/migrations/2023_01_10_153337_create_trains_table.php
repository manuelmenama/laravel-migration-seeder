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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            /*
            Azienda
            Stazione di partenza
            Stazione di arrivo
            Orario di partenza
            Orario di arrivo
            Codice Treno
            Numero Carrozze
            In orario
            Cancellato
            */
            $table->string('company', 15);
            $table->string('from', 30);
            $table->string('to', 30);
            $table->time('departure');
            $table->time('arrival');
            $table->string('train_number', 5);
            $table->string('couch');
            $table->tinyInteger('is_on_time');
            $table->string('couch');
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
        Schema::dropIfExists('trains');
    }
};
