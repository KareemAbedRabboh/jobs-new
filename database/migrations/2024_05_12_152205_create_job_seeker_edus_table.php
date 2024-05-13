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
        Schema::create('job_seeker_edus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('files_id'); 
            $table->unsignedBigInteger('job_seekers_id');
            $table->unsignedBigInteger('majors_id'); 
            $table->unsignedBigInteger('academic_degrees_id'); 
            $table->unsignedBigInteger('universities_id'); 
            $table->foreign('files_id')->references('id')->on('files');
            $table->foreign('job_seekers_id')->references('id')->on('job_seekers');
            $table->foreign('majors_id')->references('id')->on('majors');
            $table->foreign('academic_degrees_id')->references('id')->on('academic_degrees');
            $table->foreign('universities_id')->references('id')->on('universities');
            $table->string('StartDate');
            $table->string('EndDate');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seeker_edus');
    }
};
