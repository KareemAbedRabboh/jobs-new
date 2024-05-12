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
        Schema::create('job_seeker_knowledgers', function (Blueprint $table) {
            $table->id();
            $table->foreign('job_seekers_id')->references('id')->on('job_seekers');
            $table->foreign('relationships_id')->references('id')->on('relationships');
            $table->string('KnowledgersName');
            $table->string('JobTitle');
            $table->string('CompanyInto');
            $table->integer('DirectCommunication');
            $table->string('email')->uniqe();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seeker_knowledgers');
    }
};
