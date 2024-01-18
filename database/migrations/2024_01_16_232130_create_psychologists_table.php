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
        Schema::create('psychologists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->string("name");
            $table->string("photo_perfil")->nullable()->default(null);
            $table->string("crp")->unique();
            $table->string("cpf")->unique();
            $table->string("phone");
            $table->string("email");
            $table->enum("status", ["active", "inative"])->default("active");
            $table->double("price", 8, 2);
            $table->integer("session_time");
            $table->string("experience");
            $table->string("specialty");
            $table->string("graduation");
            $table->json("approaches");
            $table->text("resume");
            $table->timestamps();

            $table->foreign("user_id")
                ->references("id")
                ->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psychologists');
    }
};
