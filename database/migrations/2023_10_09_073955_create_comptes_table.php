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
        Schema::create('comptes', function (Blueprint $table) {
            $table->id();
            $table->string("nom")->unique();
            $table->string("lienCompte")->unique();
            //$table->foreignId("type_id")->constrained()->onDelete("cascade");
            $table->foreignId("user_id")->constrained()->onDelete("cascade");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("comptes", function(Blueprint $table){
            $table->dropConstrainedForeignId("type_id");
            $table->dropConstrainedForeignId("user_id");
        });

        Schema::dropIfExists('comptes');
    }
};
