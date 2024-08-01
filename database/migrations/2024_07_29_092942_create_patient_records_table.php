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
        Schema::create('patient_records', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->integer('patient_age');
            $table->string('patient_email');
            $table->integer('patient_height');
            $table->string('patient_bp');
            $table->date('patient_dob');
            $table->string('patient_gender');
            $table->text('patient_address');
            $table->integer('patient_weight');
            $table->dateTime('visit_date');
            $table->string('visit_purpose');
            $table->string('contact_person_name');
            $table->string('contact_person_number');
            $table->string('relationship');
            $table->text('medicines');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_records');
    }
};
