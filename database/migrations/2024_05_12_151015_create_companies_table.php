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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('companyManager')->nullable(false); 
            $table->string('phoneNumber')->nullable(false);
            $table->string('companySections')->nullable(false);
            $table->integer('numberOfEmployees')->nullable(false); 
            $table->string('address')->nullable(false); 
            $table->string('website')->nullable(false); 
            $table->timestamps();
            $table->foreign('business_sectors_id')->references('id')->on('business_sectors');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
