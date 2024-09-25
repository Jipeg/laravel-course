<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title || 'Welcome' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="bg-gray-200 border-b-2 border-gray-300">
        <div class="container mx-auto p-4 flex justify-between">
            <a href="/" class="text-3xl font-bold text-blue-500">Jipeg</a>
            <x-navbar class="flex items-center space-x-4"></x-navbar>
        </div>
    </header>
    <main class="container mx-auto p-4">
        {{ $slot }}
    </main>

    <footer class="bg-gray-200 border-t-2 border-gray-300">
        <div class="container mx-auto p-4">
            <x-footer></x-footer>
        </div>
    </footer>
</body>
</html>
