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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('class', ['Warrior', 'Archer', 'Wizard']);
            $table->integer('health')->default(80); 
            $table->integer('level');
            $table->mediumText('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement("ALTER TABLE characters ADD CONSTRAINT chk_level_range CHECK (level BETWEEN 1 AND 100)");
        DB::statement("ALTER TABLE characters ADD CONSTRAINT chk_class CHECK (class IN ('Warrior', 'Archer', 'Wizard'))");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
