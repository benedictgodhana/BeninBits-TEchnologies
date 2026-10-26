<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BENINBITS TECHNOLOGIES | Navigation Layout</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #8A2BE2;
            --primary-light: #9370DB;
            --primary-dark: #6A1BB2;
            --secondary: #2D3748;
            --gray-light: #718096;
            --gray-lighter: #E2E8F0;
            --white: #FFFFFF;
            --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        @font-face {
            font-family: 'Futura LT';
            src: url('/fonts/futura-lt/FuturaLT-Book.ttf') format('woff2'),
                 url('/fonts/futura-lt/FuturaLT.ttf') format('woff'),
                 url('/fonts/futura-lt/FuturaLT-Condensed.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Futura LT', 'Inter', sans-serif;
            background: var(--gradient);
        }

        /* Enhanced Navigation Styles */
        nav {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: calc(100% - 40px);
            max-width: 1400px;
            z-index: 1000;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-container {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(30px) saturate(180%);
            -webkit-backdrop-filter: blur(30px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 20px;
            padding: 12px 24px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1),
                        0 0 0 1px rgba(255, 255, 255, 0.1) inset;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.3s ease;
        }

        nav.scrolled .nav-container {
            background: rgba(255, 255, 255, 0.12);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15),
                        0 0 0 1px rgba(255, 255, 255, 0.15) inset;
        }

        /* Enhanced Logo */
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            transition: transform 0.3s ease;
            position: relative;
            padding: 5px;
        }

        .logo:hover {
            transform: scale(1.02);
        }

        .logo-img {
            height: 45px;
            filter: drop-shadow(0 2px 8px rgba(138, 43, 226, 0.3));
            transition: all 0.3s ease;
        }

        .logo:hover .logo-img {
            filter: drop-shadow(0 2px 12px rgba(138, 43, 226, 0.5));
        }

        .logo-text {
            font-size: 1.4rem;
            font-weight: 800;
            background: linear-gradient(135deg, #fff 0%, rgba(255,255,255,0.8) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -0.5px;
            position: relative;
        }

        .logo-text::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary), var(--primary-light));
            transition: width 0.3s ease;
        }

        .logo:hover .logo-text::after {
            width: 100%;
        }

        /* Enhanced Desktop Navigation */
        .nav-links {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .nav-link {
            position: relative;
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 12px;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 6px;
            overflow: hidden;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .nav-link:hover::before {
            left: 100%;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.12);
            color: #fff;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .nav-link.active {
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Enhanced Dropdown */
        .dropdown {
            position: relative;
        }

        .dropdown-toggle {
            cursor: pointer;
        }

        .dropdown-icon {
            font-size: 0.7rem;
            transition: transform 0.3s ease;
        }

        .dropdown:hover .dropdown-icon {
            transform: rotate(180deg);
        }

        .dropdown-menu {
            position: absolute;
            top: calc(100% + 12px);
            left: 0;
            min-width: 240px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(30px) saturate(180%);
            -webkit-backdrop-filter: blur(30px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 16px;
            padding: 8px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
            z-index: 1001;
        }

        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-item {
            display: block;
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            padding: 12px 16px;
            border-radius: 10px;
            font-size: 0.9rem;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
        }

        .dropdown-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: var(--primary);
            transform: scaleY(0);
            transition: transform 0.2s ease;
        }

        .dropdown-item:hover {
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
            transform: translateX(4px);
        }

        .dropdown-item:hover::before {
            transform: scaleY(1);
        }

        .dropdown-item i {
            width: 16px;
            opacity: 0.8;
            transition: opacity 0.2s ease;
        }

        .dropdown-item:hover i {
            opacity: 1;
        }

        /* Enhanced CTA Button */
        .cta-button {
            background: linear-gradient(135deg, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0.1) 100%);
            color: #fff;
            padding: 12px 24px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .cta-button:hover::before {
            left: 100%;
        }

        .cta-button:hover {
            background: linear-gradient(135deg, rgba(255,255,255,0.3) 0%, rgba(255,255,255,0.2) 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 255, 255, 0.15);
        }

        /* Enhanced Mobile Menu Button */
        .mobile-menu-btn {
            display: none;
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
            padding: 10px;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 44px;
            height: 44px;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .mobile-menu-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .mobile-menu-btn:hover::before {
            left: 100%;
        }

        .mobile-menu-btn:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        /* Enhanced Mobile Menu */
        .mobile-menu {
            position: fixed;
            top: 100px;
            left: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(30px) saturate(180%);
            -webkit-backdrop-filter: blur(30px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 20px;
            padding: 20px;
            max-height: calc(100vh - 140px);
            overflow-y: auto;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-20px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
            z-index: 1001;
        }

        .mobile-menu.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .mobile-nav-link {
            display: block;
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            padding: 14px 16px;
            border-radius: 12px;
            font-weight: 500;
            margin-bottom: 6px;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
        }

        .mobile-nav-link::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: var(--primary);
            transform: scaleY(0);
            transition: transform 0.2s ease;
        }

        .mobile-nav-link:hover,
        .mobile-nav-link.active {
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
        }

        .mobile-nav-link:hover::before,
        .mobile-nav-link.active::before {
            transform: scaleY(1);
        }

        .mobile-dropdown-toggle {
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
        }

        .mobile-dropdown-content {
            display: none;
            padding-left: 20px;
            margin-top: 6px;
        }

        .mobile-dropdown-content.active {
            display: block;
            animation: slideDown 0.3s ease;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .mobile-dropdown-item {
            display: block;
            color: rgba(255, 255, 255, 0.85);
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 10px;
            font-size: 0.9rem;
            margin-bottom: 4px;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .mobile-dropdown-item:hover {
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            transform: translateX(4px);
        }

        .mobile-cta {
            margin-top: 16px;
            padding-top: 16px;
            border-top: 1px solid rgba(255, 255, 255, 0.15);
        }

        /* Search Bar */
        .search-container {
            position: relative;
            margin-right: 10px;
        }

        .search-input {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            padding: 10px 16px 10px 40px;
            color: white;
            font-size: 0.9rem;
            width: 200px;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
            width: 250px;
        }

        .search-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .search-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.7);
        }

        /* Notification Badge */
        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .search-input {
                width: 150px;
            }

            .search-input:focus {
                width: 180px;
            }
        }

        @media (max-width: 1024px) {
            .nav-links, .search-container {
                display: none;
            }

            .mobile-menu-btn {
                display: flex;
            }

            nav {
                top: 10px;
                width: calc(100% - 20px);
            }
        }

        @media (max-width: 768px) {
            .logo-img {
                height: 35px;
            }

            .logo-text {
                font-size: 1.2rem;
            }

            .nav-container {
                padding: 10px 16px;
            }
        }
    </style>
</head>
<body>
    <nav id="navbar">
        <div class="nav-container">
            <a href="/" class="logo">
                <img src="/images/8b3b53bb-7cd3-479f-8434-9991e2d0cffa.png" alt="BeninBITS Logo" class="logo-img">
                <span class="logo-text">Benin<span style="color: rgba(255,255,255,0.7);">BITS</span></span>
            </a>

            <div class="nav-links">
                <a href="/" class="nav-link active">
                    <i class="fas fa-home"></i> Home
                </a>
                <a href="/about" class="nav-link">
                    <i class="fas fa-info-circle"></i> About
                </a>

                <div class="dropdown">
                    <a class="nav-link dropdown-toggle">
                        <i class="fas fa-cogs"></i> Services <i class="fas fa-chevron-down dropdown-icon"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="/services/web-development" class="dropdown-item">
                            <i class="fas fa-code"></i> Web Development
                        </a>
                        <a href="/services/mobile-apps" class="dropdown-item">
                            <i class="fas fa-mobile-alt"></i> Mobile Apps
                        </a>
                        <a href="/services/cloud-solutions" class="dropdown-item">
                            <i class="fas fa-cloud"></i> Cloud Solutions
                        </a>
                        <a href="/services/ai-services" class="dropdown-item">
                            <i class="fas fa-brain"></i> AI & ML
                        </a>
                        <a href="/services/cybersecurity" class="dropdown-item">
                            <i class="fas fa-shield-alt"></i> Cybersecurity
                        </a>
                    </div>
                </div>

                <div class="dropdown">
                    <a class="nav-link dropdown-toggle">
                        <i class="fas fa-project-diagram"></i> Projects <i class="fas fa-chevron-down dropdown-icon"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="/projects/case-studies" class="dropdown-item">
                            <i class="fas fa-file-alt"></i> Case Studies
                        </a>
                        <a href="/projects/portfolio" class="dropdown-item">
                            <i class="fas fa-briefcase"></i> Portfolio
                        </a>
                        <a href="/projects/client-work" class="dropdown-item">
                            <i class="fas fa-users"></i> Client Work
                        </a>
                        <a href="/projects/open-source" class="dropdown-item">
                            <i class="fas fa-code-branch"></i> Open Source
                        </a>
                    </div>
                </div>

                <div class="search-container">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" class="search-input" placeholder="Search...">
                </div>

                <a href="/contact" class="cta-button">
                    <i class="fas fa-envelope"></i> Contact Us
                    <span class="notification-badge">3</span>
                </a>
            </div>

            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <div class="mobile-menu" id="mobileMenu">
        <a href="/" class="mobile-nav-link active">
            <i class="fas fa-home"></i> Home
        </a>
        <a href="/about" class="mobile-nav-link">
            <i class="fas fa-info-circle"></i> About
        </a>

        <div class="mobile-dropdown">
            <div class="mobile-nav-link mobile-dropdown-toggle">
                <span><i class="fas fa-cogs"></i> Services</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="mobile-dropdown-content">
                <a href="/services/web-development" class="mobile-dropdown-item">
                    <i class="fas fa-code"></i> Web Development
                </a>
                <a href="/services/mobile-apps" class="mobile-dropdown-item">
                    <i class="fas fa-mobile-alt"></i> Mobile Apps
                </a>
                <a href="/services/cloud-solutions" class="mobile-dropdown-item">
                    <i class="fas fa-cloud"></i> Cloud Solutions
                </a>
                <a href="/services/ai-services" class="mobile-dropdown-item">
                    <i class="fas fa-brain"></i> AI & ML
                </a>
                <a href="/services/cybersecurity" class="mobile-dropdown-item">
                    <i class="fas fa-shield-alt"></i> Cybersecurity
                </a>
            </div>
        </div>

        <div class="mobile-dropdown">
            <div class="mobile-nav-link mobile-dropdown-toggle">
                <span><i class="fas fa-project-diagram"></i> Projects</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="mobile-dropdown-content">
                <a href="/projects/case-studies" class="mobile-dropdown-item">
                    <i class="fas fa-file-alt"></i> Case Studies
                </a>
                <a href="/projects/portfolio" class="mobile-dropdown-item">
                    <i class="fas fa-briefcase"></i> Portfolio
                </a>
                <a href="/projects/client-work" class="mobile-dropdown-item">
                    <i class="fas fa-users"></i> Client Work
                </a>
                <a href="/projects/open-source" class="mobile-dropdown-item">
                    <i class="fas fa-code-branch"></i> Open Source
                </a>
            </div>
        </div>

        <div class="mobile-cta">
            <a href="/contact" class="cta-button" style="width: 100%; justify-content: center;">
                <i class="fas fa-envelope"></i> Contact Us
                <span class="notification-badge">3</span>
            </a>
        </div>
    </div>

    <script>
        // Scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        let isMenuOpen = false;

        mobileMenuBtn.addEventListener('click', () => {
            isMenuOpen = !isMenuOpen;
            mobileMenu.classList.toggle('active');
            mobileMenuBtn.querySelector('i').className = isMenuOpen ? 'fas fa-times' : 'fas fa-bars';
        });

        // Mobile dropdown toggles
        document.querySelectorAll('.mobile-dropdown-toggle').forEach(toggle => {
            toggle.addEventListener('click', () => {
                const content = toggle.nextElementSibling;
                const icon = toggle.querySelector('.fa-chevron-down');

                content.classList.toggle('active');
                icon.style.transform = content.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0)';
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (isMenuOpen && !mobileMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
                isMenuOpen = false;
                mobileMenu.classList.remove('active');
                mobileMenuBtn.querySelector('i').className = 'fas fa-bars';
            }
        });

        // Close mobile menu on ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && isMenuOpen) {
                isMenuOpen = false;
                mobileMenu.classList.remove('active');
                mobileMenuBtn.querySelector('i').className = 'fas fa-bars';
            }
        });

        // Search functionality
        const searchInput = document.querySelector('.search-input');
        if (searchInput) {
            searchInput.addEventListener('focus', () => {
                searchInput.parentElement.classList.add('focused');
            });

            searchInput.addEventListener('blur', () => {
                searchInput.parentElement.classList.remove('focused');
            });
        }
    </script>
</body>
</html>
