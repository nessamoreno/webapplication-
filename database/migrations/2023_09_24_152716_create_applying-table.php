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
        Schema::create('applying', function (Blueprint $table) {
            $table->id();
            $table->string('first_surname');
            $table->string('middle_name');
            $table->string('first_last_name');
            $table->string('second_last_name');
            $table->date('date_birth');
            $table->enum('type_document', ['identification', 'passport ','foreign_identification']);
            $table->string('document_number');
            $table->string('nationality');
            $table->string('city');
            $table->string('email')->unique();
            $table->string('cell_phone_number')->varchar(11);
            $table->string('adress');
            $table->string('neighborhood');
            $table->string('monthly_income');
            $table->enum('type_work',['part_time','time_full','self_employed','other']);
            $table->string('full_name');
            $table->string('identification');
            $table->string('cell_phone_number_family');
            $table->string('address');
            $table->enum('family_type',['father','mother','brother','sister','friend','other']);
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
