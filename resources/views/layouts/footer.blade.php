<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer - BENINBITS TECHNOLOGIES</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">



    <style>
        * {
            font-family: 'Futura LT', sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --primary-purple: #6a0dad;
            --light-green: #90ee90;
            --black: #121212;
            --dark-purple: #4b0082;
            --light-purple: #9370db;
        }

        footer {
            color: #f8fafc;
            padding: 6rem 2rem 2rem;
            position: relative;
            overflow: hidden;
            border-top: 3px solid var(--primary-purple);
            background-color: var(--black);
            background-image:
                linear-gradient(45deg, rgba(106, 13, 173, 0.05) 25%, transparent 25%, transparent 75%, rgba(106, 13, 173, 0.05) 75%),
                linear-gradient(-45deg, rgba(106, 13, 173, 0.05) 25%, transparent 25%, transparent 75%, rgba(106, 13, 173, 0.05) 75%);
            background-size: 40px 40px;
        }

        .footer-container {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
        }

        .footer-section {
            padding: 1.5rem;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
        }

        .footer-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .footer-section h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--light-green);
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 12px;
            position: relative;
        }

        .footer-section h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary-purple);
        }

        .footer-section p {
            color: #94a3b8;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section li {
            margin-bottom: 1rem;
        }

        .footer-section a {
            color: #94a3b8;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            padding: 8px 12px;
            border-radius: 8px;
        }

        .footer-section a:hover {
            color: var(--light-green);
            background: rgba(106, 13, 173, 0.1);
            transform: translateX(10px);
        }

        .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .social-icons a {
            width: 45px;
            height: 45px;
            background: #1e293b;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .social-icons a::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: var(--primary-purple);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .social-icons a:hover {
            transform: rotate(5deg) scale(1.1);
            box-shadow: 0 4px 15px rgba(106, 13, 173, 0.3);
        }

        .social-icons a:hover::before {
            opacity: 1;
        }

        .social-icons i {
            color: white;
            font-size: 1.4rem;
            position: relative;
            z-index: 1;
        }

        .copyright {
            margin-top: 4rem;
            text-align: center;
            padding: 2rem 0 0;
            border-top: 1px solid rgba(106, 13, 173, 0.1);
            position: relative;
            color: #64748b;
        }

        .copyright::before {
            content: '💻';
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.5rem;
            opacity: 0.3;
        }

        .highlight {
            color: var(--light-green);
        }

        @media (max-width: 768px) {
            .footer-container {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .footer-section h3 {
                justify-content: center;
            }

            .footer-section h3::after {
                left: 50%;
                transform: translateX(-50%);
            }

            .footer-section a {
                justify-content: center;
            }

            .social-icons {
                justify-content: center;
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
<footer>
 <div class="footer-container">
    <!-- About Section -->
    <div class="footer-section">
        <h3><i class="mdi mdi-server-security"></i>About Us</h3>
        <p>
            Leading the digital transformation revolution with innovative IT solutions.
            Empowering businesses through cutting-edge technology and strategic consulting.
        </p>
        <div class="social-icons">
            <a href="#"><i class="mdi mdi-linkedin"></i></a>
            <a href="#"><i class="mdi mdi-github"></i></a>
            <a href="#"><i class="mdi mdi-twitter"></i></a>
            <a href="#"><i class="mdi mdi-youtube"></i></a>
            <a href="https://api.whatsapp.com/send?phone=254701760930&text=Hello%20there!%20I%20am%20interested%20in%20your%20services%20at%20BENINBITS%20TECHNOLOGIES.%20Can%20you%20tell%20me%20more?" target="_blank">
    <i class="mdi mdi-whatsapp"></i>
</a>

        </div>
    </div>
    <!-- Solutions -->
    <div class="footer-section">
        <h3><i class="mdi mdi-shield-check"></i>Solutions</h3>
        <ul>
            <li><a href="/cloud"><i class="mdi mdi-cloud"></i>Cloud Services</a></li>
            <li><a href="/cybersecurity"><i class="mdi mdi-lock"></i>Cybersecurity</a></li>
            <li><a href="/ai"><i class="mdi mdi-robot"></i>AI & Automation</a></li>
            <li><a href="/devops"><i class="mdi mdi-code-braces"></i>DevOps Solutions</a></li>
            <li><a href="/consulting"><i class="mdi mdi-chart-line"></i>IT Consulting</a></li>
        </ul>
    </div>
    <!-- Quick Links -->
    <div class="footer-section">
        <h3><i class="mdi mdi-link-variant"></i>Quick Links</h3>
        <ul>
            <li><a href="/"><i class="mdi mdi-home"></i>Home</a></li>
            <li><a href="/about"><i class="mdi mdi-information"></i>About Us</a></li>
            <li><a href="/services"><i class="mdi mdi-tools"></i>Services</a></li>
            <li><a href="/terms"><i class="mdi mdi-file-document"></i>Terms and Conditions</a></li>
            <li><a href="/faqs"><i class="mdi mdi-help-circle"></i>FAQ</a></li>
        </ul>
    </div>
    <!-- Contact -->
    <div class="footer-section">
        <h3><i class="mdi mdi-headset"></i>Connect</h3>
        <p><a href="mailto:beninbits78@gmail.com"><i class="mdi mdi-email-fast"></i>beninbits78@gmail.com</a></p>
        <p><a href="tel:+254701760930"><i class="mdi mdi-phone"></i>+254701760930</a></p>
        <p><i class="mdi mdi-clock-outline"></i>Support: 24/7/365</p>
    </div>
</div>

<div class="copyright">
    © <?php echo date("Y"); ?> <span class="highlight">BENINBITS TECHNOLOGIES</span>. All rights reserved.<br>
    <small>Transforming Ideas into Digital Reality</small>
</div>

</footer>

    <script>
        // Scroll Animation Trigger
        const sections = document.querySelectorAll('.footer-section');

        const checkVisibility = () => {
            sections.forEach(section => {
                const sectionTop = section.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;

                if (sectionTop < windowHeight * 0.85) {
                    section.classList.add('visible');
                }
            });
        };

        window.addEventListener('scroll', checkVisibility);
        window.addEventListener('load', checkVisibility);
    </script>
</body>
</html>
