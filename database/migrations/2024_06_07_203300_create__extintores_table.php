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
        Schema::create('extintores', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('capacidad');
            $table->date('fechafabricacion');
            $table->string('estado', 50);
            $table->foreignId('idtipo')->constrained('tipos');
            $table->foreignId('idubicacion')->constrained('ubicaciones');
            $table->foreignId('idproveedor')->constrained('proveedores');
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
        Schema::dropIfExists('extintores');
    }
};
