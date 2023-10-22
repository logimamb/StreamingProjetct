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
        Schema::disableForeignKeyConstraints();
        Schema::create('live_ressources', function (Blueprint $table) {
            $table->id();
            $table->foreignId("live_id")->constrained()->onDelete("cascade");
            $table->foreignId("ressource_id")->constrained()->onDelete("cascade");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("live_ressources", function(Blueprint $table){
            $table->dropConstrainedForeignId("live_id");
            $table->dropConstrainedForeignId("ressource_id");
        });
        
        Schema::dropIfExists('live_ressources');
    }
};
