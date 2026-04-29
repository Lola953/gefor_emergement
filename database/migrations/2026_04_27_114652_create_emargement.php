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
        Schema::create('emargement', function (Blueprint $table) {
            $table->id();
            $table->string('signature');
            $table->timestamps();
            $table->date('date');
            $table->time('heure');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('cours_id')->constrained()->onDelete('cascade');
            
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emargement');
    }
};
