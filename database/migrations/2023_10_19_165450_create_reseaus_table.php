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
        Schema::create('reseaus', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->text("lienReseaux")->unique();
            $table->foreignId("user_id")->constrained()->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("type_id")->constrained()->onDelete("cascade")->onUpdate("cascade");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("reseaus", function(Blueprint $table){
            $table->dropConstrainedForeignIdFor("user_id");
            $table->dropConstrainedForeignIdFor("type_id");
        });
        Schema::dropIfExists('reseaus');
    }
};
