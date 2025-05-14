<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing - Donkraft Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.5/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        .pricing-card:hover {
            transform: translateY(-10px);
        }
        .gradient-text {
            background: linear-gradient(45deg, #3B82F6, #6366F1);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .pricing-card {
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
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
                <span class="gradient-text">Transparent</span> Pricing
            </h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8">
                Flexible pricing options tailored to your business needs and budget
            </p>
            <div class="animate-float">
                <div class="bg-white/10 backdrop-blur-sm rounded-full p-1 inline-block">
                    <button class="bg-blue-600 text-white px-8 py-3 rounded-full hover:bg-blue-700 transition-all" style="background-color:darkcyan">
                        Request Custom Quote
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- IT Solution Development Pricing -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4" style="color:darkblue"><span style="color:darkcyan">Solution</span> Development</h2>
                <div class="h-1 w-20 bg-blue-600 mx-auto mb-6" style="background-color:darkcyan"></div>
                <p class="text-lg max-w-3xl mx-auto" style="color:darkcyan">
                    Custom technology solutions designed and built to transform your business
                </p>
            </div>

            <!-- IT Solution Pricing Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Small Projects Card -->
                <div class="pricing-card bg-gray-700 rounded-xl p-8 shadow-xl">
                    <div class="w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center mb-6" style="background-color:darkcyan">
                        <i class="fas fa-laptop text-2xl text-white"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="text-2xl font-bold mb-4">Small Projects</h3>
                        <p class="text-3xl font-bold mb-2">KES 200,000<span class="text-sm font-normal"> starting at</span></p>
                        <p class="text-gray-400 mb-6">
                            Ideal for basic websites and small-scale applications
                        </p>
                        <ul class="text-gray-300 mb-6 space-y-2">
                            <li><i class="fas fa-check text-blue-400 mr-2"></i> Basic website development</li>
                            <li><i class="fas fa-check text-blue-400 mr-2"></i> Simple automation tools</li>
                            <li><i class="fas fa-check text-blue-400 mr-2"></i> Basic database integration</li>
                        </ul>
                    </div>
                    <a href="/contact" class="inline-block w-full bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-all text-center" style="background-color:darkcyan">
                        Get Started
                    </a>
                </div>

                <!-- Medium Projects Card -->
                <div class="pricing-card bg-gray-700 rounded-xl p-8 shadow-xl">
                    <div class="w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center mb-6" style="background-color:darkcyan">
                        <i class="fas fa-desktop text-2xl text-white"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="text-2xl font-bold mb-4">Medium Projects</h3>
                        <p class="text-3xl font-bold mb-2">KES 500,000<span class="text-sm font-normal"> starting at</span></p>
                        <p class="text-gray-400 mb-6">
                            Perfect for dynamic websites and business systems
                        </p>
                        <ul class="text-gray-300 mb-6 space-y-2">
                            <li><i class="fas fa-check text-blue-400 mr-2"></i> Dynamic website development</li>
                            <li><i class="fas fa-check text-blue-400 mr-2"></i> E-commerce solutions</li>
                            <li><i class="fas fa-check text-blue-400 mr-2"></i> Inventory management systems</li>
                        </ul>
                    </div>
                    <a href="/contact" class="inline-block w-full bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-all text-center" style="background-color:darkcyan">
                        Get Started
                    </a>
                </div>

                <!-- Large Projects Card -->
                <div class="pricing-card bg-gray-700 rounded-xl p-8 shadow-xl">
                    <div class="w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center mb-6" style="background-color:darkcyan">
                        <i class="fas fa-server text-2xl text-white"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="text-2xl font-bold mb-4">Large Projects</h3>
                        <p class="text-3xl font-bold mb-2">Custom<span class="text-sm font-normal"> pricing</span></p>
                        <p class="text-gray-400 mb-6">
                            Enterprise-grade software solutions tailored to your needs
                        </p>
                        <ul class="text-gray-300 mb-6 space-y-2">
                            <li><i class="fas fa-check text-blue-400 mr-2"></i> Enterprise software development</li>
                            <li><i class="fas fa-check text-blue-400 mr-2"></i> Complex system integration</li>
                            <li><i class="fas fa-check text-blue-400 mr-2"></i> Custom enterprise applications</li>
                        </ul>
                    </div>
                    <a href="/contact" class="inline-block w-full bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-all text-center" style="background-color:darkcyan">
                        Request Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Management Pricing -->
    <section class="py-20 bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4 text-white">Project <span style="color:darkcyan">Management</span></h2>
                <div class="h-1 w-20 bg-blue-600 mx-auto mb-6" style="background-color:darkcyan"></div>
                <p class="text-lg text-gray-300 max-w-3xl mx-auto">
                    Expert oversight ensuring your projects are delivered on time and within budget
                </p>
            </div>

            <!-- Project Management Pricing Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <!-- IT Project Management Card -->
                <div class="pricing-card bg-gray-700 rounded-xl p-8 shadow-xl">
                    <div class="w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center mb-6" style="background-color:darkcyan">
                        <i class="fas fa-tasks text-2xl text-white"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="text-2xl font-bold mb-4">IT Project Management</h3>
                        <div class="mb-6">
                            <p class="text-xl font-bold">Hourly Rate</p>
                            <p class="text-2xl font-bold mb-2">KES 5,000<span class="text-sm font-normal">/hour</span></p>
                        </div>
                        <div class="mb-6">
                            <p class="text-xl font-bold">Fixed Cost</p>
                            <p class="text-gray-300">Small Projects: KES 150,000 – 300,000</p>
                            <p class="text-gray-300">Large Projects: Custom pricing</p>
                        </div>
                        <p class="text-gray-400 mb-6">
                            Expert oversight for your IT initiatives with other providers
                        </p>
                    </div>
                    <a href="/contact" class="inline-block w-full bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-all text-center" style="background-color:darkcyan">
                        Get Started
                    </a>
                </div>

                <!-- Non-IT Project Management Card -->
                <div class="pricing-card bg-gray-700 rounded-xl p-8 shadow-xl">
                    <div class="w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center mb-6" style="background-color:darkcyan">
                        <i class="fas fa-project-diagram text-2xl text-white"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="text-2xl font-bold mb-4">Non-IT Project Management</h3>
                        <div class="mb-6">
                            <p class="text-xl font-bold">Consultation Fee</p>
                            <p class="text-2xl font-bold mb-2">KES 20,000</p>
                            <p class="text-gray-300 text-sm">(Deducted from final fee if project proceeds)</p>
                        </div>
                        <div class="mb-6">
                            <p class="text-xl font-bold">Example Project</p>
                            <p class="text-gray-300">New Product Launch: Starting at KES 300,000</p>
                        </div>
                        <p class="text-gray-400 mb-6">
                            Structured approach for your non-IT initiatives
                        </p>
                    </div>
                    <a href="/contact" class="inline-block w-full bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-all text-center" style="background-color:darkcyan">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Retainer Packages -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4" style="color:darkblue"><span style="color:darkcyan">Retainer</span> Packages</h2>
                <div class="h-1 w-20 bg-blue-600 mx-auto mb-6" style="background-color:darkcyan"></div>
                <p class="text-lg max-w-3xl mx-auto" style="color:darkcyan">
                    Long-term support options to keep your systems running smoothly
                </p>
            </div>

            <!-- Retainer Package Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Bronze Package -->
                <div class="pricing-card bg-gray-700 rounded-xl p-8 shadow-xl">
                    <div class="w-16 h-16 bg-amber-700 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-medal text-2xl text-white"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="text-xl font-bold mb-4">Bronze Package</h3>
                        <p class="text-3xl font-bold mb-2">KES 40,000<span class="text-sm font-normal">/month</span></p>
                        <p class="text-gray-400 mb-4">
                            10 hours of support per month
                        </p>
                        <ul class="text-gray-300 mb-6 space-y-2">
                            <li><i class="fas fa-check text-amber-400 mr-2"></i> Basic technical support</li>
                            <li><i class="fas fa-check text-amber-400 mr-2"></i> Minor updates and fixes</li>
                            <li><i class="fas fa-check text-amber-400 mr-2"></i> Monthly status reports</li>
                        </ul>
                    </div>
                    <a href="/contact" class="inline-block w-full bg-amber-700 text-white px-6 py-2 rounded-lg hover:bg-amber-800 transition-all text-center">
                        Subscribe
                    </a>
                </div>

            <!-- Silver Package -->
<div class="pricing-card bg-gray-700 rounded-xl p-8 shadow-xl">
    <div class="w-16 h-16 bg-gray-400 rounded-xl flex items-center justify-center mb-6">
        <i class="fas fa-award text-2xl text-white"></i>
    </div>
    <div class="card-content">
        <h3 class="text-xl font-bold mb-4">Silver Package</h3>
        <p class="text-3xl font-bold mb-2">KES 75,000<span class="text-sm font-normal">/month</span></p>
        <p class="text-gray-400 mb-4">
            20 hours of support per month
        </p>
        <ul class="text-gray-300 mb-6 space-y-2">
            <li><i class="fas fa-check text-gray-300 mr-2"></i> Priority technical support</li>
            <li><i class="fas fa-check text-gray-300 mr-2"></i> Feature enhancements</li>
            <li><i class="fas fa-check text-gray-300 mr-2"></i> Bi-weekly status meetings</li>
            <li><i class="fas fa-check text-gray-300 mr-2"></i> System monitoring</li>
        </ul>
    </div>
    <a href="/contact" class="inline-block w-full bg-gray-400 text-white px-6 py-2 rounded-lg hover:bg-gray-500 transition-all text-center">
        Subscribe
    </a>
</div>

<!-- Gold Package -->
<div class="pricing-card bg-gray-700 rounded-xl p-8 shadow-xl">
    <div class="w-16 h-16 bg-yellow-600 rounded-xl flex items-center justify-center mb-6">
        <i class="fas fa-crown text-2xl text-white"></i>
    </div>
    <div class="card-content">
        <h3 class="text-xl font-bold mb-4">Gold Package</h3>
        <p class="text-3xl font-bold mb-2">KES 180,000<span class="text-sm font-normal">/month</span></p>
        <p class="text-gray-400 mb-4">
            50 hours of support per month
        </p>
        <ul class="text-gray-300 mb-6 space-y-2">
            <li><i class="fas fa-check text-yellow-400 mr-2"></i> 24/7 premium support</li>
            <li><i class="fas fa-check text-yellow-400 mr-2"></i> Major feature development</li>
            <li><i class="fas fa-check text-yellow-400 mr-2"></i> Weekly strategy meetings</li>
            <li><i class="fas fa-check text-yellow-400 mr-2"></i> Advanced system monitoring</li>
            <li><i class="fas fa-check text-yellow-400 mr-2"></i> Dedicated account manager</li>
        </ul>
    </div>
    <a href="/contact" class="inline-block w-full bg-yellow-600 text-white px-6 py-2 rounded-lg hover:bg-yellow-700 transition-all text-center">
        Subscribe
    </a>
</div>
</div
>
</div>
</section>


@include('layouts.footer')
</body>
</html>
