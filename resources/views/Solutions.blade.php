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
</head>
<body class="bg-gray-900">
    <!-- Navigation placeholder -->
   @include('layouts.navigation')


        <div class="relative h-[90vh] overflow-hidden">
    <!-- Hero Section -->
    <div class="gradient-bg text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
            <div class="md:flex md:items-center md:justify-between">
                <div class="md:w-1/2 md:pr-12">
                    <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl md:text-6xl leading-tight">
                        Powering Digital <span class="text-blue-300">Transformation</span>
                    </h1>
                    <p class="mt-6 text-xl text-blue-100">
                        In today's fast-paced digital landscape, having the right tools can make all the difference. We specialize in creating tailored technology solutions designed to meet the unique needs of your business.
                    </p>
                    <div class="mt-8 flex space-x-4">
                        <button class="bg-white text-blue-800 px-6 py-3 rounded-lg shadow hover:bg-blue-50 transition duration-300 font-medium">
                            Explore Solutions
                        </button>
                        <button class="border-2 border-white text-white px-6 py-3 rounded-lg hover:bg-white hover:text-blue-800 transition duration-300 font-medium">
                            Contact Us
                        </button>
                    </div>
                    <div class="mt-8">
                        <span class="inline-flex bg-blue-800 bg-opacity-40 rounded-md px-4 py-2 text-sm font-medium">
                            Mission: Integrating Brilliance, Crafting Excellence.
                        </span>
                    </div>
                </div>
                <div class="mt-8 md:mt-0 md:w-1/2">
                    <img src="/images/standard-quality-control-concept-m.jpg" alt="Digital Transformation" class="rounded-xl  mx-auto pulse-animation">
                </div>
            </div>
        </div>
    </div>


    <!-- Current Offerings Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-blue-600 font-semibold">WHAT WE OFFER</span>
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mt-2">Our Current Offerings</h2>
                <div class="mt-2 h-1 w-20 bg-blue-600 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="rounded-xl overflow-hidden shadow-xl">
                    <img src="/images/tech-support-oversees-ai-neural-network.jpg" alt="Custom Software Development" class="w-full h-auto transition duration-500 hover:scale-105">
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Custom Software Development</h3>
                    <p class="text-lg text-gray-600 mb-6">
                        From automating routine operations to creating robust enterprise systems, we craft solutions that fit your specific workflows and challenges.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Tailored to your business needs</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Scalable and future-proof architecture</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">User-centric design and development</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Ongoing support and maintenance</span>
                        </li>
                    </ul>
                    <div class="mt-8">
                        <button class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition duration-300 flex items-center">
                            Learn More
                            <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
<!-- Clients Section -->
<div class="mt-20">
  <div class="text-center mb-10">
    <h3 class="text-2xl font-bold text-gray-900">Trusted By Industry Leaders</h3>
    <p class="text-lg text-gray-600 mt-2">Explore the websites we've built for our clients</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
    @foreach ($clients as $client)
      <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
        <div class="h-40 bg-gray-200 overflow-hidden">
          @if ($client->image_url)
            <img src="{{ asset('storage/' . $client->image_url) }}" alt="{{ $client->name }} Website Preview" class="w-full h-full object-cover" />
          @else
            <img src="/api/placeholder/300/200" alt="Placeholder Image" class="w-full h-full object-cover" />
          @endif
        </div>
        <div class="p-4">
          <h4 class="font-bold text-gray-800">{{ $client->name }}</h4>
          <p class="text-gray-600 text-sm mb-3">{{ $client->category }}</p>
          @if ($client->website_url)
            <a href="{{ $client->website_url }}" target="_blank" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
              View Website →
            </a>
          @else
            <span class="text-gray-400 text-sm">No website available</span>
          @endif
        </div>
      </div>
    @endforeach
  </div>
</div>

            <!-- Products Section -->
            <div class="mt-20">
                <div class="text-center mb-10">
                    <h3 class="text-2xl font-bold text-gray-900">Featured Products</h3>
                    <p class="text-lg text-gray-600 mt-2">Our flagship software solutions</p>
                </div>
                <div class="mt-20">
    <div class="text-center mb-10">
        <h3 class="text-2xl font-bold text-gray-900">Featured Products</h3>
        <p class="text-lg text-gray-600 mt-2">Our flagship software solutions</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    @foreach ($products as $product)
        <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
            <div class="p-1 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
            <div class="p-6">
                @if ($product->image_url)
                    <img  src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded-md mb-4">
                @endif
                <h4 class="text-xl font-bold text-gray-900 mb-2">{{ $product->name }}</h4>
                <p class="text-gray-600 mb-4">{{ $product->description }}</p>
                <a href="{{ $product->link }}" class="text-blue-600 font-medium flex items-center">
                    View Details
                    <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    @endforeach
</div>


            </div>
        </div>
    </section>

    <!-- Coming Soon Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-blue-600 font-semibold">FUTURE OFFERINGS</span>
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mt-2">Coming Soon</h2>
                <div class="mt-2 h-1 w-20 bg-blue-600 mx-auto"></div>
                <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500">
                    We are preparing to launch services that align with the future of technology.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
                    <div class="p-6">
                        <div class="rounded-full bg-blue-100 p-4 inline-flex items-center justify-center mb-4">
                            <i class="fas fa-server text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">IT Infrastructure Optimization</h3>
                        <p class="text-gray-600">Transform outdated systems into agile, high-performing infrastructure that supports business growth.</p>
                        <div class="mt-4 text-sm inline-flex items-center bg-blue-50 text-blue-700 px-3 py-1 rounded-full">
                            <svg class="mr-1 h-3 w-3" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"></path>
                            </svg>
                            Coming Q2 2025
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
                    <div class="p-6">
                        <div class="rounded-full bg-blue-100 p-4 inline-flex items-center justify-center mb-4">
                            <i class="fas fa-chart-line text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Data and Analytics Services</h3>
                        <p class="text-gray-600">Turn raw data into actionable insights to drive better decisions and improve performance.</p>
                        <div class="mt-4 text-sm inline-flex items-center bg-blue-50 text-blue-700 px-3 py-1 rounded-full">
                            <svg class="mr-1 h-3 w-3" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"></path>
                            </svg>
                            Coming Q1 2025
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
                    <div class="p-6">
                        <div class="rounded-full bg-blue-100 p-4 inline-flex items-center justify-center mb-4">
                            <i class="fas fa-cloud text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Cloud Solutions</h3>
                        <p class="text-gray-600">Secure, scalable, and cost-effective cloud systems to help you stay agile in a competitive market.</p>
                        <div class="mt-4 text-sm inline-flex items-center bg-blue-50 text-blue-700 px-3 py-1 rounded-full">
                            <svg class="mr-1 h-3 w-3" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"></path>
                            </svg>
                            Coming Q2 2025
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
                    <div class="p-6">
                        <div class="rounded-full bg-blue-100 p-4 inline-flex items-center justify-center mb-4">
                            <i class="fas fa-shield-alt text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Cybersecurity Services</h3>
                        <p class="text-gray-600">Advanced tools and strategies to protect your data, systems, and reputation in an increasingly complex threat landscape.</p>
                        <div class="mt-4 text-sm inline-flex items-center bg-blue-50 text-blue-700 px-3 py-1 rounded-full">
                            <svg class="mr-1 h-3 w-3" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"></path>
                            </svg>
                            Coming Q3 2025
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <button class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition duration-300 flex items-center mx-auto">
                    <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Join Our Waitlist
                </button>
            </div>
        </div>
    </section>


    <!-- Add this section after the Custom Software Development section but before the Clients Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-blue-600 font-semibold">TRANSPARENT PRICING</span>
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mt-2">IT Solution Development Packages</h2>
            <div class="mt-2 h-1 w-20 bg-blue-600 mx-auto"></div>
            <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500">
                Clear, predictable pricing for projects of all scales
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Small Projects Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                <div class="p-1 bg-gradient-to-r from-blue-400 to-blue-600"></div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Small Projects</h3>
                    <div class="mb-4">
                        <span class="text-4xl font-bold text-blue-600">KES 200K</span>
                        <span class="text-gray-500">+</span>
                    </div>
                    <p class="text-gray-600 mb-6">Perfect for foundational digital presence</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Basic Websites</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Landing Pages</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Single-Feature Apps</span>
                        </li>
                    </ul>
                    <button class="w-full bg-blue-100 text-blue-600 px-6 py-3 rounded-lg hover:bg-blue-200 transition duration-300">
                        Get Started
                    </button>
                </div>
            </div>

            <!-- Medium Projects Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                <div class="p-1 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Medium Projects</h3>
                    <div class="mb-4">
                        <span class="text-4xl font-bold text-blue-600">KES 500K</span>
                        <span class="text-gray-500">+</span>
                    </div>
                    <p class="text-gray-600 mb-6">For growing businesses with complex needs</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">E-commerce Platforms</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Inventory Systems</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Dynamic Web Applications</span>
                        </li>
                    </ul>
                    <button class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                        Start Project
                    </button>
                </div>
            </div>

            <!-- Large Projects Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                <div class="p-1 bg-gradient-to-r from-indigo-500 to-purple-600"></div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Enterprise Solutions</h3>
                    <div class="mb-4">
                        <span class="text-4xl font-bold text-indigo-600">Custom</span>
                    </div>
                    <p class="text-gray-600 mb-6">Tailored solutions for complex business needs</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Enterprise Software</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Custom ERP Systems</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Scalable Cloud Solutions</span>
                        </li>
                    </ul>
                    <button class="w-full bg-indigo-100 text-indigo-600 px-6 py-3 rounded-lg hover:bg-indigo-200 transition duration-300">
                        Contact Sales
                    </button>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center">
            <p class="text-gray-600 text-sm">
                *All prices exclude VAT. Final pricing determined after requirements analysis
            </p>
        </div>
    </div>
</section>


    @include('layouts.footer')

</body>
</html>
