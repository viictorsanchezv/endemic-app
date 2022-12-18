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
        Schema::create('cases_city', function (Blueprint $table) {
            $table->id();
            $table->string("date");
            $table->string("cases");
            $table->foreignId('disease_id')->constrained('diseases')
                ->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('city_id')->constrained('cities')
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
        Schema::dropIfExists('cases_city');
    }
};
