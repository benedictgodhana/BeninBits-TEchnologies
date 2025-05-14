<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BENINBITS TECHNOLOGIES</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #8A2BE2; /* Purple */
            --secondary: #90EE90; /* Light Green */
            --accent: #9370DB; /* Medium Purple */
            --light: #D8BFD8; /* Lighter Purple */
            --dark: #000000; /* Black */
            --gray: #333333;
        }

        @font-face {
          font-family: 'Futura LT';
          src: url('/fonts/futura-lt/FuturaLT-Book.ttf') format('woff2'),
               url('/fonts/futura-lt/FuturaLT.ttf') format('woff'),
               url('/fonts/futura-lt/FuturaLT-Condensed.ttf') format('truetype');
          font-weight: normal;
          font-style: normal;
        }

        body {
            font-family: 'Futura LT', 'Inter', sans-serif;
            color: #333;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .nav-bg {
            background: var(--dark);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transform: translateY(0);
            transition: all 0.3s ease;
            color: white;
        }

        .nav-scrolled {
            background: rgba(0, 0, 0, 0.9);
        }

        .text-primary {
            color: var(--secondary);
        }

        .text-white {
            color: #fff;
        }

        .bg-primary {
            background: linear-gradient(135deg, var(--primary), var(--accent));
        }

        .hover-effect {
            position: relative;
            overflow: hidden;
        }

        .hover-effect::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--secondary);
            transition: width 0.3s ease;
        }

        .hover-effect:hover::after {
            width: 100%;
        }

        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .mobile-menu.show {
            transform: translateX(0);
        }

        .menu-backdrop {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .menu-backdrop.show {
            opacity: 1;
        }

        .mobile-menu .nav-link {
            color: white !important;
        }

        .mobile-menu .nav-link:hover {
            color: var(--secondary) !important;
        }

        .logo-text {
            font-weight: 700;
            font-size: 1.5rem;
            color: white;
        }

        .logo-highlight {
            color: var(--secondary);
        }

        .nav-link {
            color: white;
            font-weight: 500;
        }

        .nav-link:hover {
            color: var(--secondary);
        }

        .contact-button {
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            box-shadow: 0 4px 15px rgba(138, 43, 226, 0.3);
            transition: all 0.3s ease;
            padding: 10px 20px;
            border-radius: 4px;
            color: white;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }

        .contact-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(138, 43, 226, 0.4);
        }

        .login-button {
            background: transparent;
            border: 2px solid var(--secondary);
            color: var(--secondary);
            transition: all 0.3s ease;
            padding: 8px 20px;
            border-radius: 4px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }

        .login-button:hover {
            background-color: rgba(144, 238, 144, 0.1);
            color: white;
            transform: translateY(-2px);
        }

        /* Dropdown Menu */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.9);
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 4px;
            margin-top: 10px;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .dropdown-content a:hover {
            background-color: rgba(144, 238, 144, 0.1);
            color: var(--secondary);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        @media (min-width: 1024px) {
            .mobile-menu {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Backdrop -->
    <div id="menuBackdrop" class="fixed inset-0 bg-black bg-opacity-50 z-40 menu-backdrop hidden lg:hidden"></div>

    <nav class="fixed w-full top-0 z-50 nav-bg">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
            <div style="display: flex; justify-content: space-between; height: 5rem; align-items: center;">
                <!-- Logo -->
                <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <a href="#" style="display: flex; align-items: center; text-decoration: none;">
                    <img src="/images/8b3b53bb-7cd3-479f-8434-9991e2d0cffa.png" alt="BENINBITS Logo" class="logo-image mr-4" style="height: 130px;">
                   <p style="font-size:1.5rem;font-weight:700;color:#90EE90;font-weight:bolder" >Benin<span class="logo-highlight">BITS</span></p>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div style="display: none; align-items: center; gap: 2rem;" class="lg-nav">
                    <a href="/" class="nav-link hover-effect" style="padding: 0.5rem 0.75rem; font-size: 0.95rem;">
                        Home
                    </a>

                    <a href="/about" class="nav-link hover-effect" style="padding: 0.5rem 0.75rem; font-size: 0.95rem;">
                        About Us
                    </a>

                    <div class="dropdown">
                        <a href="#" class="nav-link hover-effect" style="padding: 0.5rem 0.75rem; font-size: 0.95rem;">
                            Services <i class="fas fa-chevron-down" style="font-size: 0.8rem; margin-left: 0.25rem;"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="/services/web-development">Web Development</a>
                            <a href="/services/mobile-apps">Mobile Applications</a>
                            <a href="/services/cloud-solutions">Cloud Solutions</a>
                            <a href="/services/ai-services">AI & Machine Learning</a>
                            <a href="/services/cybersecurity">Cybersecurity</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <a href="/projects" class="nav-link hover-effect" style="padding: 0.5rem 0.75rem; font-size: 0.95rem;">
                            Projects <i class="fas fa-chevron-down" style="font-size: 0.8rem; margin-left: 0.25rem;"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="/projects/case-studies">Case Studies</a>
                            <a href="/projects/portfolio">Portfolio</a>
                            <a href="/projects/client-work">Client Work</a>
                            <a href="/projects/open-source">Open Source</a>
                        </div>
                    </div>

                    <a href="/pricing" class="nav-link hover-effect" style="padding: 0.5rem 0.75rem; font-size: 0.95rem;">
                        Pricing
                    </a>

                    <a href="/blog" class="nav-link hover-effect" style="padding: 0.5rem 0.75rem; font-size: 0.95rem;">
                        Blog
                    </a>



                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <a href="/login" class="login-button">
                            <i class="fas fa-user" style="margin-right: 0.5rem;"></i>
                            Login
                        </a>

                        
                        <a href="/contact" class="contact-button">
                            <i class="fas fa-envelope" style="margin-right: 0.5rem;"></i>
                            Contact Us
                        </a>



                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <button id="menuButton" style="background: transparent; border: none; color: var(--secondary); padding: 0.5rem; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-bars" style="font-size: 1.5rem;"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="mobile-menu fixed top-20 left-0 w-full" style="background-color: rgba(0, 0, 0, 0.95); box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); z-index: 50; max-height: 80vh; overflow-y: auto;">
            <div style="padding: 1rem;">
                <a href="/" class="nav-link" style="display: block; padding: 0.75rem 1rem; display: flex; align-items: center; border-radius: 0.25rem; transition: background-color 0.2s;">
                    <i class="fas fa-home" style="font-size: 1.1rem; margin-right: 0.75rem; color: var(--secondary);"></i> Home
                </a>

                <a href="/about" class="nav-link" style="display: block; padding: 0.75rem 1rem; display: flex; align-items: center; border-radius: 0.25rem; transition: background-color 0.2s;">
                    <i class="fas fa-info" style="font-size: 1.1rem; margin-right: 0.75rem; color: var(--secondary);"></i> About Us
                </a>

                <!-- Services Dropdown Mobile -->
                <div class="mobile-dropdown">
                    <a href="#" class="nav-link dropdown-toggle" style="display: block; padding: 0.75rem 1rem; display: flex; align-items: center; justify-content: space-between; border-radius: 0.25rem; transition: background-color 0.2s;">
                        <span><i class="fas fa-cogs" style="font-size: 1.1rem; margin-right: 0.75rem; color: var(--secondary);"></i> Services</span>
                        <i class="fas fa-chevron-down" style="font-size: 0.8rem; color: var(--secondary);"></i>
                    </a>
                    <div class="mobile-dropdown-content" style="display: none; padding-left: 2rem;">
                        <a href="/services/web-development" class="nav-link" style="display: block; padding: 0.5rem 1rem; font-size: 0.9rem;">Web Development</a>
                        <a href="/services/mobile-apps" class="nav-link" style="display: block; padding: 0.5rem 1rem; font-size: 0.9rem;">Mobile Applications</a>
                        <a href="/services/cloud-solutions" class="nav-link" style="display: block; padding: 0.5rem 1rem; font-size: 0.9rem;">Cloud Solutions</a>
                        <a href="/services/ai-services" class="nav-link" style="display: block; padding: 0.5rem 1rem; font-size: 0.9rem;">AI & Machine Learning</a>
                        <a href="/services/cybersecurity" class="nav-link" style="display: block; padding: 0.5rem 1rem; font-size: 0.9rem;">Cybersecurity</a>
                    </div>
                </div>

                <!-- Projects Dropdown Mobile -->
                <div class="mobile-dropdown">
                    <a href="#" class="nav-link dropdown-toggle" style="display: block; padding: 0.75rem 1rem; display: flex; align-items: center; justify-content: space-between; border-radius: 0.25rem; transition: background-color 0.2s;">
                        <span><i class="fas fa-project-diagram" style="font-size: 1.1rem; margin-right: 0.75rem; color: var(--secondary);"></i> Projects</span>
                        <i class="fas fa-chevron-down" style="font-size: 0.8rem; color: var(--secondary);"></i>
                    </a>
                    <div class="mobile-dropdown-content" style="display: none; padding-left: 2rem;">
                        <a href="/projects/case-studies" class="nav-link" style="display: block; padding: 0.5rem 1rem; font-size: 0.9rem;">Case Studies</a>
                        <a href="/projects/portfolio" class="nav-link" style="display: block; padding: 0.5rem 1rem; font-size: 0.9rem;">Portfolio</a>
                        <a href="/projects/client-work" class="nav-link" style="display: block; padding: 0.5rem 1rem; font-size: 0.9rem;">Client Work</a>
                        <a href="/projects/open-source" class="nav-link" style="display: block; padding: 0.5rem 1rem; font-size: 0.9rem;">Open Source</a>
                    </div>
                </div>

                <a href="/pricing" class="nav-link" style="display: block; padding: 0.75rem 1rem; display: flex; align-items: center; border-radius: 0.25rem; transition: background-color 0.2s;">
                    <i class="fas fa-tags" style="font-size: 1.1rem; margin-right: 0.75rem; color: var(--secondary);"></i> Pricing
                </a>

                <a href="/blog" class="nav-link" style="display: block; padding: 0.75rem 1rem; display: flex; align-items: center; border-radius: 0.25rem; transition: background-color 0.2s;">
                    <i class="fas fa-blog" style="font-size: 1.1rem; margin-right: 0.75rem; color: var(--secondary);"></i> Blog
                </a>

                <a href="/careers" class="nav-link" style="display: block; padding: 0.75rem 1rem; display: flex; align-items: center; border-radius: 0.25rem; transition: background-color 0.2s;">
                    <i class="fas fa-briefcase" style="font-size: 1.1rem; margin-right: 0.75rem; color: var(--secondary);"></i> Careers
                </a>

                <a href="/login" class="nav-link" style="display: block; padding: 0.75rem 1rem; display: flex; align-items: center; border-radius: 0.25rem; transition: background-color 0.2s;">
                    <i class="fas fa-user" style="font-size: 1.1rem; margin-right: 0.75rem; color: var(--secondary);"></i> Login
                </a>

                <div style="padding-top: 1rem;">
                    <a href="/contact" class="contact-button" style="display: flex; justify-content: center; width: 100%;">
                        <i class="fas fa-envelope" style="margin-right: 0.5rem;"></i> Contact Us
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <script>
        // Mobile Menu Toggle
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuBackdrop = document.getElementById('menuBackdrop');
        let isMenuOpen = false;

        function toggleMenu() {
            isMenuOpen = !isMenuOpen;
            mobileMenu.classList.toggle('show');
            menuBackdrop.classList.toggle('show');
            menuButton.innerHTML = isMenuOpen ?
                '<i class="fas fa-times" style="font-size: 1.5rem; color: #90EE90;"></i>' :
                '<i class="fas fa-bars" style="font-size: 1.5rem; color: #90EE90;"></i>';
        }

        menuButton.addEventListener('click', toggleMenu);
        menuBackdrop.addEventListener('click', toggleMenu);

        // Close menu on ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && isMenuOpen) toggleMenu();
        });

        // Mobile Dropdowns
        document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                const content = this.nextElementSibling;
                const isOpen = content.style.display === 'block';

                // Close all other dropdowns
                document.querySelectorAll('.mobile-dropdown-content').forEach(dropdown => {
                    dropdown.style.display = 'none';
                });

                // Toggle current dropdown
                content.style.display = isOpen ? 'none' : 'block';

                // Toggle icon
                const icon = this.querySelector('.fa-chevron-down');
                document.querySelectorAll('.dropdown-toggle .fa-chevron-down').forEach(i => {
                    i.style.transform = 'rotate(0deg)';
                });

                if (!isOpen) {
                    icon.style.transform = 'rotate(180deg)';
                }
            });
        });

        // Scroll Effect
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('nav-scrolled');
            } else {
                nav.classList.remove('nav-scrolled');
            }
        });

        // Show desktop nav for larger screens
        function handleResize() {
            const lgNav = document.querySelector('.lg-nav');
            const menuBtn = document.getElementById('menuButton');
            if (window.innerWidth >= 1024) {
                lgNav.style.display = 'flex';
                menuBtn.style.display = 'none';
            } else {
                lgNav.style.display = 'none';
                menuBtn.style.display = 'flex';
            }
        }

        window.addEventListener('resize', handleResize);
        handleResize(); // Initial call

        // Active Link Detection
        const currentUrl = window.location.pathname;
        document.querySelectorAll('nav a').forEach(link => {
            if (link.getAttribute('href') === currentUrl) {
                link.classList.add('active');
                link.style.color = '#90EE90';
            }
        });
    </script>


<script src="https://cdn.userway.org/widget.js" data-account="gER1tSTnfp"></script>
</body>
</html>
