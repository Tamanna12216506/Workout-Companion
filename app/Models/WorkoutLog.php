<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutLog extends Model
{
    use HasFactory;

    protected $fillable = ['workout_plan_name', 'date', 'duration', 'notes'];

    /**
     * Define the relationship with WorkoutDetail
     */
    public function workout_details()
    {
        return $this->hasMany(WorkoutDetail::class);
    }
}

