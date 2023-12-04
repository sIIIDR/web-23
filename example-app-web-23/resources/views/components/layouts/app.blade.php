<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>

<body>
    {{-- <img src="{{ asset('assets/background.jpg') }}"
        class="bg-no-repeat bg-fixed object-cover blur-md absolute top-0 -z-10 h-screen" /> --}}
    <x-header />
    {{ $slot }}
    @livewireScripts
</body>

</html>
