<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HRMS Documentation - Smart School</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <!-- Styles -->
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
                }
            }
        }
    </script>

    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Prism.js for code highlighting -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css" rel="stylesheet">
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900">

    <!-- Top Navigation -->
    <nav class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-4">
                    <a href="{{ route('welcome') }}" class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-users text-white text-sm"></i>
                        </div>
                        <span class="text-xl font-bold text-gray-900">Smart School HRMS</span>
                    </a>
                    <span class="text-gray-400">|</span>
                    <span class="text-lg font-semibold text-blue-600">Documentation</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('welcome') }}" class="text-gray-600 hover:text-blue-600 transition-colors">
                        <i class="fas fa-home mr-2"></i>Home
                    </a>
                    <a href="{{ route('login') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-white border-r border-gray-200 sticky top-16 h-screen overflow-y-auto">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Table of Contents</h3>
                <nav class="space-y-2">
                    <a href="#overview" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-info-circle mr-3 text-blue-500"></i>Overview
                    </a>
                    <a href="#setup" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-cog mr-3 text-green-500"></i>Setup & Installation
                    </a>
                    <a href="#features" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-star mr-3 text-purple-500"></i>Core Features
                    </a>
                    <a href="#subscription" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-credit-card mr-3 text-yellow-500"></i>Subscription & Billing
                    </a>
                    <a href="#roles" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-users-cog mr-3 text-indigo-500"></i>User Roles & Access
                    </a>
                    <a href="#security" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-shield-alt mr-3 text-red-500"></i>Security Measures
                    </a>
                    <a href="#api" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-code mr-3 text-cyan-500"></i>API Endpoints
                    </a>
                    <a href="#roadmap" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-road mr-3 text-pink-500"></i>Roadmap
                    </a>
                    <a href="#faq" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-question-circle mr-3 text-orange-500"></i>FAQ
                    </a>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 max-w-none">
            <!-- Hero Section -->
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
                <div class="max-w-4xl mx-auto px-6 text-center" data-aos="fade-up">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">
                        HRMS Documentation
                    </h1>
                    <p class="text-xl text-blue-100 mb-8">
                        Learn how to use, configure, and scale Smart School HRMS for your organization
                    </p>
                    <div class="flex justify-center space-x-4">
                        <a href="#setup" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                            <i class="fas fa-rocket mr-2"></i>Quick Start
                        </a>
                        <a href="#api" class="bg-blue-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-400 transition-colors">
                            <i class="fas fa-code mr-2"></i>API Reference
                        </a>
                    </div>
                </div>
            </div>

            <!-- Content Sections -->
            <div class="max-w-4xl mx-auto px-6 py-12">

                <!-- Overview Section -->
                <section id="overview" class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-info-circle text-blue-500 mr-3"></i>
                        Overview
                    </h2>

                    <div class="prose prose-lg max-w-none">
                        <p class="text-lg text-gray-600 mb-6">
                            Smart School HRMS is an enterprise-level Software-as-a-Service (SaaS) platform designed to revolutionize
                            human resource management through AI-powered automation and intelligent analytics.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-xl border border-blue-200 group hover:shadow-lg transition-all duration-300">
                            <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-expand-arrows-alt text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Scalable</h3>
                            <p class="text-gray-600">Multi-tenant architecture supporting 50,000+ companies with isolated data and custom configurations.</p>
                        </div>

                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-xl border border-green-200 group hover:shadow-lg transition-all duration-300">
                            <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-shield-alt text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Secure</h3>
                            <p class="text-gray-600">SOC 2 Type II certified with end-to-end encryption, GDPR compliance, and enterprise-grade security.</p>
                        </div>

                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 p-6 rounded-xl border border-purple-200 group hover:shadow-lg transition-all duration-300">
                            <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-robot text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">AI-Powered</h3>
                            <p class="text-gray-600">Intelligent automation, predictive analytics, and machine learning for smarter HR decisions.</p>
                        </div>
                    </div>
                </section>

                <!-- Setup & Installation Section -->
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
php artisan db:seed --class=CompanySeeder</code></pre>
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
                                <h4 class="font-semibold text-gray-800 mb-2">AWS/Azure Deployment</h4>
                                <pre class="bg-gray-900 text-green-400 p-3 rounded-lg text-sm overflow-x-auto"><code>./deploy.sh production
php artisan queue:work</code></pre>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Core Features Section -->
                <section id="features" class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-star text-purple-500 mr-3"></i>
                        Core Features
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Employee Management -->
                        <div class="bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg transition-all duration-300 group">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-users text-white"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900">Employee Management</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Complete employee lifecycle management from hire to retire.</p>
                            <div class="space-y-2">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Employee profiles and database
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Onboarding workflows and templates
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Document management and storage
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Organizational structure management
                                </div>
                            </div>
                        </div>

                        <!-- Attendance System -->
                        <div class="bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg transition-all duration-300 group">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-clock text-white"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900">Attendance Tracking</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Multiple attendance tracking methods with intelligent automation.</p>
                            <div class="space-y-2">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Biometric integration (fingerprint, face)
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    GPS-based location tracking
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Manual clock-in/out with approval
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Shift management and scheduling
                                </div>
                            </div>
                        </div>

                        <!-- Payroll Management -->
                        <div class="bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg transition-all duration-300 group">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-yellow-500 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-dollar-sign text-white"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900">Payroll & Benefits</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Automated payroll processing with compliance and reporting.</p>
                            <div class="space-y-2">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Automated salary calculations
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Tax management and compliance
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Benefits administration
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Payslip generation and distribution
                                </div>
                            </div>
                        </div>

                        <!-- Performance Management -->
                        <div class="bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg transition-all duration-300 group">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-purple-500 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-chart-line text-white"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900">Performance Reviews</h3>
                            </div>
                            <p class="text-gray-600 mb-4">360-degree performance management with goal tracking.</p>
                            <div class="space-y-2">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    KPI tracking and monitoring
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Review cycles and templates
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Goal setting and achievement
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    360-degree feedback system
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Subscription & Billing Section -->
                <section id="subscription" class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-credit-card text-yellow-500 mr-3"></i>
                        Subscription & Billing
                    </h2>

                    <div class="bg-white rounded-xl border border-gray-200 p-6 mb-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Subscription Plans</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="border border-gray-200 rounded-lg p-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Free Trial</h4>
                                <p class="text-2xl font-bold text-gray-900 mb-2">$0</p>
                                <p class="text-sm text-gray-600">30 days, up to 50 employees</p>
                            </div>
                            <div class="border border-blue-200 rounded-lg p-4 bg-blue-50">
                                <h4 class="font-semibold text-gray-900 mb-2">Professional</h4>
                                <p class="text-2xl font-bold text-blue-600 mb-2">$15/user</p>
                                <p class="text-sm text-gray-600">Monthly billing, unlimited employees</p>
                            </div>
                            <div class="border border-purple-200 rounded-lg p-4 bg-purple-50">
                                <h4 class="font-semibold text-gray-900 mb-2">Enterprise</h4>
                                <p class="text-2xl font-bold text-purple-600 mb-2">Custom</p>
                                <p class="text-sm text-gray-600">Volume pricing, dedicated support</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-yellow-50 to-orange-50 rounded-xl border border-yellow-200 p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Payment Integration</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2">Supported Gateways</h4>
                                <ul class="space-y-2 text-gray-600">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Razorpay (India)</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Stripe (Global)</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>PayPal (International)</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Bank transfers</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2">Features</h4>
                                <ul class="space-y-2 text-gray-600">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Auto-renewal subscriptions</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Prorated billing</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Invoice generation</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Usage analytics</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- User Roles & Access Section -->
                <section id="roles" class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-users-cog text-indigo-500 mr-3"></i>
                        User Roles & Access Control
                    </h2>

                    <div class="space-y-6">
                        <!-- SuperAdmin -->
                        <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl border border-purple-200 p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-crown text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-900">SuperAdmin</h3>
                                    <p class="text-purple-600 text-sm">Global System Control</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-2">Permissions</h4>
                                    <ul class="space-y-1 text-sm text-gray-600">
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Manage all companies</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Subscription management</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>System analytics</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Global audit logs</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-2">Access Areas</h4>
                                    <ul class="space-y-1 text-sm text-gray-600">
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Company management</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Billing & payments</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>System configuration</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Support tools</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Tenant Admin -->
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border border-blue-200 p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-user-tie text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-900">Tenant Admin</h3>
                                    <p class="text-blue-600 text-sm">Company-Level Control</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-2">Permissions</h4>
                                    <ul class="space-y-1 text-sm text-gray-600">
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Employee management</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Payroll processing</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Company settings</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Reports and analytics</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-2">Access Areas</h4>
                                    <ul class="space-y-1 text-sm text-gray-600">
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>HR dashboard</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Employee records</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Leave management</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Performance reviews</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Employee -->
                        <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border border-green-200 p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-user text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-900">Employee</h3>
                                    <p class="text-green-600 text-sm">Self-Service Portal</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-2">Permissions</h4>
                                    <ul class="space-y-1 text-sm text-gray-600">
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>View personal data</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Submit leave requests</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Clock in/out</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>View payslips</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-2">Access Areas</h4>
                                    <ul class="space-y-1 text-sm text-gray-600">
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Personal dashboard</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Onboarding tasks</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Attendance history</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Performance data</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Security Measures Section -->
                <section id="security" class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-shield-alt text-red-500 mr-3"></i>
                        Security Measures
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white rounded-xl border border-gray-200 p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                                <i class="fas fa-lock text-red-500 mr-2"></i>
                                Data Protection
                            </h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <div>
                                        <strong>AES-256 Encryption:</strong> All data encrypted at rest and in transit
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <div>
                                        <strong>Database Security:</strong> Encrypted backups with point-in-time recovery
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <div>
                                        <strong>Data Isolation:</strong> Complete tenant data separation
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="bg-white rounded-xl border border-gray-200 p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                                <i class="fas fa-user-shield text-red-500 mr-2"></i>
                                Access Control
                            </h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <div>
                                        <strong>Two-Factor Authentication:</strong> TOTP and SMS verification
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <div>
                                        <strong>Role-Based Access:</strong> Granular permission system
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <div>
                                        <strong>Session Management:</strong> Automatic timeout and secure sessions
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="bg-white rounded-xl border border-gray-200 p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                                <i class="fas fa-clipboard-list text-red-500 mr-2"></i>
                                Compliance & Auditing
                            </h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <div>
                                        <strong>Audit Logs:</strong> Complete activity tracking and logging
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <div>
                                        <strong>GDPR Compliance:</strong> Data privacy and right to be forgotten
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <div>
                                        <strong>SOC 2 Type II:</strong> Annual security audits and certification
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="bg-white rounded-xl border border-gray-200 p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                                <i class="fas fa-bug text-red-500 mr-2"></i>
                                Application Security
                            </h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <div>
                                        <strong>CSRF Protection:</strong> Cross-site request forgery prevention
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <div>
                                        <strong>XSS Prevention:</strong> Input sanitization and output encoding
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mr-3 mt-1"></i>
                                    <div>
                                        <strong>SQL Injection:</strong> Parameterized queries and ORM protection
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- API Endpoints Section -->
                <section id="api" class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-code text-cyan-500 mr-3"></i>
                        API Endpoints
                        <span class="ml-3 text-sm bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full">Coming Soon</span>
                    </h2>

                    <div class="bg-gradient-to-r from-cyan-50 to-blue-50 rounded-xl border border-cyan-200 p-6 mb-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">RESTful API Architecture</h3>
                        <p class="text-gray-600 mb-4">
                            Our comprehensive API will provide programmatic access to all HRMS features, enabling seamless integrations and custom applications.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-3">Planned Endpoints</h4>
                                <div class="space-y-2 text-sm">
                                    <div class="flex items-center">
                                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-mono mr-2">GET</span>
                                        <code class="text-gray-700">/api/v1/employees</code>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs font-mono mr-2">POST</span>
                                        <code class="text-gray-700">/api/v1/attendance</code>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-mono mr-2">GET</span>
                                        <code class="text-gray-700">/api/v1/payroll</code>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs font-mono mr-2">PUT</span>
                                        <code class="text-gray-700">/api/v1/leaves/{id}</code>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-3">Features</h4>
                                <ul class="space-y-2 text-gray-600 text-sm">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>OAuth 2.0 authentication</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Rate limiting and throttling</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Comprehensive documentation</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>SDK for popular languages</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-900 rounded-xl p-6">
                        <h4 class="text-lg font-semibold text-white mb-4">Example API Usage</h4>
                        <pre class="text-green-400 text-sm overflow-x-auto"><code>// Get employee list
curl -X GET "https://api.savantx-hrms.com/v1/employees" \
     -H "Authorization: Bearer YOUR_API_TOKEN" \
     -H "Content-Type: application/json"

// Response
{
  "data": [
    {
      "id": 1,
      "name": "John Doe",
      "email": "john@company.com",
      "department": "Engineering",
      "status": "active"
    }
  ],
  "meta": {
    "total": 150,
    "page": 1,
    "per_page": 20
  }
}</code></pre>
                    </div>
                </section>

                <!-- Roadmap Section -->
                <section id="roadmap" class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-road text-pink-500 mr-3"></i>
                        Development Roadmap
                    </h2>

                    <div class="space-y-8">
                        <!-- Q1 2024 -->
                        <div class="flex items-start space-x-4">
                            <div class="w-4 h-4 bg-blue-500 rounded-full mt-2"></div>
                            <div class="flex-1">
                                <div class="bg-white rounded-xl border border-gray-200 p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <h3 class="text-xl font-semibold text-gray-900">Q1 2024 - AI Integration</h3>
                                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">In Development</span>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-robot text-blue-500 mr-2"></i>GPT-4 powered HR chatbot</li>
                                            <li><i class="fas fa-brain text-blue-500 mr-2"></i>Intelligent resume screening</li>
                                        </ul>
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-chart-line text-blue-500 mr-2"></i>Predictive employee analytics</li>
                                            <li><i class="fas fa-cogs text-blue-500 mr-2"></i>Automated policy recommendations</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Q2 2024 -->
                        <div class="flex items-start space-x-4">
                            <div class="w-4 h-4 bg-green-500 rounded-full mt-2"></div>
                            <div class="flex-1">
                                <div class="bg-white rounded-xl border border-gray-200 p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <h3 class="text-xl font-semibold text-gray-900">Q2 2024 - Mobile Applications</h3>
                                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">Planned</span>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-mobile-alt text-green-500 mr-2"></i>Native iOS & Android apps</li>
                                            <li><i class="fas fa-wifi text-green-500 mr-2"></i>Offline capability</li>
                                        </ul>
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-bell text-green-500 mr-2"></i>Push notifications</li>
                                            <li><i class="fas fa-fingerprint text-green-500 mr-2"></i>Biometric authentication</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Q3 2024 -->
                        <div class="flex items-start space-x-4">
                            <div class="w-4 h-4 bg-purple-500 rounded-full mt-2"></div>
                            <div class="flex-1">
                                <div class="bg-white rounded-xl border border-gray-200 p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <h3 class="text-xl font-semibold text-gray-900">Q3 2024 - API Marketplace</h3>
                                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-semibold">Planned</span>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-plug text-purple-500 mr-2"></i>Public API platform</li>
                                            <li><i class="fas fa-puzzle-piece text-purple-500 mr-2"></i>Third-party integrations</li>
                                        </ul>
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-code text-purple-500 mr-2"></i>Custom app development</li>
                                            <li><i class="fas fa-money-bill text-purple-500 mr-2"></i>Revenue sharing program</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- FAQ Section -->
                <section id="faq" class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-question-circle text-orange-500 mr-3"></i>
                        Frequently Asked Questions
                    </h2>

                    <div class="space-y-4">
                        <!-- FAQ Item 1 -->
                        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                            <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ('faq1')">
                                <span class="font-semibold text-gray-900">How do I set up my company in the HRMS system?</span>
                                <i class="fas fa-chevron-down text-gray-400 transform transition-transform duration-200" id="faq1-icon"></i>
                            </button>
                            <div class="hidden px-6 pb-4" id="faq1-content">
                                <p class="text-gray-600">
                                    After registering, you'll be guided through a setup wizard that includes company information,
                                    departments, designations, and initial user accounts. The process typically takes 10-15 minutes.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                            <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ('faq2')">
                                <span class="font-semibold text-gray-900">Can employees access the system on their mobile devices?</span>
                                <i class="fas fa-chevron-down text-gray-400 transform transition-transform duration-200" id="faq2-icon"></i>
                            </button>
                            <div class="hidden px-6 pb-4" id="faq2-content">
                                <p class="text-gray-600">
                                    Yes! Our responsive web application works perfectly on mobile devices. Native mobile apps
                                    for iOS and Android are planned for Q2 2024 with offline capabilities and push notifications.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                            <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ('faq3')">
                                <span class="font-semibold text-gray-900">How secure is our company data?</span>
                                <i class="fas fa-chevron-down text-gray-400 transform transition-transform duration-200" id="faq3-icon"></i>
                            </button>
                            <div class="hidden px-6 pb-4" id="faq3-content">
                                <p class="text-gray-600">
                                    We use enterprise-grade security with AES-256 encryption, SOC 2 Type II certification,
                                    and complete data isolation between tenants. Your data is protected with the same security
                                    standards used by Fortune 500 companies.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                            <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ('faq4')">
                                <span class="font-semibold text-gray-900">What integrations are available?</span>
                                <i class="fas fa-chevron-down text-gray-400 transform transition-transform duration-200" id="faq4-icon"></i>
                            </button>
                            <div class="hidden px-6 pb-4" id="faq4-content">
                                <p class="text-gray-600">
                                    Currently, we support payroll integrations with major providers and biometric device connectivity.
                                    Our API marketplace launching in Q3 2024 will provide 50+ integrations including Slack, Microsoft Teams,
                                    Salesforce, and popular accounting software.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                            <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ('faq5')">
                                <span class="font-semibold text-gray-900">Can I customize the system for my industry?</span>
                                <i class="fas fa-chevron-down text-gray-400 transform transition-transform duration-200" id="faq5-icon"></i>
                            </button>
                            <div class="hidden px-6 pb-4" id="faq5-content">
                                <p class="text-gray-600">
                                    Absolutely! Our Enterprise plan includes custom workflows, industry-specific compliance modules,
                                    white-label options, and dedicated support for customization. We serve healthcare, finance,
                                    manufacturing, and technology sectors with specialized configurations.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                            <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ('faq6')">
                                <span class="font-semibold text-gray-900">What support options are available?</span>
                                <i class="fas fa-chevron-down text-gray-400 transform transition-transform duration-200" id="faq6-icon"></i>
                            </button>
                            <div class="hidden px-6 pb-4" id="faq6-content">
                                <p class="text-gray-600">
                                    We provide 24/7 support through multiple channels: AI-powered chatbot for instant help,
                                    email support with 4-hour response time, and dedicated account managers for Enterprise clients.
                                    Our knowledge base includes video tutorials and step-by-step guides.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Call to Action -->
                <section class="text-center py-12" data-aos="fade-up">
                    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl p-8 text-white">
                        <h2 class="text-3xl font-bold mb-4">Ready to Get Started?</h2>
                        <p class="text-xl text-blue-100 mb-6">
                            Join thousands of companies already transforming their HR operations
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('register') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                                <i class="fas fa-rocket mr-2"></i>Start Free Trial
                            </a>
                            <a href="{{ route('login') }}" class="bg-blue-500 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-400 transition-colors">
                                <i class="fas fa-sign-in-alt mr-2"></i>Login to Dashboard
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- AOS Script -->
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
        window.addEventListener('scroll', function() {
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
