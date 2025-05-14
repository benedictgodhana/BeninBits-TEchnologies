<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donkraft - Terms and Conditions</title>
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
            background-color: #f9fafb;
            color: var(--text-color);
            overflow-x: hidden;
            line-height: 1.6;
        }

        .terms-header {
            text-align: center;
            padding: 8rem 1rem;
            color: white;
            overflow: hidden;
            position: relative;
        }

        .terms-header::before {
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

        .terms-content {
            max-width: 1000px;
            margin: 4rem auto;
            padding: 0 2rem;
        }

        .terms-section {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .terms-section h2 {
            color: var(--secondary-color);
            font-size: 1.5rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--light-gray);
        }

        .terms-section ul {
            padding-left: 1.5rem;
        }

        .terms-section li {
            margin-bottom: 0.5rem;
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

        @media (max-width: 768px) {
            .header-title {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Navigation will be included here -->
    @include('layouts.navigation')

    <header class="terms-header">
        <div class="header-content">
            <h1 class="header-title">Terms and Conditions</h1>
            <p class="header-subtitle">Please read these terms and conditions carefully before using our services.</p>
        </div>
    </header>

    <section class="terms-content">
        <div class="terms-section">
            <h2>1. Services Offered</h2>
            <p>The services provided include IT solution development, IT project management, and non-IT project management. Additional services like cloud and cybersecurity will be offered in the future. Service scope is outlined in the signed agreement.</p>
        </div>

        <div class="terms-section">
            <h2>2. Payment Terms</h2>
            <ul>
                <li><strong>Invoices:</strong> Clients will be invoiced upon project initiation and at agreed milestones.</li>
                <li><strong>Payment Schedule:</strong> Payments are due within 7 days of invoicing unless otherwise stated.</li>
                <li><strong>Refunds:</strong> Refunds are considered only in cases where service delivery is incomplete or unsatisfactory due to our failure.</li>
            </ul>
        </div>

        <div class="terms-section">
            <h2>3. Project Changes</h2>
            <ul>
                <li><strong>Scope Changes:</strong> Any change to the project scope must be documented and may require additional time and cost.</li>
                <li><strong>Delays:</strong> If delays are caused by the client (e.g., late feedback or approvals), timelines will be adjusted accordingly.</li>
            </ul>
        </div>

        <div class="terms-section">
            <h2>4. Confidentiality</h2>
            <p>Both parties agree to keep sensitive project details and proprietary information confidential.</p>
        </div>

        <div class="terms-section">
            <h2>5. Termination</h2>
            <p>Either party can terminate the contract with a 30-day written notice. Fees for work completed up to the termination date are non-refundable.</p>
        </div>

        <div class="terms-section">
            <h2>6. Liability</h2>
            <p>We are not liable for delays or issues caused by third-party vendors, acts of nature, or circumstances beyond our control.</p>
        </div>

        <div class="terms-section">
            <h2>7. Dispute Resolution</h2>
            <p>Any disputes will first be addressed through mediation. If unresolved, the matter will proceed to arbitration in accordance with the Laws of Kenya.</p>
        </div>

        <div class="terms-section">
            <h2>8. Intellectual Property Rights</h2>
            <p>All deliverables remain the property of Donkraft IT Solutions Ltd until the client has paid in full. After payment, intellectual property rights for custom-built solutions are transferred to the client. For signed agreements where the intellectual property rights will be retained and be the property of Donkraft IT Solutions even upon full payment, discounts are available on this payment.</p>
        </div>

        <div class="terms-section">
            <h2>9. Force Majeure</h2>
            <p>Neither party will be held liable for delays or non-performance caused by events beyond their control, including natural disasters, strikes, or government actions.</p>
        </div>

        <div class="terms-section">
            <h2>10. Client Responsibilities</h2>
            <p>The client must provide timely approvals, access to necessary resources, and accurate information to ensure the project proceeds as planned.</p>
        </div>

        <div class="terms-section">
            <h2>11. Third-Party Integrations</h2>
            <p>We are not responsible for delays or malfunctions caused by third-party tools or APIs but will work to resolve them efficiently.</p>
        </div>
    </section>

    <section class="contact-section">
        <h2>Questions About Our Terms?</h2>
        <p>If you have any questions or concerns about our terms and conditions, please don't hesitate to reach out to our team.</p>
        <a href="/contact" class="contact-btn">Contact Us</a>
    </section>

    <!-- Footer will be included here -->
    @include('layouts.footer')
</body>
</html>
