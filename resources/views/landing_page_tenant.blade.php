@php
    $school = $school ?? (isset($tenant) ? $tenant : (object) tenant()->all());
    $school = (object) ($school ?? [
        'name' => 'Green Valley High School',
        'tagline' => 'Excellence in Education',
        'description' => 'A leading institution focused on academic excellence and character building.',
        'established_year' => 1998,
        'logo' => null,
        'phone' => '+1234567890',
        'email' => 'info@greenvalley.edu',
        'address' => '123 Main Street, City, Country',
        'website' => 'https://greenvalley.edu',
        'stats' => ['students' => 1200, 'teachers' => 75, 'classes' => 40],
        'gallery' => [],
        'testimonials' => [],
        'programs' => [],
        'facilities' => [],
    ]);
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $school->name ?? 'School Profile' }} - Premium Education</title>
    <meta name="description" content="{{ $school->description ?? 'Discover excellence in education at ' . ($school->name ?? 'our school') . '.' }}">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Source+Serif+4:wght@600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .font-serif {
            font-family: 'Source Serif 4', serif;
        }

        :root {
            --primary: #0ea5e9;
            --primary-dark: #0284c7;
            --secondary: #64748b;
            --accent: #f59e0b;
            --success: #10b981;
            --dark: #0f172a;
            --light: #f8fafc;
        }

        .text-primary {
            color: var(--primary);
        }

        .bg-primary {
            background-color: var(--primary);
        }

        .border-primary {
            border-color: var(--primary);
        }

        .text-success {
            color: var(--success);
        }

        .bg-success {
            background-color: var(--success);
        }

        .btn-primary {
            background-color: var(--primary);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(14, 165, 233, 0.4);
        }

        .btn-outline {
            border: 2px solid var(--primary);
            color: var(--primary);
            transition: all 0.3s ease;
        }

        .btn-outline:hover {
            background-color: #eff6ff;
            border-color: var(--primary-dark);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.1);
        }

        .glass {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
        }

        .gradient-hero {
            background: linear-gradient(135deg, #0f172a 0%, #1e3a5f 100%);
        }

        .nav-scrolled {
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        /* Navigation link base styles */
        .nav-link {
            position: relative;
            transition: all 0.2s ease;
            border-radius: 0.375rem;
        }

        /* Hover state - same color as active */
        .nav-link:hover {
            color: var(--primary);
        }

        /* Active state - just color, no underline */
        .nav-link.active {
            color: var(--primary);
            font-weight: 600;
        }

        /* Contact button special styling - always primary color with subtle background */
        .nav-contact {
            background-color: rgba(14, 165, 233, 0.1);
            color: var(--primary) !important;
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            transition: all 0.2s ease;
        }

        .nav-contact:hover {
            background-color: rgba(14, 165, 233, 0.2);
            color: var(--primary) !important;
        }

        .nav-contact.active {
            background-color: var(--primary);
            color: white !important;
        }

        /* Animated floating shapes */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(5deg);
            }
        }

        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
    </style>
</head>

<body class="bg-white text-slate-900 antialiased selection:bg-sky-100 selection:text-sky-900">

    <!-- 1. Header / Navbar -->
    <header id="navbar" class="fixed top-0 w-full z-50 transition-all duration-300 bg-white/95 backdrop-blur-md border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo / School Name -->
                <a href="#hero" class="flex items-center gap-2 no-underline">
                    @if (!empty($school->logo))
                        <!-- Custom SVG School Logo Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 48 48" fill="none">
                            <rect width="48" height="48" rx="12" fill="url(#logo-gradient-nav)" />
                            <path d="M24 8L8 16V24C8 32 16 40 24 44C32 40 40 32 40 24V16L24 8Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M24 20V28M24 28L20 24M24 28L28 24" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            <defs>
                                <linearGradient id="logo-gradient-nav" x1="0" y1="0" x2="48" y2="48" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#0ea5e9" />
                                    <stop offset="1" stop-color="#0284c7" />
                                </linearGradient>
                            </defs>
                        </svg>
                    @else
                        <!-- Default School Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                            <path d="M6 12v5c3 3 9 3 12 0v-5" />
                        </svg>
                    @endif
                    <span class="text-lg font-bold text-slate-900 tracking-tight">{{ $school->name }}</span>
                </a>

                <!-- Desktop Navigation - Centered -->
                <nav class="hidden md:flex items-center gap-8">
                    <a href="#about" class="nav-link text-slate-600 hover:text-primary font-medium transition-colors">About</a>
                    <a href="#academics" class="nav-link text-slate-600 hover:text-primary font-medium transition-colors">Academics</a>
                    <a href="#facilities" class="nav-link text-slate-600 hover:text-primary font-medium transition-colors">Facilities</a>
                    <a href="#gallery" class="nav-link text-slate-600 hover:text-primary font-medium transition-colors">Gallery</a>
                    <a href="#testimonials" class="nav-link text-slate-600 hover:text-primary font-medium transition-colors">Testimonials</a>
                    <a href="#contact" class="nav-link nav-contact text-primary font-semibold">Contact</a>
                </nav>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-slate-100 transition-colors">
                    <i data-lucide="menu" class="w-5 h-5 text-slate-600"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-slate-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <nav class="flex flex-col space-y-3">
                    <a href="#about" class="nav-link text-slate-600 hover:text-primary font-medium py-2">About</a>
                    <a href="#academics" class="nav-link text-slate-600 hover:text-primary font-medium py-2">Academics</a>
                    <a href="#facilities" class="nav-link text-slate-600 hover:text-primary font-medium py-2">Facilities</a>
                    <a href="#gallery" class="nav-link text-slate-600 hover:text-primary font-medium py-2">Gallery</a>
                    <a href="#testimonials" class="nav-link text-slate-600 hover:text-primary font-medium py-2">Testimonials</a>
                    <a href="#contact" class="nav-link nav-contact text-primary font-semibold">Contact</a>
                </nav>
                <div class="mt-4 pt-4 border-t border-slate-100">
                    <a href="{{ route('tenant.apply') ?? '#' }}" class="block w-full text-center px-5 py-2 bg-primary text-white rounded-lg font-semibold hover:bg-primary-dark transition-colors">
                        Apply Now
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. Hero Section -->
    <section id="hero" class="pt-24 pb-16 md:pt-32 md:pb-24 bg-gradient-to-br from-slate-50 via-white to-sky-50 min-h-screen flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left: Text Content -->
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-sky-100 text-primary text-sm font-semibold rounded-full mb-6">
                        <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
                        Estd. {{ $school->established_year ?? 'Not Available' }}
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-6 leading-tight font-serif">
                        {{ $school->name }}
                    </h1>

                    @if (!empty($school->tagline))
                        <p class="text-xl md:text-2xl text-primary font-medium mb-4">
                            {{ $school->tagline }}
                        </p>
                    @endif

                    <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                        {{ $school->description ?? 'A nurturing environment where students thrive academically, socially, and emotionally.' }}
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('tenant.apply') ?? '#' }}" class="px-8 py-3.5 bg-primary text-white rounded-lg font-bold shadow-md hover:shadow-lg hover:bg-primary-dark transition-all flex items-center justify-center gap-2">
                            <i data-lucide="file-text" class="w-5 h-5"></i>
                            Apply for Admission
                        </a>
                        <a href="#contact" class="px-8 py-3.5 bg-white border border-slate-300 text-slate-700 rounded-lg font-bold hover:bg-slate-50 transition-all flex items-center justify-center gap-2">
                            <i data-lucide="calendar" class="w-5 h-5"></i>
                            Schedule a Visit
                        </a>
                    </div>

                    <!-- Quick Stats -->
                    @php
                        $stats = $school->stats ?? ['students' => 1200, 'teachers' => 75, 'classes' => 40];
                    @endphp
                    <div class="mt-10 flex flex-wrap items-center gap-6 text-sm text-slate-600">
                        @foreach ($stats as $label => $value)
                            <div class="flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-4 h-4 text-primary"></i>
                                <span>{{ ucfirst($label) }}: {{ $value }}+</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Right: Visual (SVG Illustration) -->
                <div class="hidden lg:flex justify-center items-center">
                    <div class="relative w-full max-w-lg">
                        <!-- Decorative Background -->
                        <div class="absolute inset-0 bg-gradient-to-br from-primary/10 to-cyan-100 rounded-3xl transform rotate-3"></div>
                        <div class="relative bg-white p-8 rounded-3xl shadow-xl border border-slate-100">
                            <!-- School SVG Illustration -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-auto" viewBox="0 0 400 300" fill="none">
                                <!-- Building -->
                                <rect x="80" y="120" width="240" height="140" rx="8" fill="#e0f2fe" />
                                <rect x="100" y="140" width="40" height="50" rx="2" fill="#0ea5e9" />
                                <rect x="160" y="140" width="40" height="50" rx="2" fill="#0ea5e9" />
                                <rect x="220" y="140" width="40" height="50" rx="2" fill="#0ea5e9" />
                                <rect x="280" y="140" width="40" height="50" rx="2" fill="#0ea5e9" />
                                <!-- Windows above -->
                                <rect x="100" y="80" width="40" height="40" rx="2" fill="#7dd3fc" />
                                <rect x="160" y="80" width="40" height="40" rx="2" fill="#7dd3fc" />
                                <rect x="220" y="80" width="40" height="40" rx="2" fill="#7dd3fc" />
                                <!-- Door -->
                                <rect x="180" y="180" width="40" height="60" rx="4" fill="#0284c7" />
                                <!-- Flag -->
                                <line x1="200" y1="120" x2="200" y2="60" stroke="#64748b" stroke-width="3" />
                                <rect x="200" y="60" width="30" height="20" fill="#0ea5e9" />
                                <!-- Ground -->
                                <rect x="60" y="260" width="280" height="20" rx="10" fill="#86efac" />
                                <!-- Trees -->
                                <circle cx="60" cy="240" r="20" fill="#22c55e" />
                                <circle cx="340" cy="240" r="25" fill="#16a34a" />
                                <!-- Sun -->
                                <circle cx="320" cy="60" r="25" fill="#fbbf24" />
                            </svg>

                            <!-- Floating Badge -->
                            <div class="absolute -top-4 -right-4 bg-white rounded-xl shadow-lg p-4 border border-slate-100">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center">
                                        <i data-lucide="award" class="w-4 h-4 text-primary"></i>
                                    </div>
                                    <div>
                                        <p class="text-lg font-bold text-slate-900">{{ $school->stats['students'] ?? '1200' }}+</p>
                                        <p class="text-xs text-slate-500">Students</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-3 gap-12 items-start">
                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="sticky top-28 space-y-6">
                        <!-- School Card -->
                        <div class="bg-slate-50 rounded-xl p-6 border border-slate-200">
                            @if (!empty($school->logo))
                                <!-- SVG School Logo Icon -->
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 48 48" fill="none">
                                        <rect width="48" height="48" rx="12" fill="url(#logo-gradient-sidebar)" />
                                        <path d="M24 8L8 16V24C8 32 16 40 24 44C32 40 40 32 40 24V16L24 8Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M24 20V28M24 28L20 24M24 28L28 24" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <defs>
                                            <linearGradient id="logo-gradient-sidebar" x1="0" y1="0" x2="48" y2="48" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#0ea5e9" />
                                                <stop offset="1" stop-color="#0284c7" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                            @else
                                <!-- Default Icon + Name -->
                                <div class="flex flex-col items-center justify-center py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary mb-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                                        <path d="M6 12v5c3 3 9 3 12 0v-5" />
                                    </svg>
                                </div>
                            @endif
                            <h3 class="text-xl font-bold text-center mb-1">
                                <a href="#hero" class="no-underline hover:text-primary transition-colors">
                                    {{ $school->name }}
                                </a>
                            </h3>
                            @if (!empty($school->tagline))
                                <p class="text-slate-500 text-sm text-center mb-4">{{ $school->tagline }}</p>
                            @endif

                            <div class="space-y-3 text-sm">
                                @if (!empty($school->established_year))
                                    <div class="flex justify-between">
                                        <span class="text-slate-600">Established</span>
                                        <span class="font-medium">{{ $school->established_year }}</span>
                                    </div>
                                @endif
                                @php
                                    $stats = $school->stats ?? ['students' => '1200+', 'teachers' => '75+', 'classes' => '40+'];
                                @endphp
                                @foreach ($stats as $label => $value)
                                    <div class="flex justify-between">
                                        <span class="text-slate-600 capitalize">{{ $label }}</span>
                                        <span class="font-medium">{{ $value }}</span>
                                    </div>
                                @endforeach
                            </div>

                            @if (!empty($school->website))
                                <a href="{{ $school->website }}" target="_blank" class="mt-4 w-full py-2.5 text-center btn-outline rounded-lg font-medium text-sm block">
                                    Visit Website
                                </a>
                            @endif
                        </div>

                        <!-- Quick Contact -->
                        <div class="bg-primary/10 rounded-xl p-6 border border-primary/20">
                            <h4 class="font-semibold mb-3 flex items-center gap-2">
                                <i data-lucide="phone" class="w-4 h-4 text-primary"></i>
                                Contact
                            </h4>
                            @if (!empty($school->phone))
                                <a href="tel:{{ $school->phone }}" class="block text-primary font-semibold">{{ $school->phone }}</a>
                            @endif
                            @if (!empty($school->email))
                                <a href="mailto:{{ $school->email }}" class="text-slate-600 text-sm">{{ $school->email }}</a>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <span class="inline-block px-3 py-1 bg-sky-50 text-primary text-sm font-semibold rounded-full mb-4 flex items-center w-fit">
                        <i data-lucide="book-open" class="w-4 h-4 mr-2"></i>
                        About Us
                    </span>
                    <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-6 font-serif">
                        Academic Excellence & Holistic Development
                    </h2>

                    <div class="space-y-4 text-slate-600 leading-relaxed">
                        <p>
                            At <strong>{{ $school->name }}</strong>, we believe in nurturing every child's potential through a balanced approach to education. Our curriculum combines academic rigor with character development.
                        </p>
                        <p>
                            With state-of-the-art facilities, experienced faculty, and a vibrant community, we create an environment where curiosity flourishes and lifelong learners emerge.
                        </p>
                        <p>
                            We foster an inclusive culture that celebrates diversity and promotes ethical values. Education here goes beyond textbooks—it's about shaping responsible global citizens.
                        </p>
                    </div>

                    @php
                        $highlights = $school->highlights ?? [
                            'Teaching Excellence' => 'Experienced faculty with advanced degrees.',
                            'Modern Infrastructure' => 'Smart classrooms and well-equipped labs.',
                            'Holistic Curriculum' => 'Balanced focus on academics, arts, and sports.',
                            'Global Exposure' => 'International collaborations and certifications.',
                        ];
                    @endphp

                    <div class="mt-8 grid sm:grid-cols-2 gap-4">
                        @foreach ($highlights as $title => $desc)
                            <div class="flex gap-3 p-4 bg-slate-50 rounded-xl">
                                <i data-lucide="check-circle" class="w-5 h-5 text-primary flex-shrink-0 mt-0.5"></i>
                                <div>
                                    <h4 class="font-semibold text-slate-900">{{ $title }}</h4>
                                    <p class="text-sm text-slate-600">{{ $desc }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider -->
    <div class="section-divider"></div>

    <!-- 4. Academic Programs -->
    <section id="academics" class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <span class="inline-block px-3 py-1 bg-white text-primary text-sm font-semibold rounded-full mb-3 flex items-center w-fit">
                    <i data-lucide="target" class="w-4 h-4 mr-2"></i>
                    Programs
                </span>
                <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-4 font-serif">Our Curriculum</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Comprehensive programs designed for diverse learning needs.</p>
            </div>

            @php
                $programs = $school->programs ?? [['name' => 'Primary', 'grades' => 'Grades 1-5', 'icon' => 'book-open', 'color' => 'sky'], ['name' => 'Middle', 'grades' => 'Grades 6-8', 'icon' => 'compass', 'color' => 'blue'], ['name' => 'High School', 'grades' => 'Grades 9-10', 'icon' => 'target', 'color' => 'indigo'], ['name' => 'Higher Secondary', 'grades' => 'Grades 11-12', 'icon' => 'brain', 'color' => 'cyan']];
            @endphp

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($programs as $program)
                    <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-all card-hover">
                        <div class="w-12 h-12 bg-sky-100 rounded-lg flex items-center justify-center mb-4">
                            <i data-lucide="{{ $program['icon'] }}" class="w-6 h-6 text-primary"></i>
                        </div>
                        <span class="text-xs font-semibold text-slate-500 uppercase tracking-wide">{{ $program['grades'] }}</span>
                        <h3 class="text-lg font-bold mt-1 mb-2 text-slate-900">{{ $program['name'] }}</h3>
                        <p class="text-slate-600 text-sm">Quality education with modern teaching methods.</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 5. Facilities (Highlighted Cards with Icons) -->
    <section id="facilities" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <span class="inline-block px-3 py-1 bg-emerald-50 text-emerald-600 text-sm font-semibold rounded-full mb-3 flex items-center w-fit">
                    <i data-lucide="building-2" class="w-4 h-4 mr-2"></i>
                    Facilities
                </span>
                <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-4 font-serif">World-Class Infrastructure</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Modern amenities designed to support academic and personal growth.</p>
            </div>

            @php
                $facilities = $school->facilities ?? [
                    ['icon' => 'wifi', 'title' => 'Smart Classrooms', 'desc' => 'Interactive whiteboards, projectors, high-speed WiFi'],
                    ['icon' => 'flask-conical', 'title' => 'Science Labs', 'desc' => 'Fully equipped Physics, Chemistry, Biology labs'],
                    ['icon' => 'book', 'title' => 'Library', 'desc' => 'Extensive book collection, digital resources, quiet zones'],
                    ['icon' => 'dumbbell', 'title' => 'Sports Complex', 'desc' => 'Gymnasium, swimming pool, basketball courts, tracks'],
                    ['icon' => 'music', 'title' => 'Arts Center', 'desc' => 'Music rooms, art studios, performance theaters'],
                    ['icon' => 'utensils', 'title' => 'Cafeteria', 'desc' => 'Healthy nutritious meals in hygienic kitchen'],
                    ['icon' => 'bus', 'title' => 'Transport', 'desc' => 'Safe reliable school buses on major routes'],
                    ['icon' => 'first-aid-kit', 'title' => 'Medical Center', 'desc' => 'On-site healthcare with trained nurses'],
                ];
            @endphp

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($facilities as $facility)
                    <div class="group relative bg-gradient-to-br from-slate-50 to-white p-6 rounded-2xl border-2 border-slate-200 hover:border-primary transition-all duration-300 hover:shadow-xl -mt-0 md:mt-0 card-hover overflow-hidden">
                        <!-- Highlight accent -->
                        <div class="absolute top-0 left-0 w-1 h-0 group-hover:h-full transition-all duration-300 bg-primary"></div>

                        <div class="relative z-10">
                            <div class="w-14 h-14 bg-white rounded-xl flex items-center justify-center mb-4 shadow-sm border border-slate-100 group-hover:border-primary/30 transition-colors">
                                <i data-lucide="{{ $facility['icon'] }}" class="w-7 h-7 text-primary"></i>
                            </div>
                            <h4 class="text-lg font-bold mb-2 text-slate-900">{{ $facility['title'] }}</h4>
                            <p class="text-slate-600 text-sm">{{ $facility['desc'] }}</p>
                        </div>

                        <!-- Decorative background circle -->
                        <div class="absolute -right-4 -bottom-4 w-24 h-24 bg-primary/5 rounded-full group-hover:bg-primary/10 transition-colors"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 6. Gallery (SVG Placeholder Cards) -->
    <section id="gallery" class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <span class="inline-block px-3 py-1 bg-purple-50 text-purple-600 text-sm font-semibold rounded-full mb-3 flex items-center w-fit">
                    <i data-lucide="image" class="w-4 h-4 mr-2"></i>
                    Gallery
                </span>
                <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-4 font-serif">Campus Life</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">A glimpse into our vibrant school community and activities.</p>
            </div>

            @php
                $galleryAreas = $school->gallery_areas ?? [['title' => 'Main Building', 'icon' => 'building-2', 'color' => 'sky'], ['title' => 'Science Labs', 'icon' => 'flask-conical', 'color' => 'blue'], ['title' => 'Sports Ground', 'icon' => 'trophy', 'color' => 'amber'], ['title' => 'Library', 'icon' => 'book-open', 'color' => 'purple'], ['title' => 'Art Studio', 'icon' => 'palette', 'color' => 'pink'], ['title' => 'Auditorium', 'icon' => 'theater', 'color' => 'indigo']];
            @endphp

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                @foreach ($galleryAreas as $area)
                    @php
                        $bgColors = [
                            'sky' => 'from-sky-100 to-cyan-100',
                            'blue' => 'from-blue-100 to-indigo-100',
                            'amber' => 'from-amber-100 to-yellow-100',
                            'purple' => 'from-purple-100 to-pink-100',
                            'pink' => 'from-pink-100 to-rose-100',
                            'indigo' => 'from-indigo-100 to-purple-100',
                        ];
                        $iconColors = [
                            'sky' => 'text-sky-600',
                            'blue' => 'text-blue-600',
                            'amber' => 'text-amber-600',
                            'purple' => 'text-purple-600',
                            'pink' => 'text-pink-600',
                            'indigo' => 'text-indigo-600',
                        ];
                        $bg = $bgColors[$area['color']] ?? $bgColors['sky'];
                        $iconColor = $iconColors[$area['color']] ?? $iconColors['sky'];
                    @endphp
                    <div class="relative overflow-hidden rounded-xl group bg-gradient-to-br {{ $bg }} p-8 hover:shadow-lg transition-all duration-300 flex flex-col items-center justify-center text-center min-h-[200px]">
                        <i data-lucide="{{ $area['icon'] }}" class="w-16 h-16 mb-4 {{ $iconColor }}"></i>
                        <h4 class="text-lg font-bold text-slate-900">{{ $area['title'] }}</h4>
                        <p class="text-sm text-slate-600 mt-2">Explore our campus</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 7. Testimonials -->
    <section id="testimonials" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <span class="inline-block px-3 py-1 bg-amber-50 text-amber-600 text-sm font-semibold rounded-full mb-3 flex items-center w-fit">
                    <i data-lucide="message-circle" class="w-4 h-4 mr-2"></i>
                    Testimonials
                </span>
                <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-4 font-serif">What Parents & Students Say</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Hear from our community about their experience.</p>
            </div>

            @php
                $testimonials = $school->testimonials ?? [
                    ['name' => 'Mrs. Johnson', 'role' => 'Parent', 'avatar' => 'MJ', 'color' => 'bg-sky-100 text-sky-600', 'text' => 'Excellent school with dedicated teachers. My child loves coming here every day.'],
                    ['name' => 'David Chen', 'role' => 'Alumni', 'avatar' => 'DC', 'color' => 'bg-green-100 text-green-600', 'text' => 'The values and knowledge I gained prepared me well for university.'],
                    ['name' => 'Priya Sharma', 'role' => 'Parent', 'avatar' => 'PS', 'color' => 'bg-purple-100 text-purple-600', 'text' => 'Outstanding facilities and caring staff. Focus on holistic development is remarkable.'],
                    ['name' => 'Mohammed Ahmed', 'role' => 'Student', 'avatar' => 'MA', 'color' => 'bg-amber-100 text-amber-600', 'text' => 'Teachers are very supportive. Extra coaching and doubt sessions are extremely helpful.'],
                ];
            @endphp

            <div class="grid md:grid-cols-2 gap-6">
                @foreach ($testimonials as $testimonial)
                    <div class="bg-slate-50 p-6 rounded-xl border border-slate-100 hover:shadow-md transition-shadow">
                        <div class="flex gap-1 mb-4">
                            @for ($i = 0; $i < 5; $i++)
                                <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                            @endfor
                        </div>
                        <p class="text-slate-700 italic mb-4">"{{ $testimonial['text'] }}"</p>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 {{ $testimonial['color'] }} rounded-full flex items-center justify-center font-bold text-sm">
                                {{ $testimonial['avatar'] }}
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900">{{ $testimonial['name'] }}</h4>
                                <p class="text-xs text-slate-500">{{ $testimonial['role'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 8. CTA -->
    <section class="py-20 bg-primary">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4 font-serif">Ready to Join?</h2>
            <p class="text-sky-100 mb-8 max-w-2xl mx-auto">Admissions are open. Take the first step towards a bright future.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('tenant.apply') ?? '#' }}" class="px-8 py-3 bg-white text-slate-900 rounded-lg font-bold shadow-lg hover:shadow-xl transition-all hover:bg-sky-50">
                    Apply Now
                </a>
                <a href="tel:{{ $school->phone ?? '#' }}" class="px-8 py-3 bg-white/10 border border-white/20 text-white rounded-lg font-bold hover:bg-white/20 transition-all">
                    {{ $school->phone ?? 'Contact Us' }}
                </a>
            </div>
        </div>
    </section>

    <!-- 9. Contact Info -->
    <section id="contact" class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <span class="inline-block px-3 py-1 bg-amber-50 text-amber-600 text-sm font-semibold rounded-full mb-3 flex items-center w-fit">
                    <i data-lucide="phone" class="w-4 h-4 mr-2"></i>
                    Contact
                </span>
                <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-4 font-serif">Get in Touch</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Have questions? We're here to help you.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                @if (!empty($school->address))
                    <div class="bg-white p-6 rounded-xl border border-slate-200 text-center hover:shadow-md transition-shadow">
                        <div class="w-14 h-14 bg-sky-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="map-pin" class="w-7 h-7 text-primary"></i>
                        </div>
                        <h4 class="font-semibold mb-2">Address</h4>
                        <p class="text-slate-600 text-sm">{{ $school->address }}</p>
                    </div>
                @endif

                @if (!empty($school->phone))
                    <div class="bg-white p-6 rounded-xl border border-slate-200 text-center hover:shadow-md transition-shadow">
                        <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="phone" class="w-7 h-7 text-emerald-600"></i>
                        </div>
                        <h4 class="font-semibold mb-2">Phone</h4>
                        <a href="tel:{{ $school->phone }}" class="text-primary font-semibold">{{ $school->phone }}</a>
                    </div>
                @endif

                @if (!empty($school->email))
                    <div class="bg-white p-6 rounded-xl border border-slate-200 text-center hover:shadow-md transition-shadow">
                        <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="mail" class="w-7 h-7 text-blue-600"></i>
                        </div>
                        <h4 class="font-semibold mb-2">Email</h4>
                        <a href="mailto:{{ $school->email }}" class="text-primary font-semibold text-sm break-all">{{ $school->email }}</a>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- 3. Footer -->
    <footer class="bg-slate-900 text-white">
        <!-- Main Footer -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                <!-- School Info -->
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-2 mb-4">
                        <a href="#hero" class="flex items-center gap-2 no-underline" title="Back to top">
                            @if (!empty($school->logo))
                                <!-- Custom SVG School Logo Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" viewBox="0 0 48 48" fill="none">
                                    <rect width="48" height="48" rx="12" fill="url(#logo-gradient-footer)" />
                                    <path d="M24 8L8 16V24C8 32 16 40 24 44C32 40 40 32 40 24V16L24 8Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M24 20V28M24 28L20 24M24 28L28 24" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <defs>
                                        <linearGradient id="logo-gradient-footer" x1="0" y1="0" x2="48" y2="48" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#0ea5e9" />
                                            <stop offset="1" stop-color="#0284c7" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            @else
                                <!-- Default School Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                                    <path d="M6 12v5c3 3 9 3 12 0v-5" />
                                </svg>
                            @endif
                            <span class="text-lg font-bold text-white">{{ $school->name }}</span>
                        </a>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">
                        {{ Str::limit($school->description ?? 'A premier educational institution dedicated to nurturing future leaders through excellence in education.', 160) }}
                    </p>
                    <div class="flex gap-3">
                        @php
                            $social = $school->social_links ?? [];
                        @endphp
                        @foreach ([
        'facebook' => ['url' => $social['facebook'] ?? '#'],
        'twitter' => ['url' => $social['twitter'] ?? '#'],
        'instagram' => ['url' => $social['instagram'] ?? '#'],
        'linkedin' => ['url' => $social['linkedin'] ?? '#'],
    ] as $platform => $data)
                            <a href="{{ $data['url'] }}" class="w-9 h-9 bg-slate-800 hover:bg-primary rounded-lg flex items-center justify-center transition-colors" target="_blank" title="{{ ucfirst($platform) }}">
                                @switch($platform)
                                    @case('facebook')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-primary" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                        </svg>
                                    @break

                                    @case('twitter')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-primary" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                                        </svg>
                                    @break

                                    @case('instagram')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                                        </svg>
                                    @break

                                    @case('linkedin')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-primary" viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                        </svg>
                                    @break

                                    @default
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10" />
                                            <line x1="2" y1="12" x2="22" y2="12" />
                                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                                        </svg>
                                @endswitch
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h5 class="text-white font-bold text-lg mb-5">Quick Links</h5>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#about" class="text-slate-400 hover:text-primary transition-colors flex items-center gap-2">
                                <i data-lucide="chevron-right" class="w-3 h-3"></i> About
                            </a></li>
                        <li><a href="#academics" class="text-slate-400 hover:text-primary transition-colors flex items-center gap-2">
                                <i data-lucide="chevron-right" class="w-3 h-3"></i> Academics
                            </a></li>
                        <li><a href="#facilities" class="text-slate-400 hover:text-primary transition-colors flex items-center gap-2">
                                <i data-lucide="chevron-right" class="w-3 h-3"></i> Facilities
                            </a></li>
                        <li><a href="#gallery" class="text-slate-400 hover:text-primary transition-colors flex items-center gap-2">
                                <i data-lucide="chevron-right" class="w-3 h-3"></i> Gallery
                            </a></li>
                        <li><a href="#testimonials" class="text-slate-400 hover:text-primary transition-colors flex items-center gap-2">
                                <i data-lucide="chevron-right" class="w-3 h-3"></i> Testimonials
                            </a></li>
                    </ul>
                </div>

                <!-- Admissions -->
                <div>
                    <h5 class="text-white font-bold text-lg mb-5">Admissions</h5>
                    <ul class="space-y-3 text-sm">
                        <li><a href="{{ route('tenant.apply') ?? '#' }}" class="text-slate-400 hover:text-primary transition-colors flex items-center gap-2">
                                <i data-lucide="chevron-right" class="w-3 h-3"></i> Apply Now
                            </a></li>
                        @if (!empty($school->phone))
                            <li><a href="tel:{{ $school->phone }}" class="text-slate-400 hover:text-primary transition-colors flex items-center gap-2">
                                    <i data-lucide="chevron-right" class="w-3 h-3"></i> Call Us
                                </a></li>
                        @endif
                        @if (!empty($school->email))
                            <li><a href="mailto:{{ $school->email }}" class="text-slate-400 hover:text-primary transition-colors flex items-center gap-2">
                                    <i data-lucide="chevron-right" class="w-3 h-3"></i> Email Us
                                </a></li>
                        @endif
                        <li><a href="#contact" class="text-slate-400 hover:text-primary transition-colors flex items-center gap-2">
                                <i data-lucide="chevron-right" class="w-3 h-3"></i> Campus Visit
                            </a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h5 class="text-white font-bold text-lg mb-5">Contact Us</h5>
                    <ul class="space-y-4 text-sm">
                        @if (!empty($school->address))
                            <li class="flex items-start gap-3">
                                <i data-lucide="map-pin" class="w-4 h-4 text-primary mt-0.5 flex-shrink-0"></i>
                                <span class="text-slate-400">{{ $school->address }}</span>
                            </li>
                        @endif
                        @if (!empty($school->phone))
                            <li class="flex items-center gap-3">
                                <i data-lucide="phone" class="w-4 h-4 text-primary flex-shrink-0"></i>
                                <a href="tel:{{ $school->phone }}" class="text-slate-400 hover:text-primary transition-colors">{{ $school->phone }}</a>
                            </li>
                        @endif
                        @if (!empty($school->email))
                            <li class="flex items-center gap-3">
                                <i data-lucide="mail" class="w-4 h-4 text-primary flex-shrink-0"></i>
                                <a href="mailto:{{ $school->email }}" class="text-slate-400 hover:text-primary transition-colors text-sm break-all">{{ $school->email }}</a>
                            </li>
                        @endif
                        @if (!empty($school->website))
                            <li class="flex items-center gap-3">
                                <i data-lucide="globe" class="w-4 h-4 text-primary flex-shrink-0"></i>
                                <a href="{{ $school->website }}" target="_blank" class="text-slate-400 hover:text-primary transition-colors text-sm break-all">{{ parse_url($school->website, PHP_URL_HOST) }}</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-slate-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-slate-400">
                    <p>
                        &copy; {{ date('Y') }} {{ $school->name }}. All rights reserved.
                    </p>
                    <div class="flex items-center gap-6">
                        <a href="#" class="hover:text-primary transition-colors">Privacy Policy</a>
                        <a href="#" class="hover:text-primary transition-colors">Terms of Service</a>
                        <a href="#contact" class="hover:text-primary transition-colors">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        if (navbar) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 20) {
                    navbar.classList.add('nav-scrolled');
                } else {
                    navbar.classList.remove('nav-scrolled');
                }
            });
        }

        // Mobile menu toggle
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Close mobile menu on link click
            document.querySelectorAll('#mobile-menu a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });
        }

        // Scroll Spy - Highlight active navigation link based on scroll position
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('header .nav-link');

        const highlightNavLink = () => {
            let currentSectionId = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                const scrollPosition = window.scrollY + 80; // Offset for fixed header

                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href && href.includes('#')) {
                    const targetId = href.substring(1);
                    if (targetId === currentSectionId) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                }
            });
        };

        window.addEventListener('scroll', highlightNavLink);
        window.addEventListener('load', highlightNavLink);
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
            highlightNavLink();
        });

        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (href && href.includes('#')) {
                const targetId = href.substring(1);
                if (targetId === currentSectionId) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            }
        });

        window.addEventListener('scroll', highlightNavLink);
        window.addEventListener('load', highlightNavLink);
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
            highlightNavLink();
        });
    </script>
</body>

</html>
