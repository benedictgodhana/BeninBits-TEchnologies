<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BENINBITS TECHNOLOGIES - Innovative Technology Partner</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.5/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
        /* Updated color scheme */
        :root {
            --light-green: #90EE90;
            --purple: #805ad5;
            --dark-purple: #4B0082;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        .text-gradient {
            background: linear-gradient(90deg, var(--light-green), var(--purple));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .bg-gradient {
            background: linear-gradient(135deg, #000000 0%, var(--dark-purple) 100%);
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Updated button styles */
        .btn-primary {
            background: var(--light-green);
            color: #000;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background: #76D76A;
            transform: scale(1.05);
        }
        .btn-secondary {
            border-color: var(--purple);
            color: var(--purple);
        }
        .btn-secondary:hover {
            background: var(--purple);
            color: white;
        }

        /* Animation for marquee */
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            animation: marquee 30s linear infinite;
        }
    </style>
</head>
<body class="text-white bg-gradient">
    <!-- Video Hero Section -->
    <div class="relative h-screen overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 z-10 bg-black opacity-60"></div>
            <video class="object-cover w-full h-full" autoplay muted loop playsinline>
                <source src="/images/6915808_Motion Graphics_Motion Graphic_3840x2160.mp4" type="video/mp4">
                <img src="/images/tech-background.jpg" alt="BENINBITS TECHNOLOGIES" class="object-cover w-full h-full">
            </video>
        </div>

        <!-- Content Overlay -->
        <div class="absolute inset-0 z-20 flex items-center justify-center">
            <div class="max-w-4xl px-4 mx-auto text-center">
                <h1 class="mb-4 text-5xl font-bold leading-tight md:text-7xl text-gradient">
                    BENINBITS TECHNOLOGIES
                </h1>
                <p class="mb-8 text-xl text-gray-300 md:text-3xl">
                    Empowering digital transformation through cutting-edge technology
                </p>
                <div class="flex flex-col justify-center gap-4 sm:flex-row">
                    <button class="px-8 py-4 text-lg font-bold rounded-lg btn-primary"
                            style="border-radius:30px">
                        Explore Services
                    </button>
                    <button class="px-8 py-4 text-lg font-bold border-2 rounded-lg btn-secondary"
                            style="border-radius:30px">
                        Contact Us
                    </button>
                </div>
            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute z-20 transform -translate-x-1/2 bottom-8 left-1/2 animate-bounce">
            <a href="#services" class="text-green-400 transition hover:text-green-300">
                <i class="text-2xl fas fa-chevron-down"></i>
            </a>
        </div>
    </div>

    <!-- Services Section -->
    <section id="services" class="px-4 py-20 bg-black bg-opacity-50">
        <div class="max-w-6xl mx-auto">
            <h2 class="mb-12 text-4xl font-bold text-center text-gradient">Our Services</h2>
            <div class="grid gap-8 md:grid-cols-3">
                <!-- Service 1 -->
                <div class="p-6 transition-all duration-300 glass-card rounded-xl hover:transform hover:scale-105">
                    <div class="mb-4 text-4xl text-purple-400">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="mb-3 text-2xl font-bold text-green-300">Mobile Development</h3>
                    <p class="text-gray-300">Native and cross-platform mobile solutions with stunning UI/UX.</p>
                    <div class="mt-4">
                        <span class="inline-block px-3 py-1 text-sm text-green-300 bg-green-900 rounded-full">React Native</span>
                        <span class="inline-block px-3 py-1 text-sm text-purple-300 bg-purple-900 rounded-full">Flutter</span>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="p-6 transition-all duration-300 glass-card rounded-xl hover:transform hover:scale-105">
                    <div class="mb-4 text-4xl text-purple-400">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="mb-3 text-2xl font-bold text-green-300">Web Development</h3>
                    <p class="text-gray-300">Responsive, modern web applications that drive business growth.</p>
                    <div class="mt-4">
                        <span class="inline-block px-3 py-1 text-sm text-green-300 bg-green-900 rounded-full">React</span>
                        <span class="inline-block px-3 py-1 text-sm text-purple-300 bg-purple-900 rounded-full">Vue.js</span>
                        <span class="inline-block px-3 py-1 text-sm text-green-300 bg-green-900 rounded-full">Node.js</span>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="p-6 transition-all duration-300 glass-card rounded-xl hover:transform hover:scale-105">
                    <div class="mb-4 text-4xl text-purple-400">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3 class="mb-3 text-2xl font-bold text-green-300">Cloud Solutions</h3>
                    <p class="text-gray-300">Scalable, secure cloud infrastructure and DevOps services.</p>
                    <div class="mt-4">
                        <span class="inline-block px-3 py-1 text-sm text-green-300 bg-green-900 rounded-full">AWS</span>
                        <span class="inline-block px-3 py-1 text-sm text-purple-300 bg-purple-900 rounded-full">Azure</span>
                        <span class="inline-block px-3 py-1 text-sm text-green-300 bg-green-900 rounded-full">GCP</span>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="p-6 transition-all duration-300 glass-card rounded-xl hover:transform hover:scale-105">
                    <div class="mb-4 text-4xl text-purple-400">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3 class="mb-3 text-2xl font-bold text-green-300">AI & Machine Learning</h3>
                    <p class="text-gray-300">Intelligent solutions that automate processes and drive insights.</p>
                    <div class="mt-4">
                        <span class="inline-block px-3 py-1 text-sm text-green-300 bg-green-900 rounded-full">TensorFlow</span>
                        <span class="inline-block px-3 py-1 text-sm text-purple-300 bg-purple-900 rounded-full">PyTorch</span>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="p-6 transition-all duration-300 glass-card rounded-xl hover:transform hover:scale-105">
                    <div class="mb-4 text-4xl text-purple-400">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="mb-3 text-2xl font-bold text-green-300">Cybersecurity</h3>
                    <p class="text-gray-300">Comprehensive security solutions to protect your digital assets.</p>
                    <div class="mt-4">
                        <span class="inline-block px-3 py-1 text-sm text-green-300 bg-green-900 rounded-full">Penetration Testing</span>
                        <span class="inline-block px-3 py-1 text-sm text-purple-300 bg-purple-900 rounded-full">Security Audits</span>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="p-6 transition-all duration-300 glass-card rounded-xl hover:transform hover:scale-105">
                    <div class="mb-4 text-4xl text-purple-400">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="mb-3 text-2xl font-bold text-green-300">Data Analytics</h3>
                    <p class="text-gray-300">Turn your data into actionable insights for business decisions.</p>
                    <div class="mt-4">
                        <span class="inline-block px-3 py-1 text-sm text-green-300 bg-green-900 rounded-full">Big Data</span>
                        <span class="inline-block px-3 py-1 text-sm text-purple-300 bg-purple-900 rounded-full">BI Tools</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section id="clients" class="py-20 bg-black">
        <div class="max-w-6xl px-4 mx-auto">
            <h2 class="mb-12 text-3xl font-bold text-center text-gradient">Trusted By</h2>
            <div class="relative h-32 overflow-hidden">
                <div class="absolute flex animate-marquee whitespace-nowrap">
                    <!-- Client Logos -->
                    <div class="mx-8 transition opacity-70 hover:opacity-100">
                        <img src="/api/placeholder/160/64" class="w-auto h-16" alt="Client 1">
                    </div>
                    <div class="mx-8 transition opacity-70 hover:opacity-100">
                        <img src="/api/placeholder/160/64" class="w-auto h-16" alt="Client 2">
                    </div>
                    <div class="mx-8 transition opacity-70 hover:opacity-100">
                        <img src="/api/placeholder/160/64" class="w-auto h-16" alt="Client 3">
                    </div>
                    <div class="mx-8 transition opacity-70 hover:opacity-100">
                        <img src="/api/placeholder/160/64" class="w-auto h-16" alt="Client 4">
                    </div>
                    <div class="mx-8 transition opacity-70 hover:opacity-100">
                        <img src="/api/placeholder/160/64" class="w-auto h-16" alt="Client 5">
                    </div>
                    <div class="mx-8 transition opacity-70 hover:opacity-100">
                        <img src="/api/placeholder/160/64" class="w-auto h-16" alt="Client 6">
                    </div>
                    <div class="mx-8 transition opacity-70 hover:opacity-100">
                        <img src="/api/placeholder/160/64" class="w-auto h-16" alt="Client 7">
                    </div>
                    <div class="mx-8 transition opacity-70 hover:opacity-100">
                        <img src="/api/placeholder/160/64" class="w-auto h-16" alt="Client 8">
                    </div>
                    <div class="mx-8 transition opacity-70 hover:opacity-100">
                        <img src="/api/placeholder/160/64" class="w-auto h-16" alt="Client 9">
                    </div>
                    <div class="mx-8 transition opacity-70 hover:opacity-100">
                        <img src="/api/placeholder/160/64" class="w-auto h-16" alt="Client 10">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-purple-900 bg-opacity-30">
        <div class="grid max-w-6xl gap-8 px-4 mx-auto text-center md:grid-cols-4">
            <div class="p-6">
                <div class="text-4xl font-bold text-green-400" x-data="{ count: 0 }"
                    x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 150) count++; else clearInterval(interval) }, 10) }, 500)">
                    <span x-text="count"></span>+
                </div>
                <div class="mt-2 text-gray-300">Projects Completed</div>
            </div>

            <div class="p-6">
                <div class="text-4xl font-bold text-green-400" x-data="{ count: 0 }"
                    x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 80) count++; else clearInterval(interval) }, 15) }, 500)">
                    <span x-text="count"></span>+
                </div>
                <div class="mt-2 text-gray-300">Happy Clients</div>
            </div>

            <div class="p-6">
                <div class="text-4xl font-bold text-green-400" x-data="{ count: 0 }"
                    x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 25) count++; else clearInterval(interval) }, 40) }, 500)">
                    <span x-text="count"></span>+
                </div>
                <div class="mt-2 text-gray-300">Countries Served</div>
            </div>

            <div class="p-6">
                <div class="text-4xl font-bold text-green-400" x-data="{ count: 0 }"
                    x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 45) count++; else clearInterval(interval) }, 25) }, 500)">
                    <span x-text="count"></span>+
                </div>
                <div class="mt-2 text-gray-300">Team Members</div>
            </div>
        </div>
    </section>





    @include ('layouts.navigation')
    @include('layouts.footer')

    <!-- Script for Glide.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Glide.js for testimonials
            if (document.querySelector('.glide')) {
                new Glide('.glide', {
                    type: 'carousel',
                    perView: 1,
                    autoplay: 5000
                }).mount();
            }
        });
    </script>
</body>
</html>
