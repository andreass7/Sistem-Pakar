<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:ital,wght@0,100;0,400;0,900;1,100;1,400&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-user.navbar></x-user.navbar>
    <main class="bg-white">
        {{-- @yield('content') --}}
        {{ $slot }}
    </main>
    <x-user.footer></x-user.footer>
    {{-- <script src="{{ '/js/app.js' }}"></script> --}}

</body>

</html>
