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
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->foreignId("statistique_id")->constrained()->onDelete("cascade");
            $table->text("libelle");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("commentaires", function(Blueprint $table){
            $table->dropConstrainedForeignIdFor("statistique_id");
        });

        Schema::dropIfExists('commentaires');
    }
};
