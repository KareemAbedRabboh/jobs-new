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
        Schema::create('job_seeker_trains', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('files_id');
            $table->foreign('files_id')->references('id')->on('files');
            $table->string('TrainingName');
            $table->string('StartDate');
            $table->string('EndDate');
            $table->string('CompanyName');
            $table->string('TrainingDetails');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seeker_trains');
    }
};
