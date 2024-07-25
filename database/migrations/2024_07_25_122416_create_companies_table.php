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
            $table->string('compmay_name');
            $table->string('organization_no');
            $table->string('company_address');
            $table->string('postal_code');
            $table->string('city');
            $table->string('company_phone_no');
            $table->string('company_email_address');
            $table->string('contact_person_name');
            $table->string('contact_person_email');
            $table->string('contact_person_no');
            $table->enum('request_status', ['Submited', 'Approved', 'Rejected'])->default('Submited');

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
