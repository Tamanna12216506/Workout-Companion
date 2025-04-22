<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\WorkoutLogController;
use App\Http\Controllers\WorksoutController;

// Home Page (separate home page)
Route::get('/', function () {
    return view('home'); // Your home page view
})->name('home');

// Workout Plans Page (all in one page)
Route::get('/plans', function () {
    return view('plans'); // All workout plans displayed on this page
})->name('plans');

// Plan Your Workout (WorkoutController's index method when clicked from the navbar)
Route::get('/plan-your-workout', [WorkoutController::class, 'index'])->name('planYourWorkout');

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/bmi', function () {
    return view('bmi');
})->name('bmi');

// Workout management routes (POST)
Route::post('/add-workout', [WorkoutController::class, 'addWorkout']);
Route::post('/delete-workout/{index}', [WorkoutController::class, 'deleteWorkout']);
Route::post('/clear-workouts', [WorkoutController::class, 'clearWorkouts']);


Route::get('/workouts', [WorksoutController::class, 'index']);
Route::get('/workouts/filter', [WorksoutController::class, 'filter']);
Route::get('/log-workout', [WorkoutLogController::class, 'index'])->name('log-workout');
Route::post('/log-workout', [WorkoutLogController::class, 'store'])->name('log-workout');

Route::delete('/log-workout/{id}', [WorkoutLogController::class, 'destroy'])->name('log-workout.destroy');



