@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">About This Workout Planner</h1>

    <!-- Website Introduction -->
    <div class="card shadow-sm mb-4 animate__animated animate__fadeInUp">
        <div class="card-header bg-primary text-white">
            <i class="bi bi-info-circle-fill"></i> What is This Website?
        </div>
        <div class="card-body">
            <p>
                This Workout Planner Website is designed to provide <strong>structured, effective, and beginner-friendly workout routines</strong> along with essential fitness tools — all in one place.
            </p>
            <p>
                Whether you're starting your fitness journey or leveling up your current routine, this platform helps you find:
            </p>
            <ul>
                <li>🏋️‍♂️ Weekly Full Body, Push, Pull, and Leg Workout Plans</li>
                <li>📆 Beginner, Intermediate, and Advanced Level Routines</li>
                <li>📊 Exercise Tables with Reps, Sets & Icons</li>
                <li>🧮 Tools like BMI Chart, Diet Calculator, TDEE Calculator, Water Intake Guide & More</li>
                <li>📄 PDF Export Option for Offline Tracking</li>
                <li>📱 Mobile Responsive UI with smooth animations and modern layout</li>
            </ul>
            <p>
                Our goal is to help you stay consistent, organized, and motivated throughout your fitness journey — all without needing to install an app or create an account.
            </p>
        </div>
    </div>

    <!-- About the Creator -->
    <div class="card shadow-sm mb-4 animate__animated animate__fadeInUp">
        <div class="card-header bg-warning text-dark">
            <i class="bi bi-person-circle"></i> Meet the Creator
        </div>
        <div class="card-body">
        <p>
    <strong>Dependra Singh</strong> & <strong>Tamanna</strong> — Full-stack Developers and Designers — are the creators of this project.
</p>
<p>
    "As developers passionate about both coding and health, we wanted to create a platform that empowers others to take control of their fitness — using smart tools, clean design, and science-backed plans."
</p>
<p>
    Developed using Laravel & Blade, with Bootstrap and Animate.css for a modern UI, this website reflects our love for simplicity, performance, and user-first experiences.
</p>

<div class="text-center mt-3">
    <a href="https://www.linkedin.com/in/dependra-singh-397a3424a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" class="btn btn-outline-dark btn-sm m-2">
        <i class="bi bi-linkedin"></i> Dependra's LinkedIn
    </a>
    <a href="mailto:dependrasingh@example.com" class="btn btn-outline-dark btn-sm m-2">
        <i class="bi bi-envelope-fill"></i>  Email
    </a>

    <a href="linkedin.com/in/tamannayadav01" target="_blank" class="btn btn-outline-dark btn-sm m-2">
        <i class="bi bi-linkedin"></i> Tamanna's LinkedIn
    </a>
    <a href="mailto:tamannayadav741@gmail.com" class="btn btn-outline-dark btn-sm m-2">
        <i class="bi bi-envelope-fill"></i> Email
    </a>
</div>

                
            </div>
        </div>
    </div>

    <!-- Tools Used -->
    <div class="card shadow-sm mb-4 animate__animated animate__fadeInUp">
        <div class="card-header bg-success text-white">
            <i class="bi bi-tools"></i> Tools & Features
        </div>
        <div class="card-body">
            <ul class="mb-3">
                <li>💪 <strong>Workout Plans:</strong> Full Body, Push, Pull, and Weekly Routines</li>
                <li>📅 <strong>Split Generator:</strong> Auto Weekly Plan by Level</li>
                <li>⚖️ <strong>BMI Chart:</strong> Know your ideal weight range</li>
                <li>🥗 <strong>Diet Calculator:</strong> Nutrition Recommendations</li>
                <li>💧 <strong>Water Intake Guide:</strong> Daily hydration goal</li>
                <li>🔥 <strong>TDEE Calculator:</strong> Total Daily Energy Expenditure</li>
                <li>📄 <strong>PDF/Print Mode:</strong> Export plans offline</li>
            </ul>
            <p>Each tool is made with precision to support a healthy, trackable, and goal-oriented fitness lifestyle.</p>
        </div>
    </div>

    <!-- Technology Stack -->
    <div class="card shadow-sm mb-4 animate__animated animate__fadeInUp">
        <div class="card-header bg-dark text-white">
            <i class="bi bi-cpu-fill"></i> Tech Stack Behind the Website
        </div>
        <div class="card-body">
            <ul>
                <li><strong>Framework:</strong> Laravel (PHP)</li>
                <li><strong>Templating Engine:</strong> Blade</li>
                <li><strong>Frontend:</strong> Bootstrap 5, Animate.css, Custom CSS</li>
                <li><strong>Icons:</strong> Bootstrap Icons</li>
                <li><strong>Deployment:</strong> Apache Server (Locally or on Hosting Platforms)</li>
                <li><strong>Tools & Scripts:</strong> Vanilla JavaScript for calculators</li>
            </ul>
            <p>Optimized for performance, responsive design, and smooth animations.</p>
        </div>
    </div>

    <!-- Final Note -->
    <div class="card shadow-sm mb-5 animate__animated animate__fadeInUp">
        <div class="card-header bg-info text-white">
            <i class="bi bi-rocket-takeoff"></i> Our Mission
        </div>
        <div class="card-body">
            <p>
                This platform is made with love and discipline — aiming to help people lead a healthier lifestyle without overcomplicating fitness. No login. No hidden costs. Just effective planning and smart tools.
            </p>
            <p class="mb-0">
                💡 If you find it useful, feel free to share with friends or drop a message. Your fitness journey starts here!
            </p>
        </div>
    </div>
</div>
@endsection
