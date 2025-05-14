<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Recovery | Donkraft IT Solutions</title>
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

        .recovery-container {
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

        .instructions {
            color: var(--gray);
            font-size: 14px;
            text-align: center;
            margin-bottom: 30px;
            line-height: 1.6;
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

        .back-to-login {
            text-align: center;
            margin-top: 25px;
            font-size: 14px;
        }

        .back-to-login a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .back-to-login a:hover {
            color: var(--accent);
            text-decoration: underline;
        }

        .alert {
            padding: 16px;
            margin-bottom: 24px;
            border-radius: 8px;
            display: none;
        }

        .alert-success {
            background-color: #DCFCE7;
            border: 2px solid #86EFAC;
            color: #166534;
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
    <div class="recovery-container">
        <div class="auth-card">
            <div class="card-header">
                <div class="logo-container">
                <a href="/">
                    <img src="/images/DIS15-removebg-preview.png" alt="Donkraft IT Logo" class="logo-image">

                    </a>
            </div>
                <div class="logo-text">Donkraft <span class="logo-highlight">IT</span></div>
            </div>
            <div class="card-body">
                <h2 class="form-title">Reset Your Password</h2>

                <div class="alert alert-success" style="display: none;">
                    Password reset instructions have been sent to your email.
                </div>

                <div class="alert alert-danger" style="display: none;">
                    Please enter a valid email address.
                </div>

                <form id="recoveryForm" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="instructions">
                        Enter your email address and we'll send you instructions to reset your password.
                    </div>

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

                    <button type="submit" class="btn-primary">
                        Reset Password
                    </button>

                    <div class="back-to-login">
                        Remember your password? <a href="{{ route('login') }}">Back to Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('recoveryForm').addEventListener('submit', function(e) {
            const submitButton = this.querySelector('button[type="submit"]');
            submitButton.innerHTML = `
                <div style="display: inline-flex; align-items: center;">
                    <svg class="animate-spin h-5 w-5 mr-3" viewBox="0 0 24 24" style="width: 20px; height: 20px; margin-right: 10px;">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"/>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"/>
                    </svg>
                    Sending Instructions...
                </div>
            `;
            submitButton.disabled = true;

            // Simulate API call - replace with actual form submission
            setTimeout(() => {
                document.querySelector('.alert-success').style.display = 'block';
                document.querySelector('.alert-danger').style.display = 'none';
                submitButton.innerHTML = 'Reset Password';
                submitButton.disabled = false;
            }, 2000);

            e.preventDefault();
        });

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
