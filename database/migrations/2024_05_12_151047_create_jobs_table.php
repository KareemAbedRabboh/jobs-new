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
    Schema::create('jobs', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('job_levels_id'); 
        $table->foreign('job_levels_id')->references('id')->on('job_levels');
        $table->unsignedBigInteger('companies_id'); 
        $table->foreign('companies_id')->references('id')->on('companies');
        $table->unsignedBigInteger('cities_id'); 
        $table->foreign('cities_id')->references('id')->on('cities');
        $table->string('JobTitle');
        $table->string('StartDate');
        $table->string('EndDate');
        $table->integer('JobSalary');
        $table->string('phoneNumber');
        $table->string('JobDescription');
        $table->string('Address');
        $table->string('ContractType');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       //
    }
};
