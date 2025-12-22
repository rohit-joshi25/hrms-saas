<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School ERP Presentation - Smart School System</title>

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
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.8s ease-out forwards',
                        'slide-up': 'slideUp 0.8s ease-out forwards',
                        'slide-left': 'slideLeft 0.8s ease-out forwards',
                        'scale-in': 'scaleIn 0.6s ease-out forwards',
                        'bounce-in': 'bounceIn 0.8s ease-out forwards',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        slideLeft: {
                            '0%': { opacity: '0', transform: 'translateX(30px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' }
                        },
                        scaleIn: {
                            '0%': { opacity: '0', transform: 'scale(0.9)' },
                            '100%': { opacity: '1', transform: 'scale(1)' }
                        },
                        bounceIn: {
                            '0%': { opacity: '0', transform: 'scale(0.3)' },
                            '50%': { opacity: '1', transform: 'scale(1.05)' },
                            '70%': { transform: 'scale(0.9)' },
                            '100%': { opacity: '1', transform: 'scale(1)' }
                        }
                    }
                }
            }
        }
    </script>

    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body
    class="font-sans antialiased bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 text-white overflow-x-hidden">

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-black/20 backdrop-blur-md border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-3">
                    <div
                        class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white text-sm"></i>
                    </div>
                    <span class="text-xl font-bold">Smart School ERP</span>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#overview" class="text-gray-300 hover:text-white transition-colors">Overview</a>
                    <a href="#features" class="text-gray-300 hover:text-white transition-colors">Features</a>
                    <a href="#subscription" class="text-gray-300 hover:text-white transition-colors">Pricing</a>
                    <a href="#testimonials" class="text-gray-300 hover:text-white transition-colors">Testimonials</a>
                    <a href="#roadmap" class="text-gray-300 hover:text-white transition-colors">Roadmap</a>
                    <a href="{{ route('project-docs') }}"
                        class="text-gray-300 hover:text-white transition-colors">Project Documentation</a>
                    <a href="{{ route('login') }}"
                        class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition-colors">Login</a>
                </div>
                <button class="md:hidden text-white">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center justify-center relative overflow-hidden pt-16">
        <!-- Background Animation -->
        <div class="absolute inset-0 opacity-20">
            <div
                class="absolute top-20 left-10 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse">
            </div>
            <div class="absolute top-40 right-10 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse"
                style="animation-delay: 2s;"></div>
            <div class="absolute bottom-20 left-1/2 w-72 h-72 bg-pink-500 rounded-full mix-blend-multiply filter blur-xl animate-pulse"
                style="animation-delay: 4s;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="opacity-0 animate-fade-in" style="animation-delay: 0.2s;">
                <h1
                    class="text-5xl md:text-7xl font-extrabold mb-6 bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500 bg-clip-text text-transparent">
                    Smart School ERP: The Future of Campus Management
                </h1>
                <p class="text-2xl md:text-3xl font-light mb-8 text-gray-300">
                    Your Integrated Multi-Branch Campus Solution
                </p>
                <p class="text-lg md:text-xl mb-12 text-gray-400 max-w-3xl mx-auto">
                    Transforming educational institutions with a comprehensive, AI-powered ERP platform that unifies academic, administrative, and financial operations across multiple branches and academic sessions. Experience seamless management and data-driven insights.
                </p>
            </div>

            <div class="opacity-0 animate-slide-up" style="animation-delay: 0.8s;">
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#overview"
                        class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg text-lg font-semibold hover:from-blue-700 hover:to-purple-700 transform hover:scale-105 transition-all duration-200 shadow-lg">
                        <i class="fas fa-play mr-3"></i>
                        Explore Features
                    </a>
                    <a href="{{ route('login') }}"
                        class="inline-flex items-center px-8 py-4 bg-transparent border-2 border-white/30 rounded-lg text-lg font-semibold hover:bg-white/10 transition-all duration-200">
                        <i class="fas fa-rocket mr-3"></i>
                        Start Free Trial
                    </a>
                </div>
            </div>

            <!-- Stats -->
            <div class="mt-20 opacity-0 animate-bounce-in" style="animation-delay: 1.2s;">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-blue-400 mb-2">50,000+</div>
                        <div class="text-gray-400">Companies Worldwide</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-purple-400 mb-2">2M+</div>
                        <div class="text-gray-400">Employees Managed</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-pink-400 mb-2">99.99%</div>
                        <div class="text-gray-400">Uptime SLA</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-green-400 mb-2">85%</div>
                        <div class="text-gray-400">Cost Reduction</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Overview Section -->
    <section id="overview" class="py-20 bg-black/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                    <h2
                        class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                        Project Overview
                    </h2>
                    <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                        Understanding the vision behind Smart School ERP and our commitment to transforming education management
                    </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <div
                        class="bg-gradient-to-br from-blue-900/50 to-purple-900/50 p-8 rounded-2xl border border-white/10 backdrop-blur-sm">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-lightbulb text-white text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold">What is ERP?</h3>
                        </div>
                        <p class="text-gray-300 leading-relaxed">
                            Enterprise Resource Planning (ERP) in an educational context is a comprehensive system that
                            manages all aspects of a school's operations, from academic management and student information
                            to financial processes, human resources, and facilities. Smart School ERP integrates these diverse
                            functions into a single, cohesive, multi-tenant platform.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <div
                        class="bg-gradient-to-br from-purple-900/50 to-pink-900/50 p-8 rounded-2xl border border-white/10 backdrop-blur-sm">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-600 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-building text-white text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold">Why Smart School Technologies?</h3>
                        </div>
                        <p class="text-gray-300 leading-relaxed">
                            Smart School Technologies is dedicated to empowering educational institutions with cutting-edge
                            technology. Our ERP system is designed to automate routine tasks, provide actionable insights,
                            and foster a collaborative environment for administrators, teachers, students, and parents.
                            With multi-branch support and advanced AI features, we are revolutionizing campus management.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Mission & Vision -->
            <div class="mt-16" data-aos="fade-up">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div
                        class="bg-gradient-to-br from-indigo-900/50 to-blue-900/50 p-8 rounded-2xl border border-white/10 backdrop-blur-sm">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-target text-blue-400 text-2xl mr-4"></i>
                            <h4 class="text-xl font-bold">Our Mission</h4>
                        </div>
                        <p class="text-gray-300">
                            To democratize advanced education management technology and make intelligent campus operations accessible
                            to institutions of all sizes through our innovative SaaS platform, featuring multi-branch capabilities and AI integration.
                        </p>
                    </div>
                    <div
                        class="bg-gradient-to-br from-purple-900/50 to-indigo-900/50 p-8 rounded-2xl border border-white/10 backdrop-blur-sm">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-eye text-purple-400 text-2xl mr-4"></i>
                            <h4 class="text-xl font-bold">Our Vision</h4>
                        </div>
                        <p class="text-gray-300">
                            To become the world's leading ERP platform for educational institutions, transforming how schools
                            manage their most valuable assets - their students and staff - through continuous innovation and a focus on data-driven excellence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scope & Features Section -->
    <section id="features" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2
                    class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-green-400 to-blue-500 bg-clip-text text-transparent">
                    Comprehensive Feature Set
                </h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Empower your educational institution with a complete suite of modules for seamless management
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Student Management -->
                <div class="group" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="bg-gradient-to-br from-blue-900/30 to-indigo-900/30 p-6 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-blue-500/50 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-user-graduate text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Student & Admission Management</h3>
                        <p class="text-gray-400 mb-4">Comprehensive student lifecycle management from enrollment to alumni.</p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Customizable Admission Forms & Workflow</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Detailed Student Profiles & Health Records</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Digital ID Card Generation with QR/Barcode</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Academic Promotions & Alumni Tracking</li>
                        </ul>
                    </div>
                </div>

                <!-- Academic Management -->
                <div class="group" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="bg-gradient-to-br from-green-900/30 to-teal-900/30 p-6 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-green-500/50 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-green-500 to-teal-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-book-open text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Academic Management</h3>
                        <p class="text-gray-400 mb-4">Streamlined class, subject, and examination processes.</p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Multi-level Class, Section & Subject Management</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Dynamic Timetable & Homework Assignment</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Configurable Exam Schedules & Automated Marks Entry</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Centralized Study Materials & Resource Sharing</li>
                        </ul>
                    </div>
                </div>

                <!-- Fee & Financial Management -->
                <div class="group" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="bg-gradient-to-br from-yellow-900/30 to-orange-900/30 p-6 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-yellow-500/50 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-orange-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-wallet text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Fee & Financial Management</h3>
                        <p class="text-gray-400 mb-4">Automated fee collection, expense tracking, and robust reporting.</p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Flexible Fee Structures & Auto-allocations</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Integrated Online Payment Gateways (Stripe, Razorpay)</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Automated Invoicing, Receipts & Due Date Reminders</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Comprehensive Income, Expense & Payroll Management</li>
                        </ul>
                    </div>
                </div>

                <!-- Staff & Payroll Management -->
                <div class="group" data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="bg-gradient-to-br from-purple-900/30 to-pink-900/30 p-6 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-purple-500/50 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-chalkboard-teacher text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Staff & Payroll Management</h3>
                        <p class="text-gray-400 mb-4">Efficiently manage all school staff, their attendance, and salaries.</p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Centralized Staff Profiles & Role-based Access</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Integrated Teacher & Employee Attendance Tracking</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Customizable Salary Templates & Payslip Generation</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Automated Leave Management System</li>
                        </ul>
                    </div>
                </div>

                <!-- Transport Management -->
                <div class="group" data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="bg-gradient-to-br from-red-900/30 to-pink-900/30 p-6 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-red-500/50 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-red-500 to-pink-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-bus text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Transport Management</h3>
                        <p class="text-gray-400 mb-4">Optimize school transportation with route planning and vehicle tracking.</p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Comprehensive Vehicle & Driver Management</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Intelligent Route Planning & Stop Management</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Seamless Student Transport Allocation</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Automated Transport Fee Generation & Reporting</li>
                        </ul>
                    </div>
                </div>

                <!-- Hostel Management -->
                <div class="group" data-aos="fade-up" data-aos-delay="600">
                    <div
                        class="bg-gradient-to-br from-indigo-900/30 to-purple-900/30 p-6 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-indigo-500/50 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-hotel text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Hostel & Accommodation</h3>
                        <p class="text-gray-400 mb-4">Efficiently manage student housing and hostel facilities.</p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Multi-building Hostel & Room Configuration</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Efficient Student Room Allocation & Vacancy Tracking</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Automated Hostel Fee Generation & Billing</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Visitor & Mess Management</li>
                        </ul>
                    </div>
                </div>

                <!-- Inventory Management -->
                <div class="group" data-aos="fade-up" data-aos-delay="700">
                    <div
                        class="bg-gradient-to-br from-cyan-900/30 to-blue-900/30 p-6 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-cyan-500/50 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-warehouse text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Inventory & Asset Management</h3>
                        <p class="text-gray-400 mb-4">Track and manage school assets, supplies, and stock levels.</p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Centralized Item Categories, Suppliers & Stores</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Automated Stock In/Out & Low Stock Alerts</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Track School Assets & Maintenance Schedules</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Extensive Inventory Reports & Analytics</li>
                        </ul>
                    </div>
                </div>

                <!-- Communication & Collaboration -->
                <div class="group" data-aos="fade-up" data-aos-delay="800">
                    <div
                        class="bg-gradient-to-br from-emerald-900/30 to-green-900/30 p-6 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-emerald-500/50 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-emerald-500 to-green-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-comments text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Communication & Collaboration</h3>
                        <p class="text-gray-400 mb-4">Seamless communication channels for all stakeholders.</p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Customizable Global & School-specific Notices</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Secure Internal Messaging System for all Roles</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Seamless Email & SMS Communication Integration</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Enhanced Parent-Teacher Interaction & Feedback
                        </ul>
                    </div>
                </div>

                <!-- Data Security & Privacy -->
                <div class="group" data-aos="fade-up" data-aos-delay="900">
                    <div
                        class="bg-gradient-to-br from-orange-900/30 to-red-900/30 p-6 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-orange-500/50 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-lock text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Data Security & Privacy</h3>
                        <p class="text-gray-400 mb-4">Ensuring the highest standards of data protection and compliance.</p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Industry-standard AES-256 Encryption & Daily Backups</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Granular Role-based Access Control & Permissions</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Adherence to GDPR, CCPA, and Local Data Compliance</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Comprehensive Audit Trails & Secure Session Management</li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>

    <!-- Flexible Pricing Plans Section -->
    <section id="subscription" class="py-20 bg-black/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2
                    class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                    Flexible Pricing Plans
                </h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Choose the perfect plan for your educational institution with our scalable SaaS model
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Basic Plan -->
                <div class="group" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="bg-gradient-to-br from-gray-900/50 to-slate-900/50 p-8 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-gray-400/50 transition-all duration-300 h-full">
                        <div class="text-center">
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-gray-500 to-slate-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-lightbulb text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-2">Starter</h3>
                            <p class="text-gray-400 mb-4">Ideal for small schools</p>
                            <div class="text-4xl font-bold mb-6">
                                <span class="text-gray-400">$49</span><span class="text-lg text-gray-500">/month</span>
                            </div>
                            <ul class="text-left text-gray-400 space-y-2 mb-8">
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Up to 200 Students</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Core Academic Modules</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Basic Fees & Finance</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Email & Chat Support</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Single Branch</li>
                            </ul>
                            <button
                                class="w-full py-3 bg-gradient-to-r from-gray-600 to-slate-700 rounded-lg font-semibold hover:from-gray-700 hover:to-slate-800 transition-all duration-200">
                                Get Started
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Growth Plan -->
                <div class="group" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="bg-gradient-to-br from-blue-900/50 to-indigo-900/50 p-8 rounded-2xl border-2 border-blue-500/50 backdrop-blur-sm hover:border-blue-400/70 transition-all duration-300 h-full relative">
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                            <span
                                class="bg-gradient-to-r from-blue-500 to-purple-600 px-4 py-1 rounded-full text-sm font-semibold">Most
                                Popular</span>
                        </div>
                        <div class="text-center">
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-star text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-2">Growth</h3>
                            <p class="text-gray-400 mb-4">For expanding schools</p>
                            <div class="text-4xl font-bold mb-2">
                                <span class="text-blue-400">$149</span>
                                <span class="text-lg text-gray-500">/month</span>
                            </div>
                            <p class="text-sm text-gray-500 mb-6">Billed annually</p>
                            <ul class="text-left text-gray-400 space-y-2 mb-8">
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Up to 1000 Students</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Advanced Academic & Finance</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Transport & Hostel Management</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>24/7 Priority Support</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Multi-Branch Capable</li>
                            </ul>
                            <button
                                class="w-full py-3 bg-gradient-to-r from-blue-600 to-indigo-700 rounded-lg font-semibold hover:from-blue-700 hover:to-indigo-800 transition-all duration-200">
                                Choose Growth
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Enterprise Plan -->
                <div class="group" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="bg-gradient-to-br from-purple-900/50 to-pink-900/50 p-8 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-purple-500/50 transition-all duration-300 h-full">
                        <div class="text-center">
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-crown text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-2">Institution</h3>
                            <p class="text-gray-400 mb-4">For large institutions & universities</p>
                            <div class="text-4xl font-bold mb-6">
                                <span class="text-purple-400">Custom</span>
                            </div>
                            <ul class="text-left text-gray-400 space-y-2 mb-8">
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Unlimited Students & Branches</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Full ERP Suite & Custom Modules</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Dedicated Account Manager</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>On-premise Deployment Option</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>SLA & White-labeling</li>
                            </ul>
                            <button
                                class="w-full py-3 bg-gradient-to-r from-purple-600 to-pink-700 rounded-lg font-semibold hover:from-purple-700 hover:to-pink-800 transition-all duration-200">
                                Contact Sales
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment & Renewal Features -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6" data-aos="fade-up">
                <div
                    class="bg-gradient-to-br from-green-900/30 to-teal-900/30 p-6 rounded-xl border border-white/10 backdrop-blur-sm text-center">
                    <i class="fas fa-sync-alt text-green-400 text-2xl mb-3"></i>
                    <h4 class="font-semibold mb-2">Flexible Billing</h4>
                    <p class="text-sm text-gray-400">Annual, Quarterly, or Monthly payment options</p>
                </div>
                <div
                    class="bg-gradient-to-br from-blue-900/30 to-indigo-900/30 p-6 rounded-xl border border-white/10 backdrop-blur-sm text-center">
                    <i class="fas fa-credit-card text-blue-400 text-2xl mb-3"></i>
                    <h4 class="font-semibold mb-2">Multiple Payment Gateways</h4>
                    <p class="text-sm text-gray-400">Stripe, Razorpay, PayPal, and local integrations</p>
                </div>
                <div
                    class="bg-gradient-to-br from-yellow-900/30 to-orange-900/30 p-6 rounded-xl border border-white/10 backdrop-blur-sm text-center">
                    <i class="fas fa-shield-alt text-yellow-400 text-2xl mb-3"></i>
                    <h4 class="font-semibold mb-2">Secure Transactions</h4>
                    <p class="text-sm text-gray-400">PCI DSS compliant, ensuring all payments are secure</p>
                </div>
                <div
                    class="bg-gradient-to-br from-purple-900/30 to-pink-900/30 p-6 rounded-xl border border-white/10 backdrop-blur-sm text-center">
                    <i class="fas fa-chart-pie text-purple-400 text-2xl mb-3"></i>
                    <h4 class="font-semibold mb-2">Detailed Billing Reports</h4>
                    <p class="text-sm text-gray-400">Transparent and comprehensive financial reporting</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Marketing Strategy Section -->
    <section id="marketing" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                    <h2
                        class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-pink-400 to-red-500 bg-clip-text text-transparent">
                        Our Growth Strategy
                    </h2>
                    <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                        Our comprehensive approach to digitizing education and expanding our global footprint
                    </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div data-aos="fade-right">
                    <h3 class="text-3xl font-bold mb-6">Sustainable Growth Model</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-8 h-8 bg-gradient-to-r from-pink-500 to-red-600 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-rocket text-white text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-2">Freemium & Tiered Subscriptions</h4>
                                <p class="text-gray-400">Offer flexible plans from free trials to enterprise-grade solutions.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-8 h-8 bg-gradient-to-r from-red-500 to-pink-600 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-globe text-white text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-2">Global Market Penetration</h4>
                                <p class="text-gray-400">Strategic expansion into emerging and established educational markets.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-8 h-8 bg-gradient-to-r from-pink-500 to-purple-600 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-handshake text-white text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-2">Partnerships & Alliances</h4>
                                <p class="text-gray-400">Collaborate with ed-tech providers and government initiatives.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <div
                        class="bg-gradient-to-br from-pink-900/30 to-red-900/30 p-8 rounded-2xl border border-white/10 backdrop-blur-sm">
                        <h4 class="text-2xl font-bold mb-6">Impact & Reach Metrics</h4>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-pink-400 mb-2">10,000+</div>
                                <div class="text-sm text-gray-400">Target Institutions Year 3</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-red-400 mb-2">5M+</div>
                                <div class="text-sm text-gray-400">Students Impacted</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-orange-400 mb-2">99%</div>
                                <div class="text-gray-400">Customer Satisfaction</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-yellow-400 mb-2">30+</div>
                                <div class="text-gray-400">Countries Served</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Multi-tenant & Security -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8" data-aos="fade-up">
                <div
                    class="bg-gradient-to-br from-blue-900/30 to-indigo-900/30 p-6 rounded-xl border border-white/10 backdrop-blur-sm">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-server text-white text-xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Multi-Tenant SaaS Architecture</h4>
                    <p class="text-gray-400">Scalable cloud infrastructure supporting thousands of schools with complete data
                        isolation and custom configurations.</p>
                </div>
                <div
                    class="bg-gradient-to-br from-green-900/30 to-teal-900/30 p-6 rounded-xl border border-white/10 backdrop-blur-sm">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-green-500 to-teal-600 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-lock text-white text-xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Robust Data Security</h4>
                    <p class="text-gray-400">AES-256 encryption, daily backups, role-based access control, and advanced
                        threat protection to safeguard sensitive school data.</p>
                </div>
                <div
                    class="bg-gradient-to-br from-purple-900/30 to-pink-900/30 p-6 rounded-xl border border-white/10 backdrop-blur-sm">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-600 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-globe text-white text-xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Global Compliance & Localization</h4>
                    <p class="text-gray-400">Adherence to international data privacy regulations (GDPR, CCPA) and support for
                        multi-language interfaces and local currency options.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Future Roadmap Section -->
    <section id="roadmap" class="py-20 bg-black/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                    <h2
                        class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                        Future Roadmap
                    </h2>
                    <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                        Our vision for advancing education technology and upcoming innovations for Smart School ERP
                    </p>
            </div>

            <div class="relative">
                <!-- Timeline line -->
                <div
                    class="absolute left-1/2 transform -translate-x-0.5 w-1 h-full bg-gradient-to-b from-cyan-500 to-blue-500 hidden lg:block">
                </div>

                <div class="space-y-12">
                    <!-- Q1 2024 - AI Tutor & Analytics (Implemented) -->
                    <div class="flex flex-col lg:flex-row items-center" data-aos="fade-right">
                        <div class="lg:w-1/2 lg:pr-12">
                            <div
                                class="bg-gradient-to-br from-cyan-900/30 to-blue-900/30 p-6 rounded-xl border border-white/10 backdrop-blur-sm">
                                <div class="flex items-center mb-4">
                                    <div
                                        class="w-10 h-10 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fas fa-robot text-white"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold">Q1 2024 - AI Tutor & Smart Analytics</h3>
                                        <p class="text-emerald-400 text-sm">Implemented</p>
                                    </div>
                                </div>
                                <ul class="text-gray-400 space-y-2">
                                    <li><i class="fas fa-check text-emerald-400 mr-2"></i>AI-powered Doubt Solving Bot</li>
                                    <li><i class="fas fa-check text-emerald-400 mr-2"></i>Adaptive Learning Paths & Recommendations</li>
                                    <li><i class="fas fa-check text-emerald-400 mr-2"></i>Predictive Student Performance Analytics</li>
                                    <li><i class="fas fa-check text-emerald-400 mr-2"></i>Automated Timetable Generation (AI-optimized)</li>
                                </ul>
                            </div>
                        </div>
                        <div
                            class="hidden lg:flex w-8 h-8 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full items-center justify-center relative z-10 my-4 lg:my-0">
                            <div class="w-4 h-4 bg-white rounded-full"></div>
                        </div>
                        <div class="lg:w-1/2 lg:pl-12 mt-6 lg:mt-0"></div>
                    </div>

                    <!-- Q2 2024 - Mobile Applications (Implemented) -->
                    <div class="flex flex-col lg:flex-row items-center" data-aos="fade-left">
                        <div class="lg:w-1/2 lg:pr-12 order-2 lg:order-1 mt-6 lg:mt-0"></div>
                        <div
                            class="hidden lg:flex w-8 h-8 bg-gradient-to-r from-green-500 to-teal-600 rounded-full items-center justify-center relative z-10 my-4 lg:my-0 order-1 lg:order-2">
                            <div class="w-4 h-4 bg-white rounded-full"></div>
                        </div>
                        <div class="lg:w-1/2 lg:pl-12 order-1 lg:order-3">
                            <div
                                class="bg-gradient-to-br from-green-900/30 to-teal-900/30 p-6 rounded-xl border border-white/10 backdrop-blur-sm">
                                <div class="flex items-center mb-4">
                                    <div
                                        class="w-10 h-10 bg-gradient-to-r from-green-500 to-teal-600 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fas fa-mobile-alt text-white"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold">Q2 2024 - Native Mobile Applications</h3>
                                        <p class="text-emerald-400 text-sm">Implemented</p>
                                    </div>
                                </div>
                                <ul class="text-gray-400 space-y-2">
                                    <li><i class="fas fa-check text-emerald-400 mr-2"></i>Dedicated iOS & Android Apps for Parents & Teachers</li>
                                    <li><i class="fas fa-check text-emerald-400 mr-2"></i>Offline Access & Real-time Notifications</li>
                                    <li><i class="fas fa-check text-emerald-400 mr-2"></i>Live Bus Tracking & Attendance Marking</li>
                                    <li><i class="fas fa-check text-emerald-400 mr-2"></i>Biometric/Face Recognition for Attendance</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Q3 2024 - Learning Management System (LMS) (Implemented) -->
                    <div class="flex flex-col lg:flex-row items-center" data-aos="fade-right">
                        <div class="lg:w-1/2 lg:pr-12">
                            <div
                                class="bg-gradient-to-br from-purple-900/30 to-pink-900/30 p-6 rounded-xl border border-white/10 backdrop-blur-sm">
                                <div class="flex items-center mb-4">
                                    <div
                                        class="w-10 h-10 bg-gradient-to-r from-purple-500 to-pink-600 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fas fa-graduation-cap text-white"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold">Q3 2024 - Integrated LMS & E-learning</h3>
                                        <p class="text-emerald-400 text-sm">Implemented</p>
                                    </div>
                                </div>
                                <ul class="text-gray-400 space-y-2">
                                    <li><i class="fas fa-check text-emerald-400 mr-2"></i>Seamless Integration with Popular LMS Platforms</li>
                                    <li><i class="fas fa-check text-emerald-400 mr-2"></i>Online Quiz & Assignment Modules</li>
                                    <li><i class="fas fa-check text-emerald-400 mr-2"></i>Virtual Classroom & Live Class Hosting</li>
                                    <li><i class="fas fa-check text-emerald-400 mr-2"></i>Digital Library & Resource Sharing</li>
                                </ul>
                            </div>
                        </div>
                        <div
                            class="hidden lg:flex w-8 h-8 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full items-center justify-center relative z-10 my-4 lg:my-0">
                            <div class="w-4 h-4 bg-white rounded-full"></div>
                        </div>
                        <div class="lg:w-1/2 lg:pl-12 mt-6 lg:mt-0"></div>
                    </div>

                    <!-- Q4 2024 - Advanced Security & Compliance (Implemented) -->
                    <div class="flex flex-col lg:flex-row items-center" data-aos="fade-left">
                        <div class="lg:w-1/2 lg:pr-12 order-2 lg:order-1 mt-6 lg:mt-0"></div>
                        <div
                            class="hidden lg:flex w-8 h-8 bg-gradient-to-r from-orange-500 to-red-600 rounded-full items-center justify-center relative z-10 my-4 lg:my-0 order-1 lg:order-2">
                            <div class="w-4 h-4 bg-white rounded-full"></div>
                        </div>
                        <div class="lg:w-1/2 lg:pl-12 order-1 lg:order-3">
                            <div
                                class="bg-gradient-to-br from-orange-900/30 to-red-900/30 p-6 rounded-xl border border-white/10 backdrop-blur-sm">
                                <div class="flex items-center mb-4">
                                    <div
                                        class="w-10 h-10 bg-gradient-to-r from-orange-500 to-red-600 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fas fa-shield-alt text-white"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold">Q4 2024 - Enhanced Security & Compliance</h3>
                                        <p class="text-emerald-400 text-sm">Implemented</p>
                                    </div>
                                </div>
                                <ul class="text-gray-400 space-y-2">
                                    <li><i class="fas fa-check text-emerald-400 mr-2"></i>Advanced Threat Detection & Prevention</li>
                                    <li><i class="fas fa-check text-emerald-400 mr-2"></i>Continuous Compliance Audits (GDPR, CCPA, FERPA)</li>
                                    <li><i class="fas fa-check text-emerald-400 mr-2"></i>Customizable Data Retention Policies</li>
                                    <li><i class="fas fa-check text-emerald-400 mr-2"></i>Secure API Access & Integration Controls</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div data-aos="fade-up">
                <h2
                    class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500 bg-clip-text text-transparent">
                    Ready to Digitize Your Campus?
                </h2>
                <p class="text-xl text-gray-400 mb-8 max-w-2xl mx-auto">
                    Join thousands of educational institutions already using Smart School ERP to streamline operations
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('register') }}"
                        class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg text-lg font-semibold hover:from-blue-700 hover:to-purple-700 transform hover:scale-105 transition-all duration-200 shadow-lg">
                        <i class="fas fa-rocket mr-3"></i>
                        Start Free Trial
                    </a>
                    <a href="{{ route('login') }}"
                        class="inline-flex items-center px-8 py-4 bg-transparent border-2 border-white/30 rounded-lg text-lg font-semibold hover:bg-white/10 transition-all duration-200">
                        <i class="fas fa-sign-in-alt mr-3"></i>
                        Login to Dashboard
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div
                            class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-graduation-cap text-white text-sm"></i>
                        </div>
                        <span class="text-xl font-bold">Smart School ERP</span>
                    </div>
                    <p class="text-gray-400 text-sm">
                        Integrated campus management system for modern educational institutions.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Product</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#features" class="hover:text-white transition-colors">Modules</a></li>
                        <li><a href="#subscription" class="hover:text-white transition-colors">Pricing</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Integrations</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Security</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Company</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Support</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Help Center</a></li>
                        <li><a href="{{ route('project-docs') }}" class="hover:text-white transition-colors">Documentation</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">API Reference</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Status</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-white/10 mt-8 pt-8 text-center text-gray-400 text-sm">
                <p>&copy; 2024 Smart School Technologies. All rights reserved. | Built with Laravel & TailwindCSS</p>
            </div>
        </div>
    </footer>

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

        // Progressive reveal for feature lists
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const items = entry.target.querySelectorAll('li');
                    items.forEach((item, index) => {
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'translateX(0)';
                        }, index * 100);
                    });
                }
            });
        }, observerOptions);

        // Observe feature lists
        document.querySelectorAll('.group ul').forEach(ul => {
            ul.querySelectorAll('li').forEach(li => {
                li.style.opacity = '0';
                li.style.transform = 'translateX(-20px)';
                li.style.transition = 'all 0.3s ease';
            });
            observer.observe(ul);
        });
    </script>
</body>

</html>