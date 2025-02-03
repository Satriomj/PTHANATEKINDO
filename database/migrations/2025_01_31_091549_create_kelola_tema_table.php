<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelolaTemaTable extends Migration
{
    public function up(): void
    {
        Schema::create('kelola_tema', function (Blueprint $table) {
            $table->id();
            $table->string('background_image')->nullable();
            $table->string('logo_image')->nullable();
            $table->json('menu_navigation')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kelola_tema');
    }
}