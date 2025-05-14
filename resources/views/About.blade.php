<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - BENINBITS TECHNOLOGIES</title>
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

        /* Timeline styles */
        .timeline {
            position: relative;
        }
        .timeline::before {
            content: '';
            position: absolute;
            width: 2px;
            background: var(--purple);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -1px;
        }
        .timeline-item {
            position: relative;
            margin-bottom: 30px;
        }
        .timeline-icon {
            position: absolute;
            left: 50%;
            width: 40px;
            height: 40px;
            margin-left: -20px;
            background: var(--light-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
        }
        .timeline-content {
            position: relative;
            width: 45%;
        }
        .timeline-content.left {
            margin-right: 55%;
        }
        .timeline-content.right {
            margin-left: 55%;
        }

        @media (max-width: 768px) {
            .timeline::before {
                left: 40px;
            }
            .timeline-icon {
                left: 40px;
                margin-left: 0;
            }
            .timeline-content {
                width: calc(100% - 80px);
                margin-left: 80px !important;
                margin-right: 0 !important;
            }
        }
    </style>
</head>
<body class="bg-gradient text-white">
    <!-- Navigation Menu -->
   @include ('layouts.navigation')

   <!-- Hero Section -->
<div class="relative pt-24 md:pt-0 bg-cover bg-center bg-no-repeat" style="background-image: url('/images/close-up-image-programer-working-his-desk-office.jpg');">
    <div class="bg-black bg-opacity-50 py-20 md:py-52">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 text-gray">About Us</h1>
            <p class="text-xl md:text-2xl text-gray-300">Driven by innovation, committed to excellence</p>
        </div>
    </div>
</div>


    <!-- Our Story Section -->
    <section class="py-20 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6 text-gradient">Our Story</h2>
                    <p class="text-gray-300 mb-4">Founded in 2024, BENINBITS TECHNOLOGIES began as a small team of passionate developers with a vision to transform how businesses leverage technology. What started as a specialized mobile app development studio quickly evolved into a comprehensive technology partner for businesses across multiple industries.</p>
                    <p class="text-gray-300 mb-4">Our journey has been marked by continuous innovation, learning, and growth. From our humble beginnings, we've expanded to a team of over 45 technology experts serving clients in more than 25 countries.</p>
                    <p class="text-gray-300">Today, BENINBITS stands at the forefront of digital transformation, helping organizations navigate the complex world of technology with confidence and clarity.</p>
                </div>
                <div class="glass-card p-4 rounded-xl">
                    <img src="/images/WhatsApp Image 2025-03-21 at 8.59.32 PM.jpeg" alt="BENINBITS Team" class="w-full h-auto rounded-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-20 px-4 bg-black bg-opacity-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-6 text-gradient">Mission & Vision</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="glass-card p-8 rounded-xl">
                    <div class="text-purple-400 text-4xl mb-4">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-green-300">Our Mission</h3>
                    <p class="text-gray-300">To empower organizations through innovative technology solutions that drive growth, efficiency, and competitive advantage. We believe in creating digital experiences that are not just functional but transformative.</p>
                </div>
                <div class="glass-card p-8 rounded-xl">
                    <div class="text-purple-400 text-4xl mb-4">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-green-300">Our Vision</h3>
                    <p class="text-gray-300">To be the most trusted technology partner for businesses worldwide, known for our technical excellence, innovative approach, and commitment to delivering exceptional value to our clients.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-20 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-6 text-gradient">Our Core Values</h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">These principles guide everything we do, from how we build our products to how we interact with our clients and each other.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="glass-card p-6 rounded-xl hover:transform hover:scale-105 transition-all duration-300">
                    <div class="text-purple-400 text-4xl mb-4">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-green-300">Innovation</h3>
                    <p class="text-gray-300">We constantly push boundaries and explore new technologies to deliver forward-thinking solutions.</p>
                </div>

                <div class="glass-card p-6 rounded-xl hover:transform hover:scale-105 transition-all duration-300">
                    <div class="text-purple-400 text-4xl mb-4">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-green-300">Excellence</h3>
                    <p class="text-gray-300">We set high standards for ourselves, ensuring quality and precision in everything we deliver.</p>
                </div>

                <div class="glass-card p-6 rounded-xl hover:transform hover:scale-105 transition-all duration-300">
                    <div class="text-purple-400 text-4xl mb-4">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-green-300">Collaboration</h3>
                    <p class="text-gray-300">We believe in the power of teamwork and partnership, both internally and with our clients.</p>
                </div>

                <div class="glass-card p-6 rounded-xl hover:transform hover:scale-105 transition-all duration-300">
                    <div class="text-purple-400 text-4xl mb-4">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-green-300">Integrity</h3>
                    <p class="text-gray-300">We operate with honesty, transparency, and ethical practices in all our business dealings.</p>
                </div>

                <div class="glass-card p-6 rounded-xl hover:transform hover:scale-105 transition-all duration-300">
                    <div class="text-purple-400 text-4xl mb-4">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-green-300">Agility</h3>
                    <p class="text-gray-300">We adapt quickly to change and remain flexible in our approach to problem-solving.</p>
                </div>

                <div class="glass-card p-6 rounded-xl hover:transform hover:scale-105 transition-all duration-300">
                    <div class="text-purple-400 text-4xl mb-4">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-green-300">Passion</h3>
                    <p class="text-gray-300">We are deeply committed to our work and enthusiastic about the impact of technology.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Journey Timeline -->
    <section class="py-20 px-4 bg-black bg-opacity-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-6 text-gradient">Our Journey</h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">From a small startup to a global technology partner</p>
            </div>

            <div class="timeline">
                <!-- 2015 -->
                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fas fa-rocket text-black"></i>
                    </div>
                    <div class="timeline-content left glass-card p-6 rounded-xl">
                        <h3 class="text-xl font-bold text-green-300">2015</h3>
                        <p class="text-gray-300">BENINBITS was founded with a team of 5 passionate developers focused on mobile app development.</p>
                    </div>
                </div>

                <!-- 2017 -->
                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fas fa-expand-alt text-black"></i>
                    </div>
                    <div class="timeline-content right glass-card p-6 rounded-xl">
                        <h3 class="text-xl font-bold text-green-300">2017</h3>
                        <p class="text-gray-300">Expanded our services to include web development and cloud solutions. Team grew to 15 members.</p>
                    </div>
                </div>

                <!-- 2019 -->
                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fas fa-globe text-black"></i>
                    </div>
                    <div class="timeline-content left glass-card p-6 rounded-xl">
                        <h3 class="text-xl font-bold text-green-300">2019</h3>
                        <p class="text-gray-300">Opened our first international office and began serving clients across Europe and Asia.</p>
                    </div>
                </div>

                <!-- 2021 -->
                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fas fa-robot text-black"></i>
                    </div>
                    <div class="timeline-content right glass-card p-6 rounded-xl">
                        <h3 class="text-xl font-bold text-green-300">2021</h3>
                        <p class="text-gray-300">Launched our AI and Machine Learning division, partnering with leading research institutions.</p>
                    </div>
                </div>

                <!-- 2023 -->
                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fas fa-award text-black"></i>
                    </div>
                    <div class="timeline-content left glass-card p-6 rounded-xl">
                        <h3 class="text-xl font-bold text-green-300">2023</h3>
                        <p class="text-gray-300">Received industry recognition for our innovative solutions and reached 30 team members.</p>
                    </div>
                </div>

                <!-- 2025 -->
                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fas fa-chart-line text-black"></i>
                    </div>
                    <div class="timeline-content right glass-card p-6 rounded-xl">
                        <h3 class="text-xl font-bold text-green-300">2025</h3>
                        <p class="text-gray-300">Today, with over 45 team members, we continue to grow and innovate, serving clients in 25+ countries.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Team Section -->
    <section class="py-20 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-6 text-gradient">Our Leadership Team</h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">Meet the visionaries guiding BENINBITS towards excellence</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="glass-card p-6 rounded-xl hover:transform hover:scale-105 transition-all duration-300">
                    <img src="/api/placeholder/300/300" alt="CEO" class="w-full h-auto rounded-lg mb-4">
                    <h3 class="text-2xl font-bold mb-1 text-green-300">David Chen</h3>
                    <p class="text-purple-400 mb-3">Founder & CEO</p>
                    <p class="text-gray-300 mb-4">With over 15 years in technology leadership, David drives BENINBITS' vision and strategy.</p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-purple-400 hover:text-green-400"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-purple-400 hover:text-green-400"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="glass-card p-6 rounded-xl hover:transform hover:scale-105 transition-all duration-300">
                    <img src="/api/placeholder/300/300" alt="CTO" class="w-full h-auto rounded-lg mb-4">
                    <h3 class="text-2xl font-bold mb-1 text-green-300">Sophia Rodriguez</h3>
                    <p class="text-purple-400 mb-3">Chief Technology Officer</p>
                    <p class="text-gray-300 mb-4">A brilliant technologist with expertise in AI and cloud architecture.</p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-purple-400 hover:text-green-400"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-purple-400 hover:text-green-400"><i class="fab fa-github"></i></a>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="glass-card p-6 rounded-xl hover:transform hover:scale-105 transition-all duration-300">
                    <img src="/api/placeholder/300/300" alt="COO" class="w-full h-auto rounded-lg mb-4">
                    <h3 class="text-2xl font-bold mb-1 text-green-300">Michael Johnson</h3>
                    <p class="text-purple-400 mb-3">Chief Operations Officer</p>
                    <p class="text-gray-300 mb-4">Ensures seamless operations and delivery excellence across all projects.</p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-purple-400 hover:text-green-400"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-purple-400 hover:text-green-400"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 px-4 bg-black bg-opacity-50">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6 text-gradient">Why Choose BENINBITS?</h2>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            <p class="text-gray-300"><span class="font-bold text-white">Technical Excellence:</span> Our team comprises top talent with deep expertise across diverse technologies.</p>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            <p class="text-gray-300"><span class="font-bold text-white">Client-Centric Approach:</span> We prioritize understanding your business needs and delivering solutions that align with your goals.</p>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            <p class="text-gray-300"><span class="font-bold text-white">End-to-End Services:</span> From strategy to implementation and ongoing support, we provide comprehensive technology services.</p>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            <p class="text-gray-300"><span class="font-bold text-white">Innovation Focus:</span> We stay ahead of technology trends to bring you cutting-edge solutions.</p>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mt-1 mr-3"></i>
                            <p class="text-gray-300"><span class="font-bold text-white">Proven Track Record:</span> Our portfolio showcases successful projects across industries and technologies.</p>
                        </li>
                    </ul>
                </div>
                <div class="glass-card p-8 rounded-xl">
                    <div class="text-center mb-6">
                        <div class="text-5xl font-bold text-green-400 mb-2">98%</div>
                        <p class="text-gray-300">Client satisfaction rate</p>
                    </div>
                    <div class="text-center mb-6">
                        <div class="text-5xl font-bold text-green-400 mb-2">150+</div>
                        <p class="text-gray-300">Projects delivered</p>
                    </div>
                    <div class="text-center">
                        <div class="text-5xl font-bold text-green-400 mb-2">25+</div>
                        <p class="text-gray-300">Countries served</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-green-900 to-purple-900">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h2 class="text-4xl font-bold mb-6">Ready to Partner with BENINBITS?</h2>
            <p class="text-xl mb-8 text-gray-300">Let's discuss how we can help transform your business</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <button class="btn-primary text-lg px-8 py-3 rounded-full">
                    Schedule a Consultation
                </button>
                <button class="btn-secondary border-2 text-lg px-8 py-3 rounded-full">
                    View Our Work
                </button>
            </div>
        </div>
    </section>
@include ('layouts.footer')
</body>
</html>
