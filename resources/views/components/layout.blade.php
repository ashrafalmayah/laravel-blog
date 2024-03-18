<!doctype html>

<title>Laravel From Scratch Blog</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        @include('_navbar')

        {{ $slot }}

        @include('_posts-footer')

    </section>
</body>
