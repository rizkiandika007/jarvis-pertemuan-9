<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->date('deadline');
            $table->foreignId('status_id')->constrained('status');
            $table->foreignId('categories_id')->constrained('categories');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('task');
    }
};