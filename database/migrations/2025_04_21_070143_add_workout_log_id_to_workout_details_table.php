<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWorkoutLogIdToWorkoutDetailsTable extends Migration
{
    public function up()
    {
        // Adding foreign key to 'workout_details' table
        Schema::table('workout_details', function (Blueprint $table) {
            // Ensure the column doesn't already exist
            if (!Schema::hasColumn('workout_details', 'workout_log_id')) {
                // Adding the foreign key column
                $table->foreignId('workout_log_id')
                      ->constrained('workout_logs')  // references 'id' in 'workout_logs' table
                      ->onDelete('cascade');        // If a workout_log is deleted, related workout_details will be deleted
            }
        });
    }

    public function down()
    {
        // Rollback the changes: Remove foreign key and the column
        Schema::table('workout_details', function (Blueprint $table) {
            $table->dropForeign(['workout_log_id']);
            $table->dropColumn('workout_log_id');
        });
    }
}

