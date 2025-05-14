<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donkraft IT Solutions - Our Solutions</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.5/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
        /* Modern additions */
        .gradient-bg {
            background: linear-gradient(120deg, #0a2540 0%, #1E3A8A 100%);
        }
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .text-gradient {
            background: linear-gradient(90deg, #3B82F6 0%, #2563EB 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
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
                        Independent IT Project <span class="text-blue-300">Management</span>
                    </h1>
                    <p class="mt-6 text-xl text-blue-100">
                        When your IT project is already in motion with another provider, we ensure seamless execution and optimal outcomes through expert oversight and strategic coordination.
                    </p>
                    <div class="mt-8">
                        <span class="inline-flex bg-blue-800 bg-opacity-40 rounded-md px-4 py-2 text-sm font-medium">
                            Mission: Transforming Visions Into Reality, One Project at a Time
                        </span>
                    </div>
                </div>
                <div class="mt-8 md:mt-0 md:w-1/2">
                    <img src="/images/19870-removebg-preview.png" alt="Project Management" class="rounded-xl  mx-auto pulse-animation">
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-blue-600 font-semibold">OUR EXPERTISE</span>
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mt-2">Project Management Specializations</h2>
                <div class="mt-2 h-1 w-20 bg-blue-600 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="rounded-xl overflow-hidden ">
                    <img src="/images/3911318.jpg" alt="Project Coordination" class="w-full h-auto transition duration-500 hover:scale-105">
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Comprehensive Project Oversight</h3>
                    <p class="text-lg text-gray-600 mb-6">
                        We bridge the gap between your team and existing providers to ensure successful project delivery through:
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <span class="text-gray-700 font-medium">Vendor Coordination</span>
                                <p class="text-gray-600 text-sm">Acting as the bridge between teams to align deliverables, timelines, and expectations</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <span class="text-gray-700 font-medium">Quality Assurance</span>
                                <p class="text-gray-600 text-sm">Meticulous oversight to ensure technical and business requirements are met</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <span class="text-gray-700 font-medium">Risk Management</span>
                                <p class="text-gray-600 text-sm">Proactive identification and mitigation of potential project disruptions</p>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-8">
                        <button class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition duration-300">
                            Schedule Consultation
                        </button>
                    </div>
                </div>
            </div>



            <!-- Add this section after the previous pricing section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-blue-600 font-semibold">PROFESSIONAL SERVICES</span>
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mt-2">IT Project Management Pricing</h2>
            <div class="mt-2 h-1 w-20 bg-blue-600 mx-auto"></div>
            <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500">
                Flexible engagement models to match your project needs
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Hourly Rate Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                <div class="p-1 bg-gradient-to-r from-green-400 to-green-600"></div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Hourly Engagement</h3>
                    <div class="mb-4">
                        <span class="text-4xl font-bold text-green-600">KES 5K</span>
                        <span class="text-gray-500">/hour</span>
                    </div>
                    <p class="text-gray-600 mb-6">Flexible support for ongoing needs</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">4-hour minimum engagement</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Expert consultation</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Progress reporting included</span>
                        </li>
                    </ul>
                    <button class="w-full bg-green-100 text-green-600 px-6 py-3 rounded-lg hover:bg-green-200 transition duration-300">
                        Schedule Consultation
                    </button>
                </div>
            </div>

            <!-- Small Projects Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                <div class="p-1 bg-gradient-to-r from-blue-400 to-blue-600"></div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Fixed Price Projects</h3>
                    <div class="mb-4">
                        <span class="text-4xl font-bold text-blue-600">KES 150K</span>
                        <span class="text-gray-500">- 300K</span>
                    </div>
                    <p class="text-gray-600 mb-6">Predictable pricing for defined-scope projects</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Complete project lifecycle</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Vendor coordination</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Risk management</span>
                        </li>
                    </ul>
                    <button class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                        Start Project
                    </button>
                </div>
            </div>

            <!-- Enterprise Projects Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                <div class="p-1 bg-gradient-to-r from-purple-400 to-purple-600"></div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Enterprise Solutions</h3>
                    <div class="mb-4">
                        <span class="text-4xl font-bold text-purple-600">Custom</span>
                    </div>
                    <p class="text-gray-600 mb-6">Tailored solutions for complex initiatives</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Multi-phase implementations</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Enterprise-grade support</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Dedicated PM team</span>
                        </li>
                    </ul>
                    <button class="w-full bg-purple-100 text-purple-600 px-6 py-3 rounded-lg hover:bg-purple-200 transition duration-300">
                        Contact Experts
                    </button>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center">
            <p class="text-gray-600 text-sm">
                *All prices exclude VAT. Final pricing determined after project scoping
            </p>
        </div>
    </div>
</section>

            <!-- Rest of the sections (Clients, Coming Soon, etc.) can follow here -->
            <!-- ... (Keep other sections as needed, updating content where appropriate) ... -->

        </div>
    </section>

    @include('layouts.footer')

</body>
</html>
