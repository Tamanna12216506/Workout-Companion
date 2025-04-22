<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkoutLog;
use App\Models\WorkoutDetail;

class WorkoutLogController extends Controller
{
    public function index()
{
    $logs = WorkoutLog::with('workout_details')->latest()->get();
    return view('workout.log', compact('logs'));
}
public function destroy($id)
{
    $log = WorkoutLog::findOrFail($id);
    $log->workout_details()->delete(); // delete workouts first
    $log->delete(); // then delete the log
    return redirect()->back()->with('success', 'Workout log deleted successfully.');
}


public function store(Request $request)
{
    // Validate the input data
    $request->validate([
        'workout_plan_name' => 'required|string',
        'date' => 'required|date|after_or_equal:today',
        'duration' => 'required|integer|min:1',
        'workouts' => 'required|array|min:1',
        'workouts.*.name' => 'required|string',
        'workouts.*.sets' => 'required|integer|min:1',
        'workouts.*.reps' => 'required|integer|min:1',
        'notes' => 'nullable|string',
    ]);

    // Create a new workout log entry
    $workoutLog = WorkoutLog::create([
        'workout_plan_name' => $request->workout_plan_name,
        'date' => $request->date,
        'duration' => $request->duration,
        'notes' => $request->notes,
    ]);

    // Create workout details and associate them with the workout log
    foreach ($request->workouts as $workout) {
        $workoutLog->workout_details()->create([  // Associate workout details with the workout log
            'name' => $workout['name'],
            'sets' => $workout['sets'],
            'reps' => $workout['reps'],
        ]);
    }

    return back()->with('success', 'Workout logged!');
}
}
