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
        Schema::create('companyAchievements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('companies_id'); 
            $table->foreign('companies_id')->references('id')->on('companies');
            $table->string('Projects');
            $table->string('CommunityContributions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companyAchivements');
    }
};
