<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BENINBITS TECHNOLOGIES - Contact Us</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.5/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
        :root {
            --primary-color: #90EE90; /* Light Green */
            --secondary-color: #805ad5; /* Purple */
            --accent-color: #000000; /* Black */
            --text-color: #F3F4F6; /* Light Gray */
            --transition: all 0.3s ease;
        }

        body {
            margin: 0;
            font-family: 'Figtree', sans-serif;
            background-color: var(--accent-color);
            color: var(--text-color);
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Header Section */
        .contact-header {
    position: relative;
    text-align: center;
    padding: 10rem 1rem; /* Increased from 8rem to 10rem */
    min-height: 60vh; /* Ensures a taller section */
    background:
                url('/images/tech-support-oversees-ai-neural-network.jpg')
                center/cover no-repeat;
    color: white;
    overflow: hidden;
}

        .contact-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(144, 238, 144, 0.6), rgba(128, 90, 213, 0.6));
            z-index: 1;
        }

        .header-content {
            position: relative;
            z-index: 2;
        }

        .header-title {
            font-size: 3.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1s ease-in-out;
            color: var(--primary-color);
        }

        .header-subtitle {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
            opacity: 0.9;
            animation: slideUp 1s ease-in-out;
            color: var(--text-color);
        }

        /* Contact Section */
        .contact-section {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 2rem;
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .contact-info, .contact-form {
            flex: 1;
            min-width: 300px;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(144, 238, 144, 0.1);
            transition: var(--transition);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(144, 238, 144, 0.2);
        }

        .contact-info:hover, .contact-form:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(128, 90, 213, 0.2);
        }

        .contact-info h2, .contact-form h2 {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
        }

        .contact-info p {
            color: var(--text-color);
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .contact-item i {
            font-size: 1.5rem;
            color: var(--primary-color);
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(144, 238, 144, 0.1);
            border-radius: 50%;
            transition: var(--transition);
        }

        .contact-item:hover i {
            background: var(--secondary-color);
            color: white;
        }

        .contact-item span {
            font-size: 1.1rem;
            color: var(--text-color);
        }

        /* Form Group Styling */
        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form-group i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-color);
            font-size: 1.2rem;
            z-index: 2;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 0.75rem 0.75rem 0.75rem 2.5rem;
            border: 1px solid rgba(144, 238, 144, 0.3);
            border-radius: 10px;
            font-size: 1rem;
            transition: var(--transition);
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-color);
        }

        .form-group textarea {
            padding-left: 2.5rem;
            min-height: 150px;
        }

        .form-group input:focus, .form-group textarea:focus {
            border-color: var(--secondary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(128, 90, 213, 0.2);
        }

        .contact-form button {
            padding: 0.75rem 1.5rem;
            background: var(--primary-color);
            color: var(--accent-color);
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .contact-form button:hover {
            background: var(--secondary-color);
            color: var(--text-color);
            transform: translateY(-2px);
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-title {
                font-size: 2.5rem;
            }

            .contact-section {
                flex-direction: column;
                padding: 0 1rem;
            }

            .contact-info, .contact-form {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body class=" bg-black ">
    @include('layouts.navigation')

    <header class="contact-header">
        <div class="header-content">
            <h1 class="header-title">Contact BENINBITS</h1>
            <p class="header-subtitle">Let's innovate together! Reach out for tech solutions and partnerships.</p>
        </div>
    </header>

    <section class="contact-section">
        <div class="contact-info">
            <h2>Connect With Us</h2>
            <p>Looking for cutting-edge technology solutions? Our team is ready to assist.</p>
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <span>Tech Innovation Hub, Cotonou, Benin</span>
            </div>
            <div class="contact-item">
                <i class="fas fa-phone-alt"></i>
                <span>+254701760930</span>
            </div>
            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <span>contact@beninbits.com<br>support@beninbits.com</span>
            </div>
        </div>

        <div class="contact-form">
            <h2>Send Inquiry</h2>
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" placeholder="Your Name" required />
                </div>
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Your Email" required />
                </div>
                <div class="form-group">
                    <i class="fas fa-tag"></i>
                    <input type="text" name="subject" placeholder="Subject" required />
                </div>
                <div class="form-group">
                    <i class="fas fa-comment"></i>
                    <textarea name="message" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>

    @include('layouts.footer')
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if (session('error'))
            toastr.error("{{ session('error') }}");
        @endif
    });
</script>
</html>
