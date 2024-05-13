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
        Schema::create('job_skills_requirements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jobs_id'); 
            $table->unsignedBigInteger('skills_id'); 
            $table->foreign('jobs_id')->references('id')->on('jobs');
            $table->foreign('skills_id')->references('id')->on('skills');        
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_skills_requirments');
    }
};
