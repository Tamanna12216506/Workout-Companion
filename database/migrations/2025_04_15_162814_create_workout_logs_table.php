<?php

// Updated migration for workout_logs
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Create workout_logs table
        Schema::create('workout_logs', function (Blueprint $table) {
            $table->id();
            $table->string('workout_plan_name');  // Name of the workout plan
            $table->date('date');  // Date of the workout session
            $table->integer('duration');  // Duration in minutes
            $table->string('notes')->nullable();  // Optional notes
            $table->timestamps();
        });

        // Create workout_details table
        Schema::create('workout_detail', function (Blueprint $table) {
            $table->id();
            // Foreign key linking to workout_log
            $table->string('name');  // Name of the workout
            $table->integer('sets');  // Number of sets
            $table->integer('reps');  // Number of reps
            $table->timestamps();

            // Define foreign key constraint

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workout_details');
        Schema::dropIfExists('workout_logs');
    }
};
