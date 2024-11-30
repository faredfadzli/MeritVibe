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
        Schema::create('programmes', function (Blueprint $table) {

            $table->id();
            $table->string('prog_name');
            $table->string('prog_date');
            $table->string('prog_time');
            $table->string('prog_place');
            $table->string('prog_poster')->nullable();
            $table->string('prog_managed_by');
            $table->string('prog_pic_name');
            $table->string('prog_pic_email')->nullable();
            $table->string('prog_pic_tel');
            $table->foreignId('createdBy')->constrained('users'); // Adds the user ID as a foreign key
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programmes');
    }
};
