<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donkraft - Craft Your Perfect Travel Story</title>
    <link rel="icon" type="image/png" href="/images/logo.png">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.5/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
        :root {
            --primary-color: #34D399;
            --secondary-color: #3B82F6;
            --text-color: #1F2937;
            --light-gray: #F3F4F6;
            --transition: all 0.5s ease-in-out;
        }

        body {
            margin: 0;
            font-family: 'Figtree', sans-serif;
            background-color: #f9fafb;
            color: var(--text-color);
            overflow-x: hidden;
            line-height: 1.6;
        }

        .faq-header {
            text-align: center;
            padding: 8rem 1rem;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/images/3d-tropical-palm-tree-island.jpg') center/cover no-repeat;
            color: white;
            overflow: hidden;
            position: relative;
        }

        .faq-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(5, 150, 105, 0.6), rgba(37, 99, 235, 0.6));
            z-index: 1;
        }

        .header-title {
            font-size: 3.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 2;
        }

        .header-subtitle {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
        }

        .header-content {
            position: relative;
            z-index: 2;
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .faq-content {
            max-width: 1000px;
            margin: 4rem auto;
            padding: 0 2rem;
        }

        .faq-categories {
    display: flex;
    flex-wrap: wrap; /* Ensures buttons wrap if the screen is small */
    gap: 10px; /* Adds spacing between buttons */
    justify-content: center; /* Centers buttons horizontally */
    padding: 10px;
    border-radius: 8px;
}

.category-btn {
    flex: 1; /* Ensures equal spacing between buttons */
    min-width: 120px; /* Prevents buttons from getting too small */
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    background: #ddd;
    border-radius: 5px;
    transition: 0.3s;
    text-align: center;
}

        .category-btn:hover, .category-btn.active {
            background-color: var(--primary-color);
            color: white;
        }

        .faq-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .faq-item {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            transition: var(--transition);
        }

        .faq-question {
            padding: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-weight: 600;
        }

        .faq-question:hover {
            background-color: var(--light-gray);
        }

        .faq-answer {
            padding: 0 1.5rem;
            max-height: 0;
            overflow: hidden;
            transition: var(--transition);
            color: black;
        }

        .faq-answer.open {
            padding: 1.5rem;
            max-height: 500px;
            border-top: 1px solid var(--light-gray);
        }

        .faq-toggle {
            transition: var(--transition);
        }

        .faq-toggle.open {
            transform: rotate(45deg);
        }

        .contact-section {
            text-align: center;
            padding: 4rem 2rem;
            background: var(--light-gray);
        }

        .contact-section h2 {
            font-size: 2rem;
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
        }

        .contact-btn {
            display: inline-block;
            padding: 1rem 2rem;
            background-color: var(--primary-color);
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            transition: var(--transition);
            margin-top: 1rem;
        }

        .contact-btn:hover {
            background-color: var(--secondary-color);
            transform: translateY(-5px);
        }

        /* Category Content */
        .category-content {
            display: none;
        }

        .category-content.active {
            display: block;
            animation: fadeIn 0.5s ease-in-out;
        }

        @media (max-width: 768px) {
            .header-title {
                font-size: 2.5rem;
            }
            .faq-categories {
                gap: 0.5rem;
            }
            .category-btn {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Navigation will be included here -->
    @include('layouts.navigation')

    <header class="faq-header">
        <div class="header-content">
            <h1 class="header-title">Frequently Asked Questions</h1>
            <p class="header-subtitle">Find answers to common questions about our services, pricing, and project management approach.</p>
        </div>
    </header>

    <section class="faq-content">
    <div x-data="{ activeCategory: 'general', openQuestion: null }">
    <div class="faq-categories">
                <button class="category-btn" :class="{ 'active': activeCategory === 'general' }" @click="activeCategory = 'general'">General Questions</button>
                <button class="category-btn" :class="{ 'active': activeCategory === 'pricing' }" @click="activeCategory = 'pricing'">Pricing Questions</button>
                <button class="category-btn" :class="{ 'active': activeCategory === 'project' }" @click="activeCategory = 'project'">Project Management</button>
                <button class="category-btn" :class="{ 'active': activeCategory === 'support' }" @click="activeCategory = 'support'">Support & Maintenance</button>
            </div>
        <!-- General Questions -->
        <div class="category-content" :class="{ 'active': activeCategory === 'general' }">
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question" @click="openQuestion = openQuestion === 1 ? null : 1">
                        <span>What services does your company offer?</span>
                        <span class="faq-toggle" :class="{ 'open': openQuestion === 1 }">+</span>
                    </div>
                    <div class="faq-answer" :class="{ 'open': openQuestion === 1 }">
                        <p>We specialize in:</p>
                        <ul>
                            <li>Designing and delivering custom IT solutions.</li>
                            <li>Independent IT project management for third-party solutions.</li>
                            <li>Managing non-IT projects on a case-by-case basis.</li>
                        </ul>
                        <p>We'll soon be offering IT Infrastructure Optimization, Data and Analytics, cloud solutions and cybersecurity services.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" @click="openQuestion = openQuestion === 2 ? null : 2">
                        <span>Can you manage a project that's already underway?</span>
                        <span class="faq-toggle" :class="{ 'open': openQuestion === 2 }">+</span>
                    </div>
                    <div class="faq-answer" :class="{ 'open': openQuestion === 2 }">
                        <p>Yes, we can seamlessly take over the project management of ongoing IT or non-IT projects, ensuring smooth execution and alignment with your objectives.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" @click="openQuestion = openQuestion === 3 ? null : 3">
                        <span>What industries do you serve?</span>
                        <span class="faq-toggle" :class="{ 'open': openQuestion === 3 }">+</span>
                    </div>
                    <div class="faq-answer" :class="{ 'open': openQuestion === 3 }">
                        <p>We work across various sectors, including healthcare, education, retail, logistics, and NGOs.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" @click="openQuestion = openQuestion === 4 ? null : 4">
                        <span>What is your project management approach?</span>
                        <span class="faq-toggle" :class="{ 'open': openQuestion === 4 }">+</span>
                    </div>
                    <div class="faq-answer" :class="{ 'open': openQuestion === 4 }">
                        <p>We follow a structured yet flexible approach:</p>
                        <ul>
                            <li>Discovery Phase: Understand the project's scope and goals.</li>
                            <li>Planning Phase: Develop timelines, budgets, and resource allocation.</li>
                            <li>Execution Phase: Manage deliverables, vendors, and quality assurance.</li>
                            <li>Monitoring & Reporting: Provide progress updates and address challenges.</li>
                            <li>Delivery: Ensure the project is completed on time and within budget.</li>
                            <li>Monitoring: Ensure the project has met customer deliverable and provide support where necessary.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pricing Questions -->
        <div class="category-content" :class="{ 'active': activeCategory === 'pricing' }">
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question" @click="openQuestion = openQuestion === 5 ? null : 5">
                        <span>How do you determine project costs?</span>
                        <span class="faq-toggle" :class="{ 'open': openQuestion === 5 }">+</span>
                    </div>
                    <div class="faq-answer" :class="{ 'open': openQuestion === 5 }">
                        <p>Pricing is based on project complexity, duration, resource requirements, and any specific customizations. We offer flexible plans, including hourly rates and fixed-cost models.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" @click="openQuestion = openQuestion === 6 ? null : 6">
                        <span>Are there hidden charges?</span>
                        <span class="faq-toggle" :class="{ 'open': openQuestion === 6 }">+</span>
                    </div>
                    <div class="faq-answer" :class="{ 'open': openQuestion === 6 }">
                        <p>No, all costs are transparently discussed and outlined in the contract before work begins.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Management -->
        <div class="category-content" :class="{ 'active': activeCategory === 'project' }">
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question" @click="openQuestion = openQuestion === 7 ? null : 7">
                        <span>How do you ensure data security during project execution?</span>
                        <span class="faq-toggle" :class="{ 'open': openQuestion === 7 }">+</span>
                    </div>
                    <div class="faq-answer" :class="{ 'open': openQuestion === 7 }">
                        <p>We follow strict data protection protocols, including encrypted communication, limited access to sensitive information, and compliance with local and international data privacy regulations.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" @click="openQuestion = openQuestion === 8 ? null : 8">
                        <span>What project management tools do you use?</span>
                        <span class="faq-toggle" :class="{ 'open': openQuestion === 8 }">+</span>
                    </div>
                    <div class="faq-answer" :class="{ 'open': openQuestion === 8 }">
                        <p>We leverage industry-standard tools such as Trello or ClickUp for task tracking, collaboration, and timeline management.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" @click="openQuestion = openQuestion === 9 ? null : 9">
                        <span>Can you train my team after project delivery?</span>
                        <span class="faq-toggle" :class="{ 'open': openQuestion === 9 }">+</span>
                    </div>
                    <div class="faq-answer" :class="{ 'open': openQuestion === 9 }">
                        <p>Yes, we offer post-delivery training to ensure your team can effectively use the solution. Training packages are customizable based on your needs.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" @click="openQuestion = openQuestion === 10 ? null : 10">
                        <span>What is your typical project timeline?</span>
                        <span class="faq-toggle" :class="{ 'open': openQuestion === 10 }">+</span>
                    </div>
                    <div class="faq-answer" :class="{ 'open': openQuestion === 10 }">
                        <p>Project timelines vary depending on complexity:</p>
                        <ul>
                            <li>Small projects: 1–3 months</li>
                            <li>Medium projects: 3–6 months</li>
                            <li>Large projects: 6–12 months</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Support & Maintenance -->
        <div class="category-content" :class="{ 'active': activeCategory === 'support' }">
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question" @click="openQuestion = openQuestion === 11 ? null : 11">
                        <span>Do you offer ongoing support and maintenance?</span>
                        <span class="faq-toggle" :class="{ 'open': openQuestion === 11 }">+</span>
                    </div>
                    <div class="faq-answer" :class="{ 'open': openQuestion === 11 }">
                        <p>Yes, we provide retainer-based support for ongoing system maintenance, updates, and enhancements.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" @click="openQuestion = openQuestion === 12 ? null : 12">
                        <span>What happens if I am unsatisfied with the service?</span>
                        <span class="faq-toggle" :class="{ 'open': openQuestion === 12 }">+</span>
                    </div>
                    <div class="faq-answer" :class="{ 'open': openQuestion === 12 }">
                        <p>We prioritize customer satisfaction and encourage open communication throughout the project. If issues arise, we work with you to address them promptly and ensure the final product meets your expectations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="contact-section">
        <h2>Still Have Questions?</h2>
        <p>Our friendly team is here to help with any additional questions you might have about our services or project management approach.</p>
        <a href="/contact" class="contact-btn">Contact Us</a>
    </section>

    <!-- Footer will be included here -->
    @include('layouts.footer')

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Alpine.js handles most of our interactions
        });
    </script>
</body>
</html>
