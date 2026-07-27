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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name', 25);
            $table->string('icon', 50);
            $table->enum('category', [
                'Programming Languages',
                'Frameworks & Libraries',
                'Database',
                'Tools',
                'DevOps & Deployment',
                'UI/UX',
                'Cybersecurity',
                'Soft Skills',
            ]);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
