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
        Schema::create('cause_disease', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cause_id')->constrained('causes')
                ->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('disease_id')->constrained('diseases')
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
        Schema::dropIfExists('cause_disease');
    }
};
