<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gear_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->enum('condition', ['new', 'good', 'worn', 'broken']);
            $table->date('purchase_date');
            $table->decimal('value', 8, 2);
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gear_items');
    }
};