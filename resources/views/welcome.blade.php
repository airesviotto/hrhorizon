<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME')}}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <img src="{{ asset('images/logo.png') }}" alt="HRHorizon Logo" class="h-10 w-auto">
                <span class="font-bold text-xl text-gray-600">HRHorizon</span>
            </div>
            <nav class="space-x-4">
                <a href="#" class="text-gray-600 hover:text-blue-600">Register</a>
                <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Login</a>
            </nav>
        </div>
    </header>

    <!-- Hero -->
    <section class="text-center py-20 bg-gradient-to-r from-blue-50 to-blue-100">
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900">
            Streamline Your HR Management
        </h1>
        <p class="mt-4 text-lg text-gray-600">
            Manage your teams, departments, and workflows with a modern, intuitive platform.
        </p>
        <div class="mt-6">
            <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700">Get Started</a>
        </div>
    </section>

    <!-- Features -->
    <section class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-3 gap-10">
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h3 class="font-bold text-xl mb-2 text-blue-600">Team Management</h3>
            <p class="text-gray-600">Organize employees across HR, Marketing, Logistics, and more with ease.</p>
        </div>
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h3 class="font-bold text-xl mb-2 text-blue-600">Performance Tracking</h3>
            <p class="text-gray-600">Monitor progress, goals, and growth of every team member.</p>
        </div>
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h3 class="font-bold text-xl mb-2 text-blue-600">Centralized Dashboard</h3>
            <p class="text-gray-600">All your HR tools in one easy-to-use platform.</p>
        </div>
    </section>

    <!-- CTA -->
    <section class="text-center py-20 bg-blue-600 text-white">
        <h2 class="text-3xl font-bold">Ready to transform your HR?</h2>
        <p class="mt-3">Sign up today and take your team to the next level.</p>
        <div class="mt-6">
            <a href="#" class="bg-white text-blue-600 font-semibold px-6 py-3 rounded-xl hover:bg-gray-100">Create Account</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-300 py-6 mt-10">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <p>&copy; {{ date('Y') }} HRHorizon. All rights reserved.</p>
            <nav class="space-x-4">
                <a href="#" class="hover:text-white">Privacy</a>
                <a href="#" class="hover:text-white">Terms</a>
            </nav>
        </div>
    </footer>

</body>
</html>