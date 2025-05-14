<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Services - Donkraft Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.5/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        .service-card:hover .service-icon {
            transform: rotateY(180deg);
        }
        .gradient-text {
            background: linear-gradient(45deg, #3B82F6, #6366F1);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .service-card {
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .card-content {
            flex-grow: 1;
        }
    </style>
    <!-- Same head section as original -->
</head>
<body class="bg-gray-900">
    @include('layouts.navigation')

    <!-- Updated Hero Section -->
    <div class="gradient-bg text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
            <div class="md:flex md:items-center md:justify-between">
                <div class="md:w-1/2 md:pr-12">
                    <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl md:text-6xl leading-tight">
                        Universal Project <span class="text-blue-300">Management</span>
                    </h1>
                    <p class="mt-6 text-xl text-blue-100">
                        Effective project management transcends industries. We bring structured, results-driven leadership to all your business initiatives.
                    </p>
                    <div class="mt-8">
                        <span class="inline-flex bg-blue-800 bg-opacity-40 rounded-md px-4 py-2 text-sm font-medium">
                            Mission: Expanding Possibilities, One Project at a Time
                        </span>
                    </div>
                </div>
                <div class="mt-8 md:mt-0 md:w-1/2">
                    <img src="/images/4002785-removebg-preview.png" alt="Project Management" class="rounded-xl mx-auto pulse-animation">
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-blue-600 font-semibold">OUR APPROACH</span>
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mt-2">Cross-Industry Project Excellence</h2>
                <div class="mt-2 h-1 w-20 bg-blue-600 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="rounded-xl overflow-hidden">
                    <img src="/images/20943956.jpg" alt="Project Examples" class="w-full h-auto transition duration-500 hover:scale-105">
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Diverse Project Portfolio</h3>
                    <p class="text-lg text-gray-600 mb-6">
                        We adapt our proven methodologies to various business initiatives:
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <span class="text-gray-700 font-medium">Product Launches</span>
                                <p class="text-gray-600 text-sm">End-to-end management from concept to market rollout</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <span class="text-gray-700 font-medium">Operational Expansions</span>
                                <p class="text-gray-600 text-sm">Facility expansions and process optimization projects</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <span class="text-gray-700 font-medium">Strategic Initiatives</span>
                                <p class="text-gray-600 text-sm">Implementation of organizational change and growth strategies</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Why Choose Us Section -->
            <div class="mt-20">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Why Partner With Us?</h2>
                    <div class="mt-2 h-1 w-20 bg-blue-600 mx-auto"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-xl shadow-md p-6 card-hover">
                        <div class="text-blue-600 text-4xl mb-4">
                            <i class="fas fa-chess-queen"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Custom-Tailored Approach</h3>
                        <p class="text-gray-600">Strategies adapted to your unique organizational goals and challenges</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md p-6 card-hover">
                        <div class="text-blue-600 text-4xl mb-4">
                            <i class="fas fa-comments-dollar"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Complete Transparency</h3>
                        <p class="text-gray-600">Real-time updates and clear communication throughout project lifecycles</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md p-6 card-hover">
                        <div class="text-blue-600 text-4xl mb-4">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Future-Ready Focus</h3>
                        <p class="text-gray-600">Integrated support for upcoming digital transformation needs</p>
                    </div>
                </div>
            </div>

            <!-- Engagement Section -->
            <div class="mt-20 bg-blue-50 rounded-xl p-8">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Case-by-Case Engagement</h2>
                    <div class="mt-2 h-1 w-20 bg-blue-600 mx-auto"></div>
                    <p class="mt-6 text-lg text-gray-600">
                        Every project receives personalized attention with flexible engagement models:
                    </p>
                    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white p-6 rounded-lg shadow-sm">
                            <h4 class="font-bold text-gray-800 mb-2">Phased Rollouts</h4>
                            <p class="text-gray-600 text-sm">Modular implementation aligned with your readiness</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm">
                            <h4 class="font-bold text-gray-800 mb-2">Hybrid Teams</h4>
                            <p class="text-gray-600 text-sm">Integration with your existing workforce and processes</p>
                        </div>
                    </div>
                    <div class="mt-8">
                        <button class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition duration-300">
                            Start Your Project
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

</body>
</html>
