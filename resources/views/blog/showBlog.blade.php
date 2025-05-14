<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.js" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs - Donkraft Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.5/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Figtree', sans-serif;
            background-color: #111827; /* Dark background */
            color: white; /* White text */
            line-height: 1.8;
        }

        .blog-header {
    position: relative;
    text-align: center;
    padding: 14rem 1rem; /* Increased from 10rem to 14rem */
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('{{ asset("storage/" . $blog->image) }}') center/cover no-repeat;
    color: white;
}

        .blog-title {
            font-size: 3rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1rem;
        }

        .blog-meta {
            text-align: center;
            color:black; /* Light gray text */
            font-size: 1rem;
            margin-bottom: 2rem;
        }

        .blog-body {
            max-width: 800px;
            margin: 3rem auto;
            padding: 2rem;
            font-size: 1.2rem;
            text-align: justify; /* Prose style */
            line-height: 2;
            color:black; /* Ensure text remains white */
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 2rem;
            font-weight: 600;
            color:darkblue;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .back-link:hover {
            color: green;
        }
    </style>
</head>
<body class="bg-gray-50">
    @include('layouts.navigation')

    <header class="blog-header">
        <h1 class="blog-title">{{ $blog->title }}</h1>
    </header>

    <section class="blog-body">
        <p class="blog-meta">
            {{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}
        </p>

        <div>
        <p>{!! $blog->description !!}</p>        </div>

        <a href="/blog" class="back-link">← Back to Blogs</a>
    </section>

    @include('layouts.footer')
</body>
</html>
