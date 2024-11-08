<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pokemon MVC</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <!-- CSS -->

    <link href=" https://cdn.jsdelivr.net/npm/@icon/themify-icons@1.0.1-alpha.3/themify-icons.min.css "
          rel="stylesheet">
    <link rel="icon" href="{{asset('storage/pokeball.png')}}" type="image/x-icon">
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="min-h-screen bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 pb-5">
    <header class="py-10">
        <div class="flex justify-center lg:col-start-2 mx-auto">
            <a href="{{route('home')}}"><img src="{{asset('storage/pokeball.png')}}" alt="pokeball"
                                             class="w-20 h-20 z-50"/></a>
        </div>
    </header>
    {{$slot}}
</div>
@stack('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- if controller has returned with('success', ....) display this --}}
@if(session('success'))
    <script>
        Swal.fire({
            icon: 'succès',
            title: 'Succès',
            text: '{{session('success')}}',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif
{{-- if controller has returned with('error', ....) display this --}}
@if(session('error'))
    <script>
        Swal.fire({
            icon: 'erreur',
            title: 'Erreur',
            text: '{{session('error')}}',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif
</body>
<footer class="py-12 text-center text-sm text-black dark:text-white/70">
    Fait avec Poke❤️ par <a href="https://github.com/NasssDev"
                            class="text-indigo-600 hover:text-indigo-300">NasssDev</a>
</footer>
</html>