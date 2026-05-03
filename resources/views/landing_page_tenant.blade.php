@php
    $school = $school ?? (isset($tenant) ? $tenant : (object) tenant()->all());
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Null safety for title --}}
    <title>{{ $school?->name ?? 'Welcome to our School' }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-slate-900 antialiased">

    <!-- 1. Navbar -->
    <nav class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 flex justify-between h-20 items-center">
            <div class="flex items-center gap-4">
                @if ($school?->logo)
                    <img src="{{ asset($school->logo) }}" alt="Logo" class="h-12 w-auto">
                @else
                    <div class="h-10 w-10 bg-blue-600 rounded-xl flex items-center justify-center text-white font-bold">
                        {{ substr($school?->name ?? 'S', 0, 1) }}
                    </div>
                @endif
                <span class="text-xl font-bold tracking-tight">
                    {{ $school?->name ?? 'SMS Education' }}
                </span>
            </div>

            <div class="hidden md:flex items-center gap-8 font-medium">
                <a href="#features" class="hover:text-blue-600">Features</a>
                <a href="{{ route('login') }}" class="px-6 py-2.5 bg-slate-900 text-white rounded-full">Login</a>
            </div>
        </div>
    </nav>

    <!-- 2. Hero Section -->
    <header class="relative pt-20 min-h-[85vh] flex items-center">
        <div class="absolute inset-0 z-0">
            @if ($school?->cover_image)
                <img src="{{ asset($school->cover_image) }}" class="w-full h-full object-cover">
            @else
                <div class="w-full h-full bg-slate-100"></div>
            @endif
            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/90 to-transparent"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <div class="max-w-2xl">
                <span class="inline-block px-4 py-1.5 rounded-full bg-blue-50 text-blue-700 text-sm font-semibold mb-6">
                    Estd. {{ $school?->established_year ?? 'Not Set' }}
                </span>
                <h1 class="text-5xl lg:text-7xl font-extrabold text-slate-900 mb-6 leading-tight">
                    {{ $school?->name ?? 'Empowering Students for a Better Tomorrow' }}
                </h1>
                <p class="text-xl text-slate-600 mb-10 leading-relaxed">
                    {{ $school?->description ?? 'We provide a modern learning environment for the holistic development of every child.' }}
                </p>
                <div class="flex gap-4">
                    <a href="{{ route('login') }}" class="px-8 py-4 bg-blue-600 text-white rounded-2xl font-bold hover:shadow-lg">Apply Now</a>
                </div>
            </div>
        </div>
    </header>

    <!-- 3. Statistics (Optional Array Handling) -->
    <section class="relative -mt-16 z-20 px-4">
        <div class="max-w-5xl mx-auto bg-white rounded-[2.5rem] shadow-xl p-8 border border-slate-50">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <p class="text-3xl font-bold">{{ $school?->stats['students'] ?? '1,000' }}+</p>
                    <p class="text-slate-500 text-xs uppercase tracking-widest">Students</p>
                </div>
                <div class="text-center">
                    <p class="text-3xl font-bold">{{ $school?->stats['teachers'] ?? '50' }}+</p>
                    <p class="text-slate-500 text-xs uppercase tracking-widest">Teachers</p>
                </div>
                <div class="text-center">
                    <p class="text-3xl font-bold">{{ $school?->stats['classes'] ?? '20' }}</p>
                    <p class="text-slate-500 text-xs uppercase tracking-widest">Rooms</p>
                </div>
                <div class="text-center">
                    <p class="text-3xl font-bold">100%</p>
                    <p class="text-slate-500 text-xs uppercase tracking-widest">Growth</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Features (Graceful Fallback for Array) -->
    <section id="features" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16">Key Features</h2>
            <div class="grid md:grid-cols-3 gap-8">
                @php
                    $features = $school?->features ?? ['Digital Curriculum', 'Expert Teachers', 'Safe Campus', 'Modern Labs', 'Sports Facility', 'Library'];
                @endphp

                @foreach ($features as $feature)
                    <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:shadow-xl transition-all">
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-6">
                            <i data-lucide="check-circle"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">{{ $feature }}</h3>
                        <p class="text-slate-500 text-sm">Dedicated to providing high-quality educational standards for all.</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 5. Contact Info -->
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-3 gap-12 text-center">
            <div class="p-8">
                <i data-lucide="map-pin" class="w-8 h-8 mx-auto text-blue-600 mb-4"></i>
                <h4 class="font-bold mb-2">Address</h4>
                <p class="text-slate-600 text-sm">{{ $school?->address ?? 'Update school address in settings' }}</p>
            </div>
            <div class="p-8">
                <i data-lucide="phone" class="w-8 h-8 mx-auto text-blue-600 mb-4"></i>
                <h4 class="font-bold mb-2">Phone</h4>
                <p class="text-slate-600 text-sm">{{ $school?->phone ?? '+880 xxxxxxxxxx' }}</p>
            </div>
            <div class="p-8">
                <i data-lucide="mail" class="w-8 h-8 mx-auto text-blue-600 mb-4"></i>
                <h4 class="font-bold mb-2">Email</h4>
                <p class="text-slate-600 text-sm">{{ $school?->email ?? 'info@yourschool.com' }}</p>
            </div>
        </div>
    </section>

    <!-- 6. Footer -->
    <footer class="bg-slate-900 text-slate-400 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-white font-bold mb-4">{{ $school?->name ?? 'School Management System' }}</p>
            <p class="text-xs">&copy; {{ date('Y') }} All rights reserved. Powered by SMS SaaS.</p>
        </div>
    </footer>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>
