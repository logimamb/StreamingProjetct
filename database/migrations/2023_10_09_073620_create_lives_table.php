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
        Schema::create('lives', function (Blueprint $table) {
            $table->id();
            $table->string("titre");
            $table->text("Video");
            $table->foreignId("user_id")->constrained()->onDelete("cascade");
            //$table->foreignId("ressource_id")->constrained()->onDelete("cascade");
            $table->date("DateLive");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("lives",function(Blueprint $table){
            $table->dropConstrainedForeignId("user_id");
            $table->dropConstrainedForeignId("ressource_id");
        });
        Schema::dropIfExists('lives');
    }
};
