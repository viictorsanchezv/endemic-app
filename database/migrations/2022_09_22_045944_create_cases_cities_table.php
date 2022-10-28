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
        Schema::create('cases_cities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('disease_id')->constrained('disease')
                ->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('city_id')->constrained('cities')
                ->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('cases_number')->nullable();
            $table->string('infection_date');
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
        Schema::dropIfExists('cases_cities');
    }
};
