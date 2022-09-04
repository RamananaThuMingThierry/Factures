<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index_factures', function (Blueprint $table) {
            $table->id();
            $table->decimal('dernier_consommation',8,2);
            $table->decimal('nouvel_consommation',8,2);
            $table->integer('status')->default(0);
            $table->foreignId('portes_id')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('mois_factures_id')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('index_factures');
    }
}
