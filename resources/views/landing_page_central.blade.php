<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SchoolSaaS — Multi‑Tenant School Management</title>
    @vite(['resources/css/app.css'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-gray-800">

    <!-- Navbar -->
    <header class="sticky top-0 z-50 flex items-center justify-between px-6 py-4 border-b bg-white/95 backdrop-blur-sm">
        <div class="flex items-center gap-2 font-bold text-xl">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                <path d="M4 10L12 4L20 10V20H4V10Z" stroke="currentColor" stroke-width="2" />
            </svg>
            <span class="text-blue-700">SchoolSaaS</span>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex gap-8 text-sm font-medium">
            <a href="#features" class="hover:text-blue-600 transition">Features</a>
            <a href="#roles" class="hover:text-blue-600 transition">Roles</a>
            <a href="#multi-tenancy" class="hover:text-blue-600 transition">Multi‑Tenancy</a>
            <a href="#stack" class="hover:text-blue-600 transition">Tech Stack</a>
            <a href="#pricing" class="hover:text-blue-600 transition">Pricing</a>
        </nav>

        <!-- Desktop Buttons -->
        <div class="hidden md:flex gap-3">
            <a href="/auth/login" class="px-4 py-2 border rounded hover:bg-gray-50 transition">Login</a>
            <a href="/auth/register" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Get Started</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="md:hidden p-2 rounded hover:bg-gray-100 transition">
            <svg id="menu-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="close-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="hidden">
                <path d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu" class="absolute top-full left-0 right-0 bg-white border-b shadow-lg px-6 py-4 hidden md:hidden">
            <div class="flex flex-col gap-4">
                <a href="#features" class="py-3 hover:text-blue-600 transition border-b border-gray-100">Features</a>
                <a href="#roles" class="py-3 hover:text-blue-600 transition border-b border-gray-100">Roles</a>
                <a href="#multi-tenancy" class="py-3 hover:text-blue-600 transition border-b border-gray-100">Multi‑Tenancy</a>
                <a href="#stack" class="py-3 hover:text-blue-600 transition border-b border-gray-100">Tech Stack</a>
                <a href="#pricing" class="py-3 hover:text-blue-600 transition border-b border-gray-100">Pricing</a>
                <div class="flex flex-col gap-3 pt-4">
                    <a href="/auth/login" class="px-4 py-3 border rounded text-center hover:bg-gray-50 transition">Login</a>
                    <a href="/auth/register" class="px-4 py-3 bg-blue-600 text-white rounded text-center hover:bg-blue-700 transition">Get Started</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero -->
    <section class="text-center px-6 py-20 bg-gradient-to-b from-blue-50 to-white">
        <h1 class="text-4xl md:text-6xl font-bold text-gray-900">
            Multi‑Tenant School Management SaaS
        </h1>

        <p class="mt-6 text-xl text-gray-600 max-w-3xl mx-auto">
            A modern Laravel‑based SaaS platform that lets you manage multiple schools securely
            with full data isolation, role‑based access, and comprehensive academic tools.
        </p>

        <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
            <a href="/auth/register" class="px-8 py-4 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition text-lg font-semibold shadow-lg hover:shadow-xl">
                Start Free Trial
            </a>
            <a href="#contact" class="px-8 py-4 border border-blue-600 text-blue-600 rounded-xl hover:bg-blue-50 transition text-lg font-semibold">
                Request Demo
            </a>
        </div>

        <!-- SVG Illustration -->
        <div class="mt-16 flex justify-center">
            <svg width="480" height="280" viewBox="0 0 480 280" fill="none" class="max-w-full">
                <rect width="480" height="280" rx="24" fill="#EFF6FF" />
                <!-- Dashboard header -->
                <rect x="30" y="30" width="420" height="40" rx="8" fill="#3B82F6" />
                <rect x="50" y="40" width="80" height="20" rx="4" fill="#BFDBFE" />
                <rect x="350" y="40" width="80" height="20" rx="4" fill="#BFDBFE" />
                <!-- Sidebar -->
                <rect x="30" y="90" width="100" height="160" rx="8" fill="#DBEAFE" />
                <rect x="50" y="110" width="60" height="12" rx="4" fill="#93C5FD" />
                <rect x="50" y="130" width="60" height="12" rx="4" fill="#93C5FD" />
                <rect x="50" y="150" width="60" height="12" rx="4" fill="#93C5FD" />
                <rect x="50" y="170" width="60" height="12" rx="4" fill="#93C5FD" />
                <!-- Main content -->
                <rect x="150" y="90" width="300" height="70" rx="8" fill="#FFFFFF" stroke="#BFDBFE" stroke-width="2" />
                <rect x="170" y="110" width="120" height="12" rx="4" fill="#E5E7EB" />
                <rect x="170" y="130" width="80" height="12" rx="4" fill="#E5E7EB" />
                <rect x="150" y="180" width="140" height="70" rx="8" fill="#FFFFFF" stroke="#BFDBFE" stroke-width="2" />
                <rect x="170" y="200" width="100" height="12" rx="4" fill="#E5E7EB" />
                <rect x="310" y="180" width="140" height="70" rx="8" fill="#FFFFFF" stroke="#BFDBFE" stroke-width="2" />
                <rect x="330" y="200" width="100" height="12" rx="4" fill="#E5E7EB" />
                <!-- School icons -->
                <circle cx="400" cy="120" r="12" fill="#10B981" />
                <circle cx="430" cy="120" r="12" fill="#F59E0B" />
                <circle cx="460" cy="120" r="12" fill="#EF4444" />
            </svg>
        </div>
    </section>

    <!-- Features -->
    <section id="features" class="px-6 py-20">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-4">Everything You Need to Manage Schools</h2>
            <p class="text-gray-600 text-center mb-12 max-w-3xl mx-auto">A comprehensive suite of tools designed for modern educational institutions with multi‑tenant architecture.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $features = [
                        [
                            'title' => 'Student Management',
                            'desc' => 'Complete student lifecycle from admission to graduation with detailed profiles, academic records, and guardian information.',
                            'icon' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13-5.197a4 4 0 00-8 0v1h8v-1z',
                        ],
                        [
                            'title' => 'Attendance Tracking',
                            'desc' => 'Real‑time attendance marking, automated reports, and notifications for absent students with biometric integration.',
                            'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                        ],
                        [
                            'title' => 'Exams & Results',
                            'desc' => 'Create exam schedules, manage grading, generate report cards, and publish results with analytics.',
                            'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
                        ],
                        [
                            'title' => 'Fee Management',
                            'desc' => 'Automated fee collection, invoice generation, payment reminders, and financial reporting for multiple schools.',
                            'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                        ],
                        [
                            'title' => 'Role‑Based Access Control',
                            'desc' => 'Granular permissions using Spatie Laravel Permission. Define roles (Admin, Teacher, Accountant) with precise access levels.',
                            'icon' =>
                                'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z',
                        ],
                        [
                            'title' => 'Multi‑Tenant Isolation',
                            'desc' => 'Each school operates in a fully isolated environment using Stancl Tenancy with single‑database school_id segregation.',
                            'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                        ],
                    ];
                @endphp

                @foreach ($features as $feature)
                    <div class="group p-8 border border-gray-200 rounded-2xl hover:border-blue-300 hover:shadow-xl transition-all duration-300 bg-white">
                        <div class="w-14 h-14 mb-6 bg-blue-50 rounded-xl flex items-center justify-center group-hover:bg-blue-100 transition">
                            <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['icon'] }}"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $feature['title'] }}</h3>
                        <p class="text-gray-600">{{ $feature['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Roles -->
    <section id="roles" class="px-6 py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-4">Designed for Every Stakeholder</h2>
            <p class="text-gray-600 text-center mb-12 max-w-3xl mx-auto">Comprehensive role‑based access control ensures each user has the right tools and permissions.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $roles = [
                        [
                            'title' => 'Super Admin',
                            'desc' => 'SaaS owner with full system access across all tenants.',
                            'color' => 'bg-purple-100 text-purple-800',
                            'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z',
                        ],
                        [
                            'title' => 'Admin',
                            'desc' => 'Manages platform‑wide settings, billing, and tenant onboarding.',
                            'color' => 'bg-blue-100 text-blue-800',
                            'icon' =>
                                'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z',
                        ],
                        [
                            'title' => 'School Admin',
                            'desc' => 'Oversees a single school: staff, students, academics, and finances.',
                            'color' => 'bg-green-100 text-green-800',
                            'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                        ],
                        [
                            'title' => 'Teacher',
                            'desc' => 'Manages classes, attendance, assignments, and student grades.',
                            'color' => 'bg-amber-100 text-amber-800',
                            'icon' => 'M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222',
                        ],
                        [
                            'title' => 'Accountant',
                            'desc' => 'Handles fee collection, payroll, expenses, and financial reports.',
                            'color' => 'bg-emerald-100 text-emerald-800',
                            'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                        ],
                        [
                            'title' => 'Student',
                            'desc' => 'Accesses timetable, assignments, results, and fee status.',
                            'color' => 'bg-cyan-100 text-cyan-800',
                            'icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                        ],
                        [
                            'title' => 'Parent',
                            'desc' => 'Monitors child’s attendance, performance, and fee payments.',
                            'color' => 'bg-pink-100 text-pink-800',
                            'icon' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13-5.197a4 4 0 00-8 0v1h8v-1z',
                        ],
                    ];
                @endphp

                @foreach ($roles as $role)
                    <div class="bg-white rounded-2xl p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                        <div class="w-12 h-12 {{ $role['color'] }} rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $role['icon'] }}"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $role['title'] }}</h3>
                        <p class="text-sm text-gray-600">{{ $role['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Multi‑Tenancy Explanation -->
    <section id="multi-tenancy" class="px-6 py-20 bg-gradient-to-r from-blue-50 to-indigo-50">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-4">True Multi‑Tenant Architecture</h2>
            <p class="text-gray-700 text-center mb-12 max-w-3xl mx-auto">Each school’s data is completely isolated using <strong>Stancl Tenancy</strong> with single‑database <code>school_id</code> segregation.</p>

            <div class="grid lg:grid-cols-3 gap-8 items-center">
                <!-- Left: Central SaaS -->
                <div class="text-center p-8 bg-white rounded-2xl shadow-lg border">
                    <div class="w-20 h-20 mx-auto mb-6 bg-blue-100 rounded-full flex items-center justify-center">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Central SaaS</h3>
                    <p class="text-gray-600">Single Laravel application serving multiple schools with shared infrastructure.</p>
                </div>

                <!-- Middle: Arrow & Schools -->
                <div class="relative hidden lg:block">
                    <div class="flex justify-center items-center">
                        <div class="w-12 h-1 bg-blue-300"></div>
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                        <div class="w-12 h-1 bg-blue-300"></div>
                    </div>
                    <div class="text-center mt-4 text-sm text-gray-500">school_id isolation</div>
                </div>

                <!-- Right: Multiple Schools -->
                <div class="lg:col-span-1">
                    <div class="grid grid-cols-2 gap-4">
                        @foreach (['School A', 'School B', 'School C', 'School D'] as $school)
                            <div class="p-6 bg-white rounded-xl border hover:shadow-md transition">
                                <div class="w-10 h-10 mx-auto mb-3 bg-green-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-gray-900">{{ $school }}</h4>
                                <p class="text-xs text-gray-500 mt-1">Isolated database rows</p>
                            </div>
                        @endforeach
                    </div>
                    <p class="text-center text-gray-600 mt-6 text-sm">Each school has its own users, students, fees, and reports—no cross‑tenant data leakage.</p>
                </div>
            </div>

            <div class="mt-12 p-6 bg-white border border-blue-200 rounded-2xl">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                    <div>
                        <h4 class="text-xl font-bold text-gray-900">How It Works</h4>
                        <ul class="mt-3 text-gray-700 space-y-2">
                            <li class="flex items-start"><span class="inline-block w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3"></span> Every database table includes a <code>school_id</code> column</li>
                            <li class="flex items-start"><span class="inline-block w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3"></span> Laravel Eloquent queries are automatically scoped to the current tenant</li>
                            <li class="flex items-start"><span class="inline-block w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3"></span> Schools can have custom domains (school1.yoursaas.com)</li>
                            <li class="flex items-start"><span class="inline-block w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3"></span> Super Admin can view all data; school admins see only their school</li>
                        </ul>
                    </div>
                    <div class="text-center md:text-right">
                        <a href="#features" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-semibold">See Technical Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack -->
    <section id="stack" class="px-6 py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-4">Modern & Robust Tech Stack</h2>
            <p class="text-gray-600 text-center mb-12 max-w-3xl mx-auto">Built with the latest Laravel ecosystem tools for performance, security, and scalability.</p>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                @php
                    $technologies = [
                        [
                            'name' => 'Laravel',
                            'desc' => 'PHP framework for elegant syntax and powerful features.',
                            'color' => 'bg-red-50 text-red-700',
                            'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
                        ],
                        [
                            'name' => 'Tailwind CSS v4',
                            'desc' => 'Utility‑first CSS framework for rapid UI development.',
                            'color' => 'bg-cyan-50 text-cyan-700',
                            'icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01',
                        ],
                        [
                            'name' => 'Stancl Tenancy',
                            'desc' => 'Multi‑tenant package for single‑database isolation.',
                            'color' => 'bg-blue-50 text-blue-700',
                            'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                        ],
                        [
                            'name' => 'Spatie Permission',
                            'desc' => 'Role & permission management for Laravel.',
                            'color' => 'bg-green-50 text-green-700',
                            'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                        ],
                        [
                            'name' => 'Vanilla JavaScript',
                            'desc' => 'Lightweight, no‑framework frontend interactivity.',
                            'color' => 'bg-yellow-50 text-yellow-700',
                            'icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
                        ],
                    ];
                @endphp

                @foreach ($technologies as $tech)
                    <div class="bg-white p-6 rounded-2xl border border-gray-200 hover:shadow-lg transition-shadow text-center">
                        <div class="w-14 h-14 mx-auto mb-4 {{ $tech['color'] }} rounded-xl flex items-center justify-center">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $tech['icon'] }}"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $tech['name'] }}</h3>
                        <p class="text-sm text-gray-600">{{ $tech['desc'] }}</p>
                    </div>
                @endforeach
            </div>

            <div class="mt-12 text-center">
                <p class="text-gray-700">Plus: MySQL, Redis, Vite, PHP 8.3, and more.</p>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section id="pricing" class="px-6 py-20 bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-4">Simple, Transparent Pricing</h2>
            <p class="text-gray-600 text-center mb-12 max-w-3xl mx-auto">Choose the plan that fits your school’s size and needs. No hidden fees, no surprises.</p>

            <div class="grid md:grid-cols-3 gap-8">
                @php
                    $plans = [
                        [
                            'name' => 'Starter',
                            'price' => '$49',
                            'period' => '/month per school',
                            'description' => 'Perfect for small schools or individual campuses.',
                            'features' => ['Up to 500 students', 'Basic student management', 'Attendance tracking', 'Exam & results module', 'Email support', 'Single school tenant'],
                            'cta' => 'Get Started',
                            'cta_color' => 'border border-blue-600 text-blue-600 hover:bg-blue-50',
                            'popular' => false,
                        ],
                        [
                            'name' => 'Growth',
                            'price' => '$99',
                            'period' => '/month per school',
                            'description' => 'Ideal for medium‑sized schools with multiple departments.',
                            'features' => ['Up to 2,000 students', 'Advanced analytics', 'Fee management & invoicing', 'Role‑based access control', 'Priority support', 'Multi‑school dashboard', 'Custom domain support'],
                            'cta' => 'Start Free Trial',
                            'cta_color' => 'bg-blue-600 text-white hover:bg-blue-700',
                            'popular' => true,
                        ],
                        [
                            'name' => 'Enterprise',
                            'price' => 'Custom',
                            'period' => 'tailored pricing',
                            'description' => 'For large institutions, districts, or government bodies.',
                            'features' => ['Unlimited students & schools', 'Full multi‑tenant isolation', 'Advanced reporting & BI', 'Dedicated account manager', 'SLA 99.9% uptime', 'White‑label branding', 'API access', 'On‑premise deployment option'],
                            'cta' => 'Contact Sales',
                            'cta_color' => 'border border-gray-800 text-gray-800 hover:bg-gray-100',
                            'popular' => false,
                        ],
                    ];
                @endphp

                @foreach ($plans as $plan)
                    <div class="relative rounded-2xl border-2 {{ $plan['popular'] ? 'border-blue-500 shadow-2xl' : 'border-gray-200' }} p-8 bg-white">
                        @if ($plan['popular'])
                            <div class="absolute -top-3 left-1/2 -translate-x-1/2">
                                <span class="bg-blue-600 text-white px-4 py-1 rounded-full text-sm font-semibold">Most Popular</span>
                            </div>
                        @endif
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold text-gray-900">{{ $plan['name'] }}</h3>
                            <div class="mt-4 flex items-baseline justify-center">
                                <span class="text-5xl font-bold text-gray-900">{{ $plan['price'] }}</span>
                                <span class="ml-2 text-gray-600">{{ $plan['period'] }}</span>
                            </div>
                            <p class="mt-4 text-gray-600">{{ $plan['description'] }}</p>
                        </div>
                        <ul class="space-y-3 mb-8">
                            @foreach ($plan['features'] as $feature)
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <a href="/auth/register" class="block w-full py-3 px-4 rounded-xl text-center font-semibold transition {{ $plan['cta_color'] }}">
                            {{ $plan['cta'] }}
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="mt-12 text-center text-gray-600">
                <p>All plans include: 14‑day free trial, no credit card required, and the ability to cancel anytime.</p>
                <p class="mt-2">Need a custom plan? <a href="#contact" class="text-blue-600 font-semibold hover:underline">Contact our sales team</a>.</p>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="bg-gradient-to-r from-blue-700 to-indigo-800 text-white py-24 text-center">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-5xl font-bold">Start Your School SaaS Today</h2>
            <p class="mt-6 text-xl opacity-90">Join hundreds of schools that have streamlined their operations with our secure, scalable, and multi‑tenant platform.</p>

            <div class="mt-10 flex flex-col sm:flex-row justify-center gap-6">
                <a href="/auth/register" class="px-10 py-4 bg-white text-blue-700 font-bold rounded-xl hover:bg-gray-100 transition text-lg shadow-2xl hover:shadow-3xl">
                    Get Started — Free 14‑Day Trial
                </a>
                <a href="#contact" class="px-10 py-4 border-2 border-white text-white font-bold rounded-xl hover:bg-white/10 transition text-lg">
                    Request a Personalized Demo
                </a>
            </div>

            <div class="mt-12 grid grid-cols-3 gap-8 max-w-2xl mx-auto text-sm text-blue-200">
                <div class="flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>No credit card required</span>
                </div>
                <div class="flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Full multi‑tenant support</span>
                </div>
                <div class="flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Cancel anytime</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 text-left">
                <div>
                    <div class="flex items-center gap-2 font-bold text-xl text-white mb-4">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <path d="M4 10L12 4L20 10V20H4V10Z" stroke="currentColor" stroke-width="2" />
                        </svg>
                        SchoolSaaS
                    </div>
                    <p class="text-sm">A modern multi‑tenant school management platform built with Laravel & Tailwind CSS.</p>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-4">Product</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#features" class="hover:text-white transition">Features</a></li>
                        <li><a href="#roles" class="hover:text-white transition">Roles</a></li>
                        <li><a href="#multi-tenancy" class="hover:text-white transition">Multi‑Tenancy</a></li>
                        <li><a href="#stack" class="hover:text-white transition">Tech Stack</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-4">Legal</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white transition">Terms of Service</a></li>
                        <li><a href="#" class="hover:text-white transition">Cookie Policy</a></li>
                        <li><a href="#" class="hover:text-white transition">GDPR Compliance</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-4">Contact</h4>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <a href="mailto:hello@schoolsaas.example" class="hover:text-white transition">hello@schoolsaas.example</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>San Francisco, CA</span>
                        </li>
                    </ul>
                    <div class="flex gap-4 mt-6">
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-10 pt-6 text-center text-sm text-gray-500">
                © {{ date('Y') }} SchoolSaaS. All rights reserved. Built with Laravel SaaS Architecture.
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                e.preventDefault();
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Simple fade‑in on scroll
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-6');
                }
            });
        }, observerOptions);

        // Observe elements with the class 'scroll-fade'
        document.querySelectorAll('.scroll-fade').forEach(el => {
            el.classList.add('opacity-0', 'translate-y-6', 'transition-all', 'duration-700');
            observer.observe(el);
        });

        // Navbar background on scroll
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('shadow-md', 'bg-white');
                header.classList.remove('bg-white/95');
            } else {
                header.classList.remove('shadow-md', 'bg-white');
                header.classList.add('bg-white/95');
            }
        });

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                const isHidden = mobileMenu.classList.contains('hidden');
                if (isHidden) {
                    mobileMenu.classList.remove('hidden');
                    menuIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                } else {
                    mobileMenu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });

            // Close menu when clicking a link
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                });
            });

            // Close menu when clicking outside
            document.addEventListener('click', (event) => {
                if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
                    mobileMenu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });
        }
    </script>
</body>

</html>
