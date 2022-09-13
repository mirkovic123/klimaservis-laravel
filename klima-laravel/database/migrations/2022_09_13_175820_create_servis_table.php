<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servis', function (Blueprint $table) {
            $table->id();
            $table->string('datum');
            $table->string('tip');
            $table->double('cena');
            $table->string('serviser');
            $table->string('napomena');
            $table->foreignId('klijent_id')->constrained('klijents');
            $table->foreignId('firma_id')->constrained('firmas');
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
        Schema::dropIfExists('servis');
    }
}
