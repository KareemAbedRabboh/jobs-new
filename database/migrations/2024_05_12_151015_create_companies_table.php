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
            $table->foreign('business_sectors_id')->references('id')->on('business_sectors');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('companyManger');
            $table->string('password');
            $table->varchar('phoneNumber');
            $table->string('companySections');
            $table->integer('NumberofEmployees');
            $table->string('Address');
            $table->string('WebSite');
            $table->timestamps();
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
