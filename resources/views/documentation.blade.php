<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Documentation - Smart School ERP</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />

    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        mono: ['Monaco', 'Menlo', 'Ubuntu Mono', 'monospace'],
                    },
                    typography: {
                        DEFAULT: {
                            css: {
                                maxWidth: 'none',
                                color: '#374151',
                                code: {
                                    color: '#1f2937',
                                    backgroundColor: '#f3f4f6',
                                    padding: '0.25rem 0.375rem',
                                    borderRadius: '0.25rem',
                                    fontWeight: '600',
                                },
                                'code::before': {
                                    content: '""',
                                },
                                'code::after': {
                                    content: '""',
                                },
                            },
                        },
                    },
                },
            }
        }
    </script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css" rel="stylesheet">

</head>

<body class="font-sans antialiased bg-gray-50 text-gray-900">

    <nav class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-4">
                    <a href="{{ route('welcome') }}" class="flex items-center space-x-3">
                        <div
                            class="w-8 h-8 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-graduation-cap text-white text-sm"></i>
                        </div>
                        <span class="text-xl font-bold text-gray-900">Smart School ERP</span>
                    </a>
                    <span class="text-gray-400">|</span>
                    <span class="text-lg font-semibold text-blue-600">Documentation</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('welcome') }}" class="text-gray-600 hover:text-blue-600 transition-colors">
                        <i class="fas fa-home mr-2"></i>Home
                    </a>
                    <a href="{{ route('login') }}"
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex min-h-screen">
        <div class="w-64 bg-white border-r border-gray-200 sticky top-16 h-screen overflow-y-auto">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Table of Contents</h3>
                <nav class="space-y-2">
                    <a href="#overview"
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-info-circle mr-3 text-blue-500"></i>Overview
                    </a>
                    <a href="#setup"
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-cog mr-3 text-green-500"></i>Setup & Installation
                    </a>
                    <a href="#features"
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-star mr-3 text-purple-500"></i>Core Modules
                    </a>
                    <a href="#subscription"
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-credit-card mr-3 text-yellow-500"></i>Plans & Billing
                    </a>
                    <a href="#roles"
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-users-cog mr-3 text-indigo-500"></i>User Roles
                    </a>
                    <a href="#security"
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-shield-alt mr-3 text-red-500"></i>Data Security
                    </a>
                    <a href="#api"
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-code mr-3 text-cyan-500"></i>API Endpoints
                    </a>
                    <a href="#roadmap"
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-road mr-3 text-pink-500"></i>Roadmap
                    </a>
                    <a href="#faq"
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-question-circle mr-3 text-orange-500"></i>FAQ
                    </a>
                </nav>
            </div>
        </div>

        <div class="flex-1 max-w-none">
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
                <div class="max-w-4xl mx-auto px-6 text-center" data-aos="fade-up">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">
                        School ERP Documentation
                    </h1>
                    <p class="text-xl text-blue-100 mb-8">
                        Learn how to manage your campus, students, and staff effectively with Smart School System
                    </p>
                    <div class="flex justify-center space-x-4">
                        <a href="#setup"
                            class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                            <i class="fas fa-rocket mr-2"></i>Quick Start
                        </a>
                        <a href="#api"
                            class="bg-blue-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-400 transition-colors">
                            <i class="fas fa-code mr-2"></i>API Reference
                        </a>
                    </div>
                </div>
            </div>

            <div class="max-w-4xl mx-auto px-6 py-12">

                <section id="overview" class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-info-circle text-blue-500 mr-3"></i>
                        Overview
                    </h2>

                    <div class="prose prose-lg max-w-none">
                        <p class="text-lg text-gray-600 mb-6">
                            Smart School ERP is an enterprise-level Software-as-a-Service (SaaS) platform designed to
                            digitize educational institutions. From admissions to alumni management, we automate complex
                            campus operations.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                        <div
                            class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-xl border border-blue-200 group hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-school text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Multi-Branch</h3>
                            <p class="text-gray-600">Centralized management for institutions with multiple campuses
                                and isolated branch data.</p>
                        </div>

                        <div
                            class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-xl border border-green-200 group hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-file-invoice-dollar text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Smart Fees</h3>
                            <p class="text-gray-600">Automated fee collection, invoice generation, and financial
                                reporting for seamless accounting.</p>
                        </div>

                        <div
                            class="bg-gradient-to-br from-purple-50 to-pink-50 p-6 rounded-xl border border-purple-200 group hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-chart-line text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Academic Insights</h3>
                            <p class="text-gray-600">Real-time tracking of student performance, attendance trends, and
                                learning outcomes.</p>
                        </div>
                    </div>
                </section>

                <section id="setup" class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-cog text-green-500 mr-3"></i>
                        Setup & Installation
                    </h2>

                    <div class="bg-white rounded-xl border border-gray-200 p-6 mb-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Local Development Setup</h3>
                        <div class="space-y-4">
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2">1. Clone the Repository</h4>
                                <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto"><code>git clone https://github.com/rohit-joshi25/hrms-saas.git
cd hrms-saas</code></pre>
                            </div>

                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2">2. Install Dependencies</h4>
                                <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto"><code>composer install
npm install</code></pre>
                            </div>

                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2">3. Environment Configuration</h4>
                                <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto"><code>cp .env.example .env
php artisan key:generate</code></pre>
                            </div>

                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2">4. Database Setup</h4>
                                <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto"><code>php artisan migrate --seed
php artisan db:seed --class=SchoolSeeder</code></pre>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border border-blue-200 p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                            <i class="fas fa-cloud text-blue-500 mr-2"></i>
                            Production Deployment
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2">Docker Deployment</h4>
                                <pre class="bg-gray-900 text-green-400 p-3 rounded-lg text-sm overflow-x-auto"><code>docker-compose up -d
docker exec app php artisan migrate</code></pre>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2">Server Deployment</h4>
                                <pre class="bg-gray-900 text-green-400 p-3 rounded-lg text-sm overflow-x-auto"><code>./deploy.sh production
php artisan queue:work</code></pre>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="features" class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-star text-purple-500 mr-3"></i>
                        Core Modules
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div
                            class="bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg transition-all duration-300 group">
                            <div class="flex items-center mb-4">
                                <div
                                    class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-user-graduate text-white"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900">Student Information System</h3>
                            </div>
                            <p class="text-gray-600 mb-4">360-degree view of student data from admission to alumni.</p>
                            <div class="space-y-2">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Online Admission & Enrollment
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Student Profile & Documents
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    ID Card Generation
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Promotion & Alumni Records
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg transition-all duration-300 group">
                            <div class="flex items-center mb-4">
                                <div
                                    class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-book-open text-white"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900">Academic Management</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Manage curriculum, exams, and grading efficiently.</p>
                            <div class="space-y-2">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Class & Section Management
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Exam Scheduling & Admit Cards
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Marks Register & Grade Book
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Homework & Assignment Tracking
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg transition-all duration-300 group">
                            <div class="flex items-center mb-4">
                                <div
                                    class="w-10 h-10 bg-yellow-500 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-wallet text-white"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900">Fee & Finance</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Automated billing and expense tracking for the administration.
                            </p>
                            <div class="space-y-2">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Custom Fee Structures
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Online Payment Gateway Integration
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Due Fee Reminders
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Expense & Income Reports
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg transition-all duration-300 group">
                            <div class="flex items-center mb-4">
                                <div
                                    class="w-10 h-10 bg-purple-500 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-chalkboard-teacher text-white"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900">Staff & Payroll</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Manage teachers, staff attendance, and monthly payroll.</p>
                            <div class="space-y-2">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Staff Directories & Roles
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Biometric Attendance Sync
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Leave Management System
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Auto-Payroll Generation
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="subscription" class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-credit-card text-yellow-500 mr-3"></i>
                        Plans & Billing
                    </h2>

                    <div class="bg-white rounded-xl border border-gray-200 p-6 mb-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">SaaS Subscription Plans</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="border border-gray-200 rounded-lg p-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Starter</h4>
                                <p class="text-2xl font-bold text-gray-900 mb-2">$49/mo</p>
                                <p class="text-sm text-gray-600">Up to 200 Students</p>
                            </div>
                            <div class="border border-blue-200 rounded-lg p-4 bg-blue-50">
                                <h4 class="font-semibold text-gray-900 mb-2">Growth</h4>
                                <p class="text-2xl font-bold text-blue-600 mb-2">$149/mo</p>
                                <p class="text-sm text-gray-600">Up to 1000 Students</p>
                            </div>
                            <div class="border border-purple-200 rounded-lg p-4 bg-purple-50">
                                <h4 class="font-semibold text-gray-900 mb-2">Institution</h4>
                                <p class="text-2xl font-bold text-purple-600 mb-2">Custom</p>
                                <p class="text-sm text-gray-600">Unlimited Students & Branches</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-yellow-50 to-orange-50 rounded-xl border border-yellow-200 p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Fee Collection Integration</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2">Payment Gateways</h4>
                                <ul class="space-y-2 text-gray-600">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Stripe (Global)</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Razorpay (India)</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>PayPal</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Paystack (Africa)</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2">Billing Features</h4>
                                <ul class="space-y-2 text-gray-600">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Partial Payments</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Late Fee Calculation</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Receipt Generation</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Fee Concessions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="roles" class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-users-cog text-indigo-500 mr-3"></i>
                        User Roles
                    </h2>

                    <div class="space-y-6">
                        <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl border border-purple-200 p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-crown text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-900">SuperAdmin</h3>
                                    <p class="text-purple-600 text-sm">System Owner</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-2">Permissions</h4>
                                    <ul class="space-y-1 text-sm text-gray-600">
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Manage Schools/Tenants</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Subscription Plans</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Global Settings</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-2">Access Areas</h4>
                                    <ul class="space-y-1 text-sm text-gray-600">
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>SaaS Dashboard</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Payment Reports</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>System Logs</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border border-blue-200 p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-user-tie text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-900">School Admin/Principal</h3>
                                    <p class="text-blue-600 text-sm">Campus Controller</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-2">Permissions</h4>
                                    <ul class="space-y-1 text-sm text-gray-600">
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Staff & Student Management
                                        </li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Academic Planning</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Fee Configuration</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-2">Access Areas</h4>
                                    <ul class="space-y-1 text-sm text-gray-600">
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>School Dashboard</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Timetable</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Examinations</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border border-green-200 p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-users text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-900">Teacher, Parent & Student</h3>
                                    <p class="text-green-600 text-sm">End-Users</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-2">Teacher</h4>
                                    <ul class="space-y-1 text-sm text-gray-600">
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Mark Attendance</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Upload Marks/Homework</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Apply Leave</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-2">Parent/Student</h4>
                                    <ul class="space-y-1 text-sm text-gray-600">
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Pay Fees Online</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>View Report Card</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Track Attendance</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="security" class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-shield-alt text-red-500 mr-3"></i>
                        Data Security
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white rounded-xl border border-gray-200 p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                                <i class="fas fa-lock text-red-500 mr-2"></i>
                                Student Privacy
                            </h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <div><strong>Encrypted Data:</strong> Student records and sensitive data are
                                        encrypted.</div>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <div><strong>Role-Based Access:</strong> Teachers only see their assigned classes.
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <div><strong>Secure Backups:</strong> Daily automated backups of school data.</div>
                                </li>
                            </ul>
                        </div>

                        <div class="bg-white rounded-xl border border-gray-200 p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                                <i class="fas fa-user-shield text-red-500 mr-2"></i>
                                System Integrity
                            </h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <div><strong>CSRF/XSS Protection:</strong> Built-in protection against web attacks.
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <div><strong>Audit Logs:</strong> Track every action taken by staff or admins.</div>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <div><strong>Session Management:</strong> Auto-logout for inactive sessions.</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="api" class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-code text-cyan-500 mr-3"></i>
                        API Endpoints
                        <span class="ml-3 text-sm bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full">Coming
                            Soon</span>
                    </h2>

                    <div class="bg-gradient-to-r from-cyan-50 to-blue-50 rounded-xl border border-cyan-200 p-6 mb-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Integration API</h3>
                        <p class="text-gray-600 mb-4">
                            Connect your website, library kiosk, or transport GPS system directly with Smart School ERP.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-3">Planned Endpoints</h4>
                                <div class="space-y-2 text-sm">
                                    <div class="flex items-center">
                                        <span
                                            class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-mono mr-2">GET</span>
                                        <code class="text-gray-700">/api/v1/students</code>
                                    </div>
                                    <div class="flex items-center">
                                        <span
                                            class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs font-mono mr-2">POST</span>
                                        <code class="text-gray-700">/api/v1/admissions</code>
                                    </div>
                                    <div class="flex items-center">
                                        <span
                                            class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-mono mr-2">GET</span>
                                        <code class="text-gray-700">/api/v1/fees/dues</code>
                                    </div>
                                    <div class="flex items-center">
                                        <span
                                            class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs font-mono mr-2">PUT</span>
                                        <code class="text-gray-700">/api/v1/attendance</code>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-3">Capabilities</h4>
                                <ul class="space-y-2 text-gray-600 text-sm">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Sync Student Data</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Biometric Device Integration
                                    </li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Website Enquiry Form Sync</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Library Management Sync</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-900 rounded-xl p-6">
                        <h4 class="text-lg font-semibold text-white mb-4">Example: Fetch Student Info</h4>
                        <pre class="text-green-400 text-sm overflow-x-auto"><code>// Get student list
                            curl -X GET "https://api.smartschool.com/v1/students" \
                                -H "Authorization: Bearer SCHOOL_API_TOKEN" \
                                -H "Content-Type: application/json"

                            // Response
                            {
                            "data": [
                                {
                                "id": 101,
                                "name": "Alex Johnson",
                                "class": "10-A",
                                "guardian": "Robert Johnson",
                                "status": "active"
                                }
                            ],
                            "meta": {
                                "total": 1200,
                                "page": 1
                            }
                            }</code></pre>
                    </div>
                </section>

                <section id="roadmap" class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-road text-pink-500 mr-3"></i>
                        Development Roadmap
                    </h2>

                    <div class="space-y-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-4 h-4 bg-blue-500 rounded-full mt-2"></div>
                            <div class="flex-1">
                                <div class="bg-white rounded-xl border border-gray-200 p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <h3 class="text-xl font-semibold text-gray-900">Q1 2024 - AI Tutor & Analytics
                                        </h3>
                                        <span
                                            class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">In
                                            Development</span>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-robot text-blue-500 mr-2"></i>AI Doubt Solving Bot</li>
                                            <li><i class="fas fa-brain text-blue-500 mr-2"></i>Adaptive Learning Paths
                                            </li>
                                        </ul>
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-chart-line text-blue-500 mr-2"></i>Performance
                                                Prediction</li>
                                            <li><i class="fas fa-cogs text-blue-500 mr-2"></i>Smart Timetable Generator
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-4 h-4 bg-green-500 rounded-full mt-2"></div>
                            <div class="flex-1">
                                <div class="bg-white rounded-xl border border-gray-200 p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <h3 class="text-xl font-semibold text-gray-900">Q2 2024 - Mobile Apps</h3>
                                        <span
                                            class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">Planned</span>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-mobile-alt text-green-500 mr-2"></i>Parent App
                                                (iOS/Android)</li>
                                            <li><i class="fas fa-chalkboard-teacher text-green-500 mr-2"></i>Teacher App
                                            </li>
                                        </ul>
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-bell text-green-500 mr-2"></i>Instant Homework
                                                Notifications</li>
                                            <li><i class="fas fa-bus text-green-500 mr-2"></i>Live Bus Tracking</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-4 h-4 bg-purple-500 rounded-full mt-2"></div>
                            <div class="flex-1">
                                <div class="bg-white rounded-xl border border-gray-200 p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <h3 class="text-xl font-semibold text-gray-900">Q3 2024 - LMS Integration</h3>
                                        <span
                                            class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-semibold">Planned</span>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-video text-purple-500 mr-2"></i>Live Classes
                                                (Zoom/Meet)</li>
                                            <li><i class="fas fa-file-pdf text-purple-500 mr-2"></i>E-Library & Notes
                                            </li>
                                        </ul>
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-question text-purple-500 mr-2"></i>Online Quiz Module
                                            </li>
                                            <li><i class="fas fa-certificate text-purple-500 mr-2"></i>Course
                                                Certification</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="faq" class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-question-circle text-orange-500 mr-3"></i>
                        Frequently Asked Questions
                    </h2>

                    <div class="space-y-4">
                        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                            <button
                                class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors"
                                onclick="toggleFAQ('faq1')">
                                <span class="font-semibold text-gray-900">How do I start a new academic session?</span>
                                <i class="fas fa-chevron-down text-gray-400 transform transition-transform duration-200"
                                    id="faq1-icon"></i>
                            </button>
                            <div class="hidden px-6 pb-4" id="faq1-content">
                                <p class="text-gray-600">
                                    Navigate to 'System Settings' > 'Session Settings'. Click 'Add New Session', set the
                                    start/end dates, and toggle it to 'Active'. The system will prompt you to promote
                                    students.
                                </p>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                            <button
                                class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors"
                                onclick="toggleFAQ('faq2')">
                                <span class="font-semibold text-gray-900">Is there a mobile app for parents?</span>
                                <i class="fas fa-chevron-down text-gray-400 transform transition-transform duration-200"
                                    id="faq2-icon"></i>
                            </button>
                            <div class="hidden px-6 pb-4" id="faq2-content">
                                <p class="text-gray-600">
                                    Yes, our responsive web portal works on mobile browsers. Dedicated iOS and Android
                                    apps for Parents and Teachers are scheduled for release in Q2 2024.
                                </p>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                            <button
                                class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors"
                                onclick="toggleFAQ('faq3')">
                                <span class="font-semibold text-gray-900">How secure is student data?</span>
                                <i class="fas fa-chevron-down text-gray-400 transform transition-transform duration-200"
                                    id="faq3-icon"></i>
                            </button>
                            <div class="hidden px-6 pb-4" id="faq3-content">
                                <p class="text-gray-600">
                                    We use AES-256 encryption and daily cloud backups. Each school's data is isolated to
                                    ensure strict privacy and GDPR compliance.
                                </p>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                            <button
                                class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors"
                                onclick="toggleFAQ('faq4')">
                                <span class="font-semibold text-gray-900">Can I customize fee structures?</span>
                                <i class="fas fa-chevron-down text-gray-400 transform transition-transform duration-200"
                                    id="faq4-icon"></i>
                            </button>
                            <div class="hidden px-6 pb-4" id="faq4-content">
                                <p class="text-gray-600">
                                    Yes! You can create unlimited fee heads (Tuition, Transport, Library), set due
                                    dates, add fines for late payments, and offer discounts/scholarships to specific
                                    students.
                                </p>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                            <button
                                class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors"
                                onclick="toggleFAQ('faq5')">
                                <span class="font-semibold text-gray-900">Does it support multiple languages?</span>
                                <i class="fas fa-chevron-down text-gray-400 transform transition-transform duration-200"
                                    id="faq5-icon"></i>
                            </button>
                            <div class="hidden px-6 pb-4" id="faq5-content">
                                <p class="text-gray-600">
                                    Absolutely. Smart School ERP supports RTL (Right-to-Left) and includes 20+ language
                                    packs including English, Spanish, French, Arabic, and Hindi.
                                </p>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                            <button
                                class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors"
                                onclick="toggleFAQ('faq6')">
                                <span class="font-semibold text-gray-900">What support options are available?</span>
                                <i class="fas fa-chevron-down text-gray-400 transform transition-transform duration-200"
                                    id="faq6-icon"></i>
                            </button>
                            <div class="hidden px-6 pb-4" id="faq6-content">
                                <p class="text-gray-600">
                                    We offer 24/7 ticket support, live chat for urgent issues, and a comprehensive video
                                    tutorial library. Enterprise plans include a dedicated account manager.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="text-center py-12" data-aos="fade-up">
                    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl p-8 text-white">
                        <h2 class="text-3xl font-bold mb-4">Digitize Your Campus Today</h2>
                        <p class="text-xl text-blue-100 mb-6">
                            Join thousands of educational institutions already transforming their operations
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('register') }}"
                                class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                                <i class="fas fa-rocket mr-2"></i>Start Free Trial
                            </a>
                            <a href="{{ route('login') }}"
                                class="bg-blue-500 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-400 transition-colors">
                                <i class="fas fa-sign-in-alt mr-2"></i>Admin Login
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-out',
            once: true,
            offset: 100
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // FAQ Toggle Function
        function toggleFAQ(faqId) {
            const content = document.getElementById(faqId + '-content');
            const icon = document.getElementById(faqId + '-icon');

            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                content.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // Highlight active navigation item on scroll
        window.addEventListener('scroll', function () {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('nav a[href^="#"]');

            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                if (window.pageYOffset >= sectionTop) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('bg-blue-100', 'text-blue-600');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('bg-blue-100', 'text-blue-600');
                }
            });
        });
    </script>
</body>

</html>