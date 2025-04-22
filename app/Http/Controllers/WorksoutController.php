<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workout;

class WorksoutController extends Controller
{
    public function index()
    {

        $workouts = []; // or use collect() if you prefer Laravel collection
        return view('workout.index1', compact('workouts'));
    }

    public function filter(Request $request)
    {
        $query = Workout::query();

        if ($request->has('type')) {
            $query->where('type', $request->type);
        }

        if ($request->has('intensity')) {
            $query->where('intensity', $request->intensity);
        }

        if ($request->has('duration')) {
            $query->where('duration', '<=', $request->duration);
        }

        $workouts = $query->get();
        // return response()->json(['Workout'=>$workouts]);
        return view('workout.index1', compact('workouts'));
    }
}

