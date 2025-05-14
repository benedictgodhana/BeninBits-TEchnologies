<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
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
</head>
<body class="bg-gray-50 text-gray-100">
    <!-- Navigation -->
    @include('layouts.navigation')

   <!-- Hero Section -->
<section class="relative bg-gradient-to-br from-gray-900 to-blue-900 py-48">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-6">
            <span class="gradient-text">Transformative</span> IT Solutions
        </h1>
        <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8">
            Powering digital transformation through innovative technology solutions
        </p>
        <div class="animate-float">
            <div class="bg-white/10 backdrop-blur-sm rounded-full p-1 inline-block">
                <button class="bg-blue-600 text-white px-8 py-3 rounded-full hover:bg-blue-700 transition-all"  style="background-color:darkcyan">
                    Schedule Consultation
                </button>
            </div>
        </div>
    </div>
</section>

    <!-- Service Categories Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4" style="color:darkblue"><span style="color:darkcyan">Our Core</span> Services</h2>
                <div class="h-1 w-20 bg-blue-600 mx-auto mb-6"></div>
                <p class="text-lg text-gray-300 max-w-3xl mx-auto" style="color:darkcyan">
                    Discover how our comprehensive range of services can transform your business operations and drive growth.
                </p>
            </div>

            <!-- Service Categories -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Service 1 Card -->
                <div class="service-card bg-gray-700 rounded-xl p-8 transition-all hover:bg-gray-600 shadow-xl">
                    <div class="service-icon w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center mb-6 transition-transform" style="background-color:darkcyan">
                        <i class="fas fa-laptop-code text-2xl text-white" style="color:white"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="text-2xl font-bold mb-4">IT Project Management & Tech Solutions</h3>
                        <p class="text-gray-400 mb-6">
                            Smart, effective solutions to transform your business operations through custom technology and expert project management.
                        </p>
                        <p class="text-blue-400 italic mb-6">"Integrating Brilliance, Crafting Excellence."</p>
                    </div>
                    <a href="/it-solutions" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-all text-center"  style="background-color:darkcyan">
                        Explore Services
                    </a>
                </div>

                <!-- Service 2 Card -->
                <div class="service-card bg-gray-700 rounded-xl p-8 transition-all hover:bg-gray-600 shadow-xl">
                    <div class="service-icon w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center mb-6 transition-transform"  style="background-color:darkcyan">
                        <i class="fas fa-tasks text-2xl text-white" ></i>
                    </div>
                    <div class="card-content">
                        <h3 class="text-2xl font-bold mb-4">Independent IT Project Management</h3>
                        <p class="text-gray-400 mb-6">
                            Expert oversight for your ongoing IT projects with other providers, ensuring seamless execution and optimal outcomes.
                        </p>
                        <p class="text-blue-400 italic mb-6">"Transforming Visions Into Reality, One Project at a Time"</p>
                    </div>
                    <a href="/it-project-management" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-all text-center"  style="background-color:darkcyan">
                        Explore Services
                    </a>
                </div>

                <!-- Service 3 Card -->
                <div class="service-card bg-gray-700 rounded-xl p-8 transition-all hover:bg-gray-600 shadow-xl">
                    <div class="service-icon w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center mb-6 transition-transform"  style="background-color:darkcyan">
                        <i class="fas fa-project-diagram text-2xl text-white"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="text-2xl font-bold mb-4">Non-IT Project Management</h3>
                        <p class="text-gray-400 mb-6">
                            Structured, results-driven project management approach for your non-IT initiatives, ensuring successful outcomes.
                        </p>
                        <p class="text-blue-400 italic mb-6">"Expanding Possibilities, One Project at a Time"</p>
                    </div>
                    <a href="/non-it-projects" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-all text-center"  style="background-color:darkcyan">
                        Explore Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')
</body>
</html>
