<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    // Display workout planner page
    public function index()
    {
        // Get the workouts from session (if any)
        $workouts = session('workouts', []);

        // Calculate total reps, sets, and total workouts
        $totalReps = array_sum(array_column($workouts, 'reps'));
        $totalSets = array_sum(array_column($workouts, 'sets'));
        $totalWorkouts = count($workouts);

        // Pass data to the view (workout.index)
        return view('workout.index', compact('workouts', 'totalReps', 'totalSets', 'totalWorkouts'));
    }

    // Add a new workout to the session
    public function addWorkout(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'workout_name' => 'required|string|max:255',
            'reps' => 'required|integer|min:1',
            'sets' => 'required|integer|min:1',
        ]);

        // Prepare the workout data
        $workout = [
            'name' => $request->workout_name,
            'reps' => $request->reps,
            'sets' => $request->sets,
        ];

        // Get current workouts from session or create a new array if empty
        $workouts = session('workouts', []);

        // Add new workout to the workouts array
        $workouts[] = $workout;

        // Save updated workouts to session
        session(['workouts' => $workouts]);

        // Redirect back to the plan-your-workout page with success message
        return redirect()->route('planYourWorkout')->with('message', 'Workout added!');
    }

    // Delete a specific workout from session
    public function deleteWorkout($index)
    {
        // Get current workouts from session
        $workouts = session('workouts', []);

        // Check if workout exists at the given index and delete it
        if (isset($workouts[$index])) {
            unset($workouts[$index]);
            session(['workouts' => array_values($workouts)]);  // Reindex the array
        }

        // Redirect back to the plan-your-workout page with success message
        return redirect()->route('planYourWorkout')->with('message', 'Workout deleted!');
    }

    // Clear all workouts from session
    public function clearWorkouts()
    {
        // Forget the workouts session data
        session()->forget('workouts');

        // Redirect back to the plan-your-workout page with success message
        return redirect()->route('planYourWorkout')->with('message', 'All workouts cleared!');
    }
}
