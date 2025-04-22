@extends('layouts.app')

@section('title', 'Workout Tools')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Workout Tools</h1>

    <div class="row">
        <!-- BMI Calculator Tool -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg animate__animated animate__fadeInUp">
                <div class="card-header bg-info text-white">
                    <i class="bi bi-bar-chart-fill"></i> BMI Calculator
                </div>
                <div class="card-body">
                    <form id="bmiForm">
                        <div class="mb-3">
                            <label for="weight" class="form-label">Weight (kg)</label>
                            <input type="number" class="form-control" id="weight" required>
                        </div>
                        <div class="mb-3">
                            <label for="height" class="form-label">Height (cm)</label>
                            <input type="number" class="form-control" id="height" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Calculate BMI</button>
                    </form>
                    <div class="mt-3">
                        <h5>Your BMI: <span id="bmiResult">-</span></h5>
                        <p id="bmiCategory">-</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Workout Split Generator Tool -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg animate__animated animate__fadeInUp">
                <div class="card-header bg-success text-white">
                    <i class="bi bi-layout-split"></i> Workout Split Generator
                </div>
                <div class="card-body">
                    <form id="workoutForm">
                        <div class="mb-3">
                            <label for="experience" class="form-label">Experience Level</label>
                            <select class="form-select" id="experience" required>
                                <option value="beginner">Beginner</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="advanced">Advanced</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Generate Workout Split</button>
                    </form>
                    <div class="mt-3">
                        <h5>Your Workout Split:</h5>
                        <p id="workoutResult">-</p>
                    </div>
                </div>
            </div>
        </div>
         <!-- Water Intake Calculator Tool -->
         <div class="col-md-4 mb-4">
            <div class="card shadow-lg animate__animated animate__fadeInUp">
                <div class="card-header bg-info text-white">
                    <i class="bi bi-droplet-fill"></i> Water Intake Calculator
                </div>
                <div class="card-body">
                    <form id="waterForm">
                        <div class="mb-3">
                            <label for="weightWater" class="form-label">Weight (kg)</label>
                            <input type="number" class="form-control" id="weightWater" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Calculate Water Intake</button>
                    </form>
                    <div class="mt-3">
                        <h5>Recommended Water Intake: <span id="waterResult">-</span> Liters</h5>
                    </div>
                </div>
            </div>
        </div>


        <!-- Diet Calculator Tool -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg animate__animated animate__fadeInUp">
                <div class="card-header bg-warning text-dark">
                    <i class="bi bi-egg-fried"></i> Diet Calculator
                </div>
                <div class="card-body">
                    <form id="dietForm">
                        <div class="mb-3">
                            <label for="age" class="form-label">Age (years)</label>
                            <input type="number" class="form-control" id="age" required>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="weightDiet" class="form-label">Weight (kg)</label>
                            <input type="number" class="form-control" id="weightDiet" required>
                        </div>
                        <div class="mb-3">
                            <label for="heightDiet" class="form-label">Height (cm)</label>
                            <input type="number" class="form-control" id="heightDiet" required>
                        </div>
                        <div class="mb-3">
                            <label for="activityLevel" class="form-label">Activity Level</label>
                            <select class="form-select" id="activityLevel" required>
                                <option value="sedentary">Sedentary</option>
                                <option value="light">Light Activity</option>
                                <option value="moderate">Moderate Activity</option>
                                <option value="intense">Intense Activity</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Calculate Diet</button>
                    </form>
                    <div class="mt-3">
                        <h5>Your Daily Calorie Needs: <span id="dietResult">-</span> kcal</h5>
                    </div>
                </div>
            </div>
        </div>


        <!-- TDEE Calculator Tool -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg animate__animated animate__fadeInUp">
                <div class="card-header bg-warning text-dark">
                    <i class="bi bi-calculator-fill"></i> TDEE Calculator
                </div>
                <div class="card-body">
                    <form id="tdeeForm">
                        <div class="mb-3">
                            <label for="weightTdee" class="form-label">Weight (kg)</label>
                            <input type="number" class="form-control" id="weightTdee" required>
                        </div>
                        <div class="mb-3">
                            <label for="heightTdee" class="form-label">Height (cm)</label>
                            <input type="number" class="form-control" id="heightTdee" required>
                        </div>
                        <div class="mb-3">
                            <label for="ageTdee" class="form-label">Age (years)</label>
                            <input type="number" class="form-control" id="ageTdee" required>
                        </div>
                        <div class="mb-3">
                            <label for="activityLevelTdee" class="form-label">Activity Level</label>
                            <select class="form-select" id="activityLevelTdee" required>
                                <option value="sedentary">Sedentary</option>
                                <option value="light">Light Activity</option>
                                <option value="moderate">Moderate Activity</option>
                                <option value="intense">Intense Activity</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Calculate TDEE</button>
                    </form>
                    <div class="mt-3">
                        <h5>Your Total Daily Energy Expenditure (TDEE): <span id="tdeeResult">-</span> kcal</h5>
                    </div>
                </div>
            </div>
        </div>
       

    </div>
</div>

<script>
    // BMI Calculator
    document.getElementById("bmiForm").addEventListener("submit", function(e) {
        e.preventDefault();
        var weight = parseFloat(document.getElementById("weight").value);
        var height = parseFloat(document.getElementById("height").value) / 100;
        var bmi = weight / (height * height);
        var category = "";

        if (bmi < 18.5) category = "Underweight";
        else if (bmi <= 24.9) category = "Normal weight";
        else if (bmi <= 29.9) category = "Overweight";
        else category = "Obesity";

        document.getElementById("bmiResult").innerText = bmi.toFixed(2);
        document.getElementById("bmiCategory").innerText = category;
    });
    

    // Diet Calculator
    document.getElementById("dietForm").addEventListener("submit", function(e) {
        e.preventDefault();
        var age = parseInt(document.getElementById("age").value);
        var gender = document.getElementById("gender").value;
        var weight = parseFloat(document.getElementById("weightDiet").value);
        var height = parseFloat(document.getElementById("heightDiet").value);
        var activityLevel = document.getElementById("activityLevel").value;

        var bmr = gender === "male"
            ? 10 * weight + 6.25 * height - 5 * age + 5
            : 10 * weight + 6.25 * height - 5 * age - 161;

        var multiplier = {
            sedentary: 1.2,
            light: 1.375,
            moderate: 1.55,
            intense: 1.725
        };

        var tdee = bmr * multiplier[activityLevel];
        document.getElementById("dietResult").innerText = tdee.toFixed(0);
    });

    // Water Intake Calculator
    document.getElementById("waterForm").addEventListener("submit", function(e) {
        e.preventDefault();
        var weight = parseFloat(document.getElementById("weightWater").value);
        var waterIntake = weight * 0.033;
        document.getElementById("waterResult").innerText = waterIntake.toFixed(2);
    });

    // TDEE Calculator
    document.getElementById("tdeeForm").addEventListener("submit", function(e) {
        e.preventDefault();
        var weight = parseFloat(document.getElementById("weightTdee").value);
        var height = parseFloat(document.getElementById("heightTdee").value);
        var age = parseInt(document.getElementById("ageTdee").value);
        var activityLevel = document.getElementById("activityLevelTdee").value;

        var bmr = 10 * weight + 6.25 * height - 5 * age + 5;
        var multiplier = {
            sedentary: 1.2,
            light: 1.375,
            moderate: 1.55,
            intense: 1.725
        };

        var tdee = bmr * multiplier[activityLevel];
        document.getElementById("tdeeResult").innerText = tdee.toFixed(0);
    });

    // Workout Split Generator
    document.getElementById("workoutForm").addEventListener("submit", function(e) {
        e.preventDefault();
        var experience = document.getElementById("experience").value;
        var workoutSplit = "";

        switch (experience) {
            case "beginner":
                workoutSplit = "Full Body Workout (3 days/week)";
                break;
            case "intermediate":
                workoutSplit = "Push/Pull/Legs (4-5 days/week)";
                break;
            case "advanced":
                workoutSplit = "Upper/Lower Split (5-6 days/week)";
                break;
        }

        document.getElementById("workoutResult").innerText = workoutSplit;
    });
</script>

@endsection