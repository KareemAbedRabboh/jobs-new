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
        Schema::create('company_branchs', function (Blueprint $table) {
            $table->id();
            $table->string('company_branchs')->nullable(false); 
            $table->timestamps();
            $table->unsignedBigInteger('companies_id')->nullable(false); 
            $table->foreign('companies_id')->references('id')->on('companies');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_branchs');
    }
};
