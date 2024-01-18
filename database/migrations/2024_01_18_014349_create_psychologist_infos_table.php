<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('psychologist_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("psychologist_id");
            $table->string("zip_code");
            $table->string('street');
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state');
            $table->string('number');
            $table->timestamps();

            $table->foreign('psychologist_id')
                ->references('id')
                ->on('psychologists');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psychologist_infos');
    }
};
