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
        Schema::create('statistiques', function (Blueprint $table) {
            $table->id();
            $table->integer("NbVue");
            $table->integer("NbLike");
            $table->integer("NbDislike");
            $table->integer("NbPartage");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistiques');
    }
};
