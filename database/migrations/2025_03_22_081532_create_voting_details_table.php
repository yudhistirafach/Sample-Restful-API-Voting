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
        Schema::create('voting_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('votedCandidateId');
            $table->unsignedBigInteger('employeeId');
            $table->timestamps();

            $table->foreign('votedCandidateId')->references('id')->on('voting_candidates');
            $table->foreign('employeeId')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voting_details');
    }
};
