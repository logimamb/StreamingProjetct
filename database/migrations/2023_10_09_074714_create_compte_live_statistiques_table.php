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
        Schema::create('compte_live_statistiques', function (Blueprint $table) {
            $table->id();
            $table->foreignId("compte_id")->constrained()->onDelete("cascade");
            $table->foreignId("live_id")->constrained()->onDelete("cascade");
            $table->foreignId("statistique_id")->constrained()->onDelete("cascade");
            //$table->foreignId("ressource_id")->constrained()->onDelete("cascade");
            //$table->date("dateRealisation");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("compte_live_statistiques", function(Blueprint $table){
            $table->dropConstrainedForeignIdFor("compte_id");
            $table->dropConstrainedForeignIdFor("live_id");
            $table->dropConstrainedForeignIdFor("statistique_id");
            //$table->dropConstrainedForeignIdFor("ressource_id");
        });
        Schema::dropIfExists('compte_live_statistiques');
    }
};
