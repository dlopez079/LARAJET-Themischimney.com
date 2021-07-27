<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Themis Chimney</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body>
    {{-- Make sure that the Sign in and Register button are working.  --}}
    
    {{-- May need to seperate the navbar from the Hero. --}}

    {{-- Insert Hero Here. --}}
    @livewire('hero');

    {{-- Testimonials --}}

    {{-- About the company / founder --}}

    {{-- Contact Form --}}

    @livewireScripts
</body>

</html>
