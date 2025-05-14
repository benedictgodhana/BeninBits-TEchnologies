<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Portal | Donkraft IT Solutions</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.5/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>

@font-face {
            font-family: 'Futura LT';
            src: url('/fonts/futura-lt/FuturaLT-Book.ttf') format('woff2'),
                 url('/fonts/futura-lt/FuturaLT.ttf') format('woff'),
                 url('/fonts/futura-lt/FuturaLT-Condensed.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        :root {
            --primary: #0063B2;
            --secondary: #1E90FF;
            --accent: #004C8C;
            --light: #F5F9FF;
            --dark: #12263A;
            --gray: #6C757D;
        }

        body {
            font-family: 'Futura LT', sans-serif;
            background: linear-gradient(135deg, #0A1A2A 0%, #12263A 100%);
            color: #333;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            width: 100%;
            max-width: 480px;
            padding: 0 20px;
        }

        .auth-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.25);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .auth-card:hover {
            transform: translateY(-5px);
        }

        .card-header {
            background:darkcyan;
            padding: 40px 0;
            text-align: center;
            color: white;
            position: relative;
        }

        .logo-container {
            margin-bottom: 20px;
        }

        .logo-image {
            width:100%;
            height: 80px;
            object-fit: contain;
            margin-bottom: 15px;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
        }

        .logo-text {
            font-size: 32px;
            font-weight: 700;
            color: white;
            letter-spacing: -0.5px;
        }

        .logo-highlight {
            color: #90CAF9;
            font-weight: 800;
        }

        .card-body {
            padding: 40px;
        }

        .form-title {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 30px;
            color: var(--dark);
            text-align: center;
            letter-spacing: -0.5px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            display: block;
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: 500;
            color: #495057;
        }

        .form-control {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #e0e7ff;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.2s ease;
            background: #f8fafc;
        }

        .form-control:hover {
            border-color: #c7d2fe;
            background: white;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(0, 99, 178, 0.15);
            background: white;
            outline: none;
        }

        .input-group {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: var(--gray);
            transition: color 0.2s ease;
        }

        .password-toggle:hover {
            color: var(--primary);
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .checkbox-input {
            width: 18px;
            height: 18px;
            accent-color: var(--primary);
            cursor: pointer;
        }

        .forgot-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .forgot-link:hover {
            color: var(--accent);
            text-decoration: underline;
        }

        .btn-primary {
            display: block;
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            font-family: 'Futura LT', sans-serif;

        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            box-shadow: 0 6px 15px rgba(0, 99, 178, 0.3);
            transform: translateY(-2px);
        }

        .btn-primary::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            bottom: -50%;
            left: -50%;
            background: linear-gradient(
                45deg,
                transparent 25%,
                rgba(255, 255, 255, 0.1) 50%,
                transparent 75%
            );
            transform: translateX(-100%) rotate(45deg);
            animation: shine 1.5s infinite;
        }

        @keyframes shine {
            100% {
                transform: translateX(100%) rotate(45deg);
            }
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 30px 0;
            color: #6c757d;
            font-size: 14px;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, transparent 0%, #e9ecef 50%, transparent 100%);
        }

        .divider-text {
            padding: 0 15px;
        }

        .social-login {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 25px;
        }

        .social-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 12px;
            border: 2px solid #e9ecef;
            transition: all 0.3s ease;
        }

        .social-btn:hover {
            background-color: #f8f9fa;
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-color: var(--primary);
        }

        .social-btn img {
            width: 24px;
            height: 24px;
            transition: transform 0.3s ease;
        }

        .social-btn:hover img {
            transform: scale(1.1);
        }

        .register-link {
            text-align: center;
            font-size: 14px;
            color: #6c757d;
            margin-top: 20px;
        }

        .register-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .register-link a:hover {
            color: var(--accent);
            text-decoration: underline;
        }

        .alert {
            padding: 16px;
            margin-bottom: 24px;
            border-radius: 8px;
            display: none;
        }

        .alert-danger {
            background-color: #FEE2E2;
            border: 2px solid #FCA5A5;
            color: #B91C1C;
        }

        @media (max-width: 576px) {
            .card-body {
                padding: 30px;
            }

            .logo-image {
                width: 70px;
                height: 70px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="auth-card">
            <div class="card-header">
                <div class="logo-container">
                    <a href="/">
                    <img src="/images/DIS15-removebg-preview.png" alt="Donkraft IT Logo" class="logo-image">

                    </a>
                    <!-- Replace with your actual logo image path -->
                </div>
                <div class="logo-text">Donkraft <span class="logo-highlight">IT</span></div>
            </div>
            <div class="card-body">
                <h2 class="form-title">Client Portal Login</h2>

                <div class="alert alert-danger" style="display: none;">
                    <ul>
                        <li>Invalid email or password.</li>
                    </ul>
                </div>

                <form id="loginForm" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="email">Email Address</label>
                        <div class="input-group">
                            <input type="email"
                                   id="email"
                                   name="email"
                                   class="form-control"
                                   placeholder="name@company.com"
                                   required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-group">
                            <input type="password"
                                   id="password"
                                   name="password"
                                   class="form-control"
                                   placeholder="••••••••"
                                   required>
                            <span class="password-toggle" id="togglePassword">
                                <i class="fas fa-eye-slash"></i>
                            </span>
                        </div>
                    </div>

                    <div class="remember-forgot">
                        <div class="checkbox-group">
                            <input type="checkbox"
                                   name="remember"
                                   id="remember"
                                   class="checkbox-input">
                            <label for="remember">Remember me</label>
                        </div>
                        <a href="{{ route('password.request') }}" class="forgot-link">Forgot Password?</a>
                    </div>

                    <button type="submit" class="btn-primary">
                        Sign In
                    </button>


                </form>
            </div>
        </div>
    </div>

    <script>
        // Password Toggle Functionality
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.querySelector('i').classList.toggle('fa-eye-slash');
            this.querySelector('i').classList.toggle('fa-eye');
        });

        // Form Submission Handler
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const submitButton = this.querySelector('button[type="submit"]');
            submitButton.innerHTML = `
                <div style="display: inline-flex; align-items: center;">
                    <svg class="animate-spin h-5 w-5 mr-3" viewBox="0 0 24 24" style="width: 20px; height: 20px; margin-right: 10px;">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"/>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"/>
                    </svg>
                    Processing...
                </div>
            `;
            submitButton.disabled = true;
        });

        // Animate spin keyframes
        const style = document.createElement('style');
        style.textContent = `
            @keyframes spin {
                from { transform: rotate(0deg); }
                to { transform: rotate(360deg); }
            }
            .animate-spin {
                animation: spin 1s linear infinite;
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>
