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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');  
            $table->string('phone');
            $table->string('country')->default('BD');
            $table->string('age')->default('18');        
            $table->enum('status', ['Active','Inactive'])->default('Inactive');
            $table->timestamps();

            $table->index('first_name');
            $table->index('last_name');
            $table->unique('phone');
            //$table->index(['first_name', 'last_name']);

            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
