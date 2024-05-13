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
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cities_id')->nullable(); // Define the cities_id column
            $table->unsignedBigInteger('genders_id')->nullable(); // Define the genders_id column
            $table->unsignedBigInteger('marital_statuses_id')->nullable(); // Define the marital_statuses_id column
            $table->foreign('cities_id')->references('id')->on('cities');
            $table->foreign('genders_id')->references('id')->on('genders');
            $table->foreign('marital_statuses_id')->references('id')->on('marital_statuses');
            $table->string('EndDate');
            $table->integer('JobSalary');
            $table->string('phoneNumber');
            $table->string('sec_phoneNumber');
            $table->string('Address');
            $table->string('dateofbirth');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seekers');
    }
};
