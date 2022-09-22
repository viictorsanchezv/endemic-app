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
        Schema::create('disease_treatment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('treatments_id')->constrained('treatments')
                ->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('disease_id')->constrained('disease')
                ->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('disease_treatment');
    }
};
