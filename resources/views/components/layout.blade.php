<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ben-Job-Hopper</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;&display=swap">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-black text-white font-hanken-grotesk pb-20">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div class="flex items-center hover:text-blue-600 transform duration-300 border p-2 hover:border-blue-600">
                <a href="/" class="">
                    <span class="font-bold">Ben-Job-Hopper</span>
                </a>
                {{-- <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="website logo">
                </a> --}}
            </div>

            <div class="space-x-6 font-bold">
                <x-nav-link href="/" :active="request()->is('/')">Jobs</x-nav-link>
                <x-nav-link href="/careers" :active="request()->is('/careers')">Careers</x-nav-link>
                <x-nav-link href="/salaries" :active="request()->is('/salaries')">Salaries</x-nav-link>
                <x-nav-link href="/companies" :active="request()->is('/companies')">Companies</x-nav-link>
            </div>

            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create">Post a Job</a>

                    <form action="/logout" method="POST">
                        @csrf
                        @method('DELETE')

                        <button>Log Out</button>

                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <x-nav-link href="/register" :active="request()->is('/register')">Sign Up</x-nav-link>
                    <x-nav-link href="/login" :active="request()->is('/login')">Log In</x-nav-link>
                </div>
            @endguest

        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
