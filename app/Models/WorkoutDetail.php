<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutDetail extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'sets', 'reps', 'workout_log_id'];

    /**
     * Define the inverse relationship with WorkoutLog
     */
    public function workout_log()
    {
        return $this->belongsTo(WorkoutLog::class);
    }
}

