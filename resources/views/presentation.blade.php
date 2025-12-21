<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HRMS SaaS Presentation - Smart School Technologies</title>

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
                        <i class="fas fa-users text-white text-sm"></i>
                    </div>
                    <span class="text-xl font-bold">Smart School HRMS</span>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#overview" class="text-gray-300 hover:text-white transition-colors">Overview</a>
                    <a href="#features" class="text-gray-300 hover:text-white transition-colors">Features</a>
                    <a href="#subscription" class="text-gray-300 hover:text-white transition-colors">Pricing</a>
                    <a href="#success" class="text-gray-300 hover:text-white transition-colors">Success Stories</a>
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
                    HRMS SaaS
                </h1>
                <p class="text-2xl md:text-3xl font-light mb-8 text-gray-300">
                    Next Generation Workforce Management
                </p>
                <p class="text-lg md:text-xl mb-12 text-gray-400 max-w-3xl mx-auto">
                    Revolutionizing human resource management with AI-powered automation,
                    intelligent analytics, and seamless multi-tenant architecture.
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

    <!-- Industry Recognition Section -->
    <section class="py-20 bg-gradient-to-r from-indigo-900/30 to-purple-900/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2
                    class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                    Industry Recognition
                </h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Trusted by industry leaders and recognized by top technology organizations worldwide
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <!-- Awards -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-orange-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-trophy text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Best HR Tech 2024</h3>
                    <p class="text-gray-400 text-sm">HR Technology Awards</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-star text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">4.9/5 Rating</h3>
                    <p class="text-gray-400 text-sm">G2 & Capterra Reviews</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-green-500 to-teal-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">SOC 2 Certified</h3>
                    <p class="text-gray-400 text-sm">Enterprise Security</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-rocket text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Fastest Growing</h3>
                    <p class="text-gray-400 text-sm">SaaS HR Platform</p>
                </div>
            </div>

            <!-- Client Logos -->
            <div class="text-center mb-8" data-aos="fade-up">
                <p class="text-gray-400 mb-8">Trusted by leading organizations worldwide</p>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center opacity-60">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-gray-500">Microsoft</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-gray-500">Google</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-gray-500">Amazon</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-gray-500">Tesla</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-gray-500">Netflix</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-gray-500">Spotify</div>
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
                    Understanding the vision behind Smart School HRMS and why we're building the future of workforce
                    management
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
                            <h3 class="text-2xl font-bold">What is HRMS?</h3>
                        </div>
                        <p class="text-gray-300 leading-relaxed">
                            Human Resource Management System (HRMS) is a comprehensive software solution that
                            streamlines
                            HR processes, from recruitment and onboarding to performance management and payroll. Our
                            SaaS
                            platform takes this concept to the next level with AI integration and multi-tenant
                            architecture.
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
                            Smart School Technologies is pioneering the future of HR technology by combining artificial
                            intelligence,
                            machine learning, and cloud-native architecture. We believe in automating repetitive tasks,
                            providing intelligent insights, and enabling HR professionals to focus on strategic
                            initiatives.
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
                            To democratize advanced HR technology and make intelligent workforce management accessible
                            to organizations of all sizes through our innovative SaaS platform.
                        </p>
                    </div>
                    <div
                        class="bg-gradient-to-br from-purple-900/50 to-indigo-900/50 p-8 rounded-2xl border border-white/10 backdrop-blur-sm">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-eye text-purple-400 text-2xl mr-4"></i>
                            <h4 class="text-xl font-bold">Our Vision</h4>
                        </div>
                        <p class="text-gray-300">
                            To become the world's leading AI-powered HRMS platform, transforming how organizations
                            manage their most valuable asset - their people.
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
                    Everything you need to manage your workforce efficiently, powered by cutting-edge AI technology
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Employee Management -->
                <div class="group" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="bg-gradient-to-br from-blue-900/30 to-indigo-900/30 p-6 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-blue-500/50 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-users text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Employee Management</h3>
                        <p class="text-gray-400 mb-4">Complete employee lifecycle management from onboarding to
                            offboarding</p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Employee Database</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Onboarding Workflows</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Document Management</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Role-based Access</li>
                        </ul>
                    </div>
                </div>

                <!-- Attendance & Leave -->
                <div class="group" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="bg-gradient-to-br from-green-900/30 to-teal-900/30 p-6 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-green-500/50 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-green-500 to-teal-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-clock text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Attendance & Leave</h3>
                        <p class="text-gray-400 mb-4">Smart time tracking and automated leave management system</p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Biometric Integration</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Shift Management</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Leave Policies</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Overtime Calculation</li>
                        </ul>
                    </div>
                </div>

                <!-- Payroll -->
                <div class="group" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="bg-gradient-to-br from-yellow-900/30 to-orange-900/30 p-6 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-yellow-500/50 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-orange-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-dollar-sign text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Payroll Management</h3>
                        <p class="text-gray-400 mb-4">Automated payroll processing with tax compliance and reporting</p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Salary Calculation</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Tax Management</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Payslip Generation</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Compliance Reports</li>
                        </ul>
                    </div>
                </div>

                <!-- Performance -->
                <div class="group" data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="bg-gradient-to-br from-purple-900/30 to-pink-900/30 p-6 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-purple-500/50 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-chart-line text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Performance Management</h3>
                        <p class="text-gray-400 mb-4">360-degree performance reviews with goal tracking and analytics
                        </p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li><i class="fas fa-check text-green-400 mr-2"></i>KPI Tracking</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Review Cycles</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Goal Management</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Feedback System</li>
                        </ul>
                    </div>
                </div>

                <!-- Recruitment -->
                <div class="group" data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="bg-gradient-to-br from-red-900/30 to-pink-900/30 p-6 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-red-500/50 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-red-500 to-pink-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-user-plus text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Recruitment & Hiring</h3>
                        <p class="text-gray-400 mb-4">AI-powered recruitment with candidate tracking and interview
                            management</p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Job Posting</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Resume Parsing</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Interview Scheduling</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Candidate Pipeline</li>
                        </ul>
                    </div>
                </div>

                <!-- AI Features -->
                <div class="group" data-aos="fade-up" data-aos-delay="600">
                    <div
                        class="bg-gradient-to-br from-indigo-900/30 to-purple-900/30 p-6 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-indigo-500/50 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-robot text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">AI-Powered Features</h3>
                        <p class="text-gray-400 mb-4">Intelligent automation and predictive analytics for better
                            decisions</p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Smart Chatbot</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Resume Analysis</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Predictive Analytics</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Automated Workflows</li>
                        </ul>
                    </div>
                </div>

                <!-- Analytics & Reporting -->
                <div class="group" data-aos="fade-up" data-aos-delay="700">
                    <div
                        class="bg-gradient-to-br from-cyan-900/30 to-blue-900/30 p-6 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-cyan-500/50 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-chart-bar text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Advanced Analytics</h3>
                        <p class="text-gray-400 mb-4">Real-time insights and comprehensive reporting dashboards</p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Executive Dashboards</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Custom Reports</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Data Visualization</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Trend Analysis</li>
                        </ul>
                    </div>
                </div>

                <!-- Mobile & Integration -->
                <div class="group" data-aos="fade-up" data-aos-delay="800">
                    <div
                        class="bg-gradient-to-br from-emerald-900/30 to-green-900/30 p-6 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-emerald-500/50 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-emerald-500 to-green-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-mobile-alt text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Mobile & Integration</h3>
                        <p class="text-gray-400 mb-4">Seamless connectivity across all platforms and devices</p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Native Mobile Apps</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>API Integrations</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Single Sign-On</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Third-party Tools</li>
                        </ul>
                    </div>
                </div>

                <!-- Compliance & Security -->
                <div class="group" data-aos="fade-up" data-aos-delay="900">
                    <div
                        class="bg-gradient-to-br from-orange-900/30 to-red-900/30 p-6 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-orange-500/50 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-lock text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Compliance & Security</h3>
                        <p class="text-gray-400 mb-4">Enterprise-grade security with global compliance standards</p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li><i class="fas fa-check text-green-400 mr-2"></i>GDPR Compliant</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>SOC 2 Certified</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>End-to-End Encryption</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Audit Trails</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Feature Highlight Banner -->
            <div class="mt-16" data-aos="fade-up">
                <div
                    class="bg-gradient-to-r from-blue-900/50 to-purple-900/50 rounded-2xl p-8 border border-white/10 backdrop-blur-sm">
                    <div class="text-center">
                        <h3
                            class="text-3xl font-bold mb-4 bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                            Complete HR Ecosystem
                        </h3>
                        <p class="text-xl text-gray-300 mb-6">
                            From hire to retire - manage every aspect of your workforce with one integrated platform
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-400 mb-2">500+</div>
                                <div class="text-gray-400">Built-in Features</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-purple-400 mb-2">50+</div>
                                <div class="text-gray-400">Integrations</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-pink-400 mb-2">24/7</div>
                                <div class="text-gray-400">Expert Support</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscription & Renewal Section -->
    <section id="subscription" class="py-20 bg-black/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2
                    class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                    Flexible Pricing Plans
                </h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Choose the perfect plan for your organization with our scalable SaaS pricing model
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Free Trial -->
                <div class="group" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="bg-gradient-to-br from-gray-900/50 to-slate-900/50 p-8 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-gray-400/50 transition-all duration-300 h-full">
                        <div class="text-center">
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-gray-500 to-slate-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-gift text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-2">Free Trial</h3>
                            <p class="text-gray-400 mb-4">Perfect for testing our platform</p>
                            <div class="text-4xl font-bold mb-6">
                                <span class="text-gray-400">Free</span>
                            </div>
                            <ul class="text-left text-gray-400 space-y-2 mb-8">
                                <li><i class="fas fa-check text-green-400 mr-3"></i>30-day free trial</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Up to 50 employees</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Core HR features</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Email support</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Basic reporting</li>
                            </ul>
                            <button
                                class="w-full py-3 bg-gradient-to-r from-gray-600 to-slate-700 rounded-lg font-semibold hover:from-gray-700 hover:to-slate-800 transition-all duration-200">
                                Start Free Trial
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Professional -->
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
                            <h3 class="text-2xl font-bold mb-2">Professional</h3>
                            <p class="text-gray-400 mb-4">For growing businesses</p>
                            <div class="text-4xl font-bold mb-2">
                                <span class="text-blue-400">$15</span>
                                <span class="text-lg text-gray-500">/user/month</span>
                            </div>
                            <p class="text-sm text-gray-500 mb-6">Billed annually ($12/month)</p>
                            <ul class="text-left text-gray-400 space-y-2 mb-8">
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Unlimited employees</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Advanced HR features</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Payroll management</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Performance reviews</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>24/7 support</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Advanced analytics</li>
                            </ul>
                            <button
                                class="w-full py-3 bg-gradient-to-r from-blue-600 to-indigo-700 rounded-lg font-semibold hover:from-blue-700 hover:to-indigo-800 transition-all duration-200">
                                Start Professional
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Enterprise -->
                <div class="group" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="bg-gradient-to-br from-purple-900/50 to-pink-900/50 p-8 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-purple-500/50 transition-all duration-300 h-full">
                        <div class="text-center">
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-crown text-white text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-2">Enterprise</h3>
                            <p class="text-gray-400 mb-4">For large organizations</p>
                            <div class="text-4xl font-bold mb-6">
                                <span class="text-purple-400">Custom</span>
                            </div>
                            <ul class="text-left text-gray-400 space-y-2 mb-8">
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Everything in Professional</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>AI-powered features</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Custom integrations</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>Dedicated support</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>SLA guarantee</li>
                                <li><i class="fas fa-check text-green-400 mr-3"></i>White-label options</li>
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
                    <h4 class="font-semibold mb-2">Auto-Renewal</h4>
                    <p class="text-sm text-gray-400">Seamless subscription renewals with no downtime</p>
                </div>
                <div
                    class="bg-gradient-to-br from-blue-900/30 to-indigo-900/30 p-6 rounded-xl border border-white/10 backdrop-blur-sm text-center">
                    <i class="fas fa-credit-card text-blue-400 text-2xl mb-3"></i>
                    <h4 class="font-semibold mb-2">Multiple Gateways</h4>
                    <p class="text-sm text-gray-400">Razorpay, Stripe, and other payment options</p>
                </div>
                <div
                    class="bg-gradient-to-br from-yellow-900/30 to-orange-900/30 p-6 rounded-xl border border-white/10 backdrop-blur-sm text-center">
                    <i class="fas fa-shield-alt text-yellow-400 text-2xl mb-3"></i>
                    <h4 class="font-semibold mb-2">Secure Payments</h4>
                    <p class="text-sm text-gray-400">PCI DSS compliant payment processing</p>
                </div>
                <div
                    class="bg-gradient-to-br from-purple-900/30 to-pink-900/30 p-6 rounded-xl border border-white/10 backdrop-blur-sm text-center">
                    <i class="fas fa-chart-pie text-purple-400 text-2xl mb-3"></i>
                    <h4 class="font-semibold mb-2">Usage Analytics</h4>
                    <p class="text-sm text-gray-400">Detailed billing and usage reports</p>
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
                    Marketing Strategy
                </h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Our comprehensive approach to building a global SaaS empire in the HR technology space
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div data-aos="fade-right">
                    <h3 class="text-3xl font-bold mb-6">SaaS Growth Model</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-8 h-8 bg-gradient-to-r from-pink-500 to-red-600 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-rocket text-white text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-2">Freemium to Premium</h4>
                                <p class="text-gray-400">Start with a generous free trial, then convert to paid plans
                                    with advanced features</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-8 h-8 bg-gradient-to-r from-red-500 to-pink-600 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-users text-white text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-2">Viral Coefficient</h4>
                                <p class="text-gray-400">Built-in referral system and network effects to drive organic
                                    growth</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-8 h-8 bg-gradient-to-r from-pink-500 to-purple-600 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-chart-line text-white text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-2">Data-Driven Growth</h4>
                                <p class="text-gray-400">Advanced analytics to optimize conversion funnels and reduce
                                    churn</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <div
                        class="bg-gradient-to-br from-pink-900/30 to-red-900/30 p-8 rounded-2xl border border-white/10 backdrop-blur-sm">
                        <h4 class="text-2xl font-bold mb-6">Growth Metrics</h4>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-pink-400 mb-2">100,000+</div>
                                <div class="text-sm text-gray-400">Target Companies Year 3</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-red-400 mb-2">$500M</div>
                                <div class="text-sm text-gray-400">ARR Target Year 5</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-orange-400 mb-2">98%</div>
                                <div class="text-gray-400">Customer Retention</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-yellow-400 mb-2">180%</div>
                                <div class="text-gray-400">Net Revenue Retention</div>
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
                    <h4 class="text-xl font-bold mb-3">Multi-Tenant Architecture</h4>
                    <p class="text-gray-400">Scalable infrastructure supporting 10,000+ companies with complete data
                        isolation and custom configurations</p>
                </div>
                <div
                    class="bg-gradient-to-br from-green-900/30 to-teal-900/30 p-6 rounded-xl border border-white/10 backdrop-blur-sm">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-green-500 to-teal-600 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-lock text-white text-xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Enterprise Security</h4>
                    <p class="text-gray-400">SOC 2 Type II, GDPR compliant with end-to-end encryption and advanced
                        threat protection</p>
                </div>
                <div
                    class="bg-gradient-to-br from-purple-900/30 to-pink-900/30 p-6 rounded-xl border border-white/10 backdrop-blur-sm">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-600 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-globe text-white text-xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Global Compliance</h4>
                    <p class="text-gray-400">Multi-region deployment with local compliance for GDPR, CCPA, and other
                        international regulations</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Success Stories -->
    <section id="success" class="py-20 bg-gradient-to-r from-emerald-900/20 to-teal-900/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2
                    class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-emerald-400 to-teal-500 bg-clip-text text-transparent">
                    Customer Success Stories
                </h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    See how leading organizations transformed their HR operations with Smart School HRMS
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Success Story 1 -->
                <div class="group" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="bg-gradient-to-br from-blue-900/30 to-indigo-900/30 p-8 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-blue-500/50 transition-all duration-300 h-full">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-building text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold">TechCorp Global</h3>
                                <p class="text-gray-400 text-sm">5,000+ Employees</p>
                            </div>
                        </div>
                        <blockquote class="text-gray-300 mb-4 italic">
                            "Smart School HRMS reduced our HR processing time by 75% and improved employee satisfaction
                            scores by 40%. The AI-powered insights helped us make better workforce decisions."
                        </blockquote>
                        <div class="flex items-center">
                            <div class="text-sm text-gray-400">
                                <strong>Sarah Johnson</strong><br>
                                Chief People Officer
                            </div>
                        </div>
                        <div class="mt-4 grid grid-cols-2 gap-4 text-center">
                            <div>
                                <div class="text-2xl font-bold text-blue-400">75%</div>
                                <div class="text-xs text-gray-500">Time Saved</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-green-400">40%</div>
                                <div class="text-xs text-gray-500">Satisfaction ↑</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Success Story 2 -->
                <div class="group" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="bg-gradient-to-br from-purple-900/30 to-pink-900/30 p-8 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-purple-500/50 transition-all duration-300 h-full">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-600 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-rocket text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold">InnovateLab</h3>
                                <p class="text-gray-400 text-sm">2,500+ Employees</p>
                            </div>
                        </div>
                        <blockquote class="text-gray-300 mb-4 italic">
                            "The recruitment module with AI screening helped us reduce hiring time from 6 weeks to 2
                            weeks while improving candidate quality by 60%."
                        </blockquote>
                        <div class="flex items-center">
                            <div class="text-sm text-gray-400">
                                <strong>Michael Chen</strong><br>
                                VP of Talent Acquisition
                            </div>
                        </div>
                        <div class="mt-4 grid grid-cols-2 gap-4 text-center">
                            <div>
                                <div class="text-2xl font-bold text-purple-400">67%</div>
                                <div class="text-xs text-gray-500">Faster Hiring</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-pink-400">60%</div>
                                <div class="text-xs text-gray-500">Quality ↑</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Success Story 3 -->
                <div class="group" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="bg-gradient-to-br from-green-900/30 to-emerald-900/30 p-8 rounded-2xl border border-white/10 backdrop-blur-sm hover:border-green-500/50 transition-all duration-300 h-full">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-600 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-chart-line text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold">GrowthCorp</h3>
                                <p class="text-gray-400 text-sm">10,000+ Employees</p>
                            </div>
                        </div>
                        <blockquote class="text-gray-300 mb-4 italic">
                            "Payroll automation and compliance features saved us $2M annually while ensuring 100%
                            accuracy across multiple countries and regulations."
                        </blockquote>
                        <div class="flex items-center">
                            <div class="text-sm text-gray-400">
                                <strong>Emily Rodriguez</strong><br>
                                Global HR Director
                            </div>
                        </div>
                        <div class="mt-4 grid grid-cols-2 gap-4 text-center">
                            <div>
                                <div class="text-2xl font-bold text-green-400">$2M</div>
                                <div class="text-xs text-gray-500">Annual Savings</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-emerald-400">100%</div>
                                <div class="text-xs text-gray-500">Accuracy</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ROI Calculator -->
            <div class="text-center mb-16" data-aos="fade-up">
                <div
                    class="bg-gradient-to-r from-indigo-900/50 to-purple-900/50 rounded-2xl p-8 border border-white/10 backdrop-blur-sm">
                    <h3
                        class="text-3xl font-bold mb-4 bg-gradient-to-r from-green-400 to-emerald-500 bg-clip-text text-transparent">
                        Average Customer ROI
                    </h3>
                    <p class="text-xl text-gray-300 mb-8">
                        Our customers typically see these results within the first year
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="text-4xl font-bold text-green-400 mb-2">350%</div>
                            <div class="text-gray-400">Average ROI</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-blue-400 mb-2">6 months</div>
                            <div class="text-gray-400">Payback Period</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-purple-400 mb-2">$1.2M</div>
                            <div class="text-gray-400">Avg Annual Savings</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-pink-400 mb-2">90%</div>
                            <div class="text-gray-400">Process Automation</div>
                        </div>
                    </div>
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
                    Our vision for the next generation of HR technology and the innovations we're building
                </p>
            </div>

            <div class="relative">
                <!-- Timeline line -->
                <div
                    class="absolute left-1/2 transform -translate-x-0.5 w-1 h-full bg-gradient-to-b from-cyan-500 to-blue-500 hidden lg:block">
                </div>

                <div class="space-y-12">
                    <!-- Q1 2024 -->
                    <div class="flex flex-col lg:flex-row items-center" data-aos="fade-right">
                        <div class="lg:w-1/2 lg:pr-12">
                            <div
                                class="bg-gradient-to-br from-cyan-900/30 to-blue-900/30 p-6 rounded-xl border border-white/10 backdrop-blur-sm">
                                <div class="flex items-center mb-4">
                                    <div
                                        class="w-10 h-10 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fas fa-brain text-white"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold">Q1 2024 - Advanced AI Integration</h3>
                                        <p class="text-cyan-400 text-sm">Phase 1</p>
                                    </div>
                                </div>
                                <ul class="text-gray-400 space-y-2">
                                    <li><i class="fas fa-check text-green-400 mr-2"></i>GPT-4 powered HR chatbot</li>
                                    <li><i class="fas fa-check text-green-400 mr-2"></i>Intelligent resume screening
                                    </li>
                                    <li><i class="fas fa-check text-green-400 mr-2"></i>Predictive employee analytics
                                    </li>
                                    <li><i class="fas fa-check text-green-400 mr-2"></i>Automated policy recommendations
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div
                            class="hidden lg:flex w-8 h-8 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full items-center justify-center relative z-10 my-4 lg:my-0">
                            <div class="w-4 h-4 bg-white rounded-full"></div>
                        </div>
                        <div class="lg:w-1/2 lg:pl-12 mt-6 lg:mt-0"></div>
                    </div>

                    <!-- Q2 2024 -->
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
                                        <h3 class="text-xl font-bold">Q2 2024 - Mobile Applications</h3>
                                        <p class="text-green-400 text-sm">Phase 2</p>
                                    </div>
                                </div>
                                <ul class="text-gray-400 space-y-2">
                                    <li><i class="fas fa-check text-green-400 mr-2"></i>Native iOS & Android apps</li>
                                    <li><i class="fas fa-check text-green-400 mr-2"></i>Offline capability</li>
                                    <li><i class="fas fa-check text-green-400 mr-2"></i>Push notifications</li>
                                    <li><i class="fas fa-check text-green-400 mr-2"></i>Biometric authentication</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Q3 2024 -->
                    <div class="flex flex-col lg:flex-row items-center" data-aos="fade-right">
                        <div class="lg:w-1/2 lg:pr-12">
                            <div
                                class="bg-gradient-to-br from-purple-900/30 to-pink-900/30 p-6 rounded-xl border border-white/10 backdrop-blur-sm">
                                <div class="flex items-center mb-4">
                                    <div
                                        class="w-10 h-10 bg-gradient-to-r from-purple-500 to-pink-600 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fas fa-plug text-white"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold">Q3 2024 - API Marketplace</h3>
                                        <p class="text-purple-400 text-sm">Phase 3</p>
                                    </div>
                                </div>
                                <ul class="text-gray-400 space-y-2">
                                    <li><i class="fas fa-check text-green-400 mr-2"></i>Public API platform</li>
                                    <li><i class="fas fa-check text-green-400 mr-2"></i>Third-party integrations</li>
                                    <li><i class="fas fa-check text-green-400 mr-2"></i>Custom app development</li>
                                    <li><i class="fas fa-check text-green-400 mr-2"></i>Revenue sharing program</li>
                                </ul>
                            </div>
                        </div>
                        <div
                            class="hidden lg:flex w-8 h-8 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full items-center justify-center relative z-10 my-4 lg:my-0">
                            <div class="w-4 h-4 bg-white rounded-full"></div>
                        </div>
                        <div class="lg:w-1/2 lg:pl-12 mt-6 lg:mt-0"></div>
                    </div>

                    <!-- Q4 2024 -->
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
                                        <i class="fas fa-globe-americas text-white"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold">Q4 2024 - Global Expansion</h3>
                                        <p class="text-orange-400 text-sm">Phase 4</p>
                                    </div>
                                </div>
                                <ul class="text-gray-400 space-y-2">
                                    <li><i class="fas fa-check text-green-400 mr-2"></i>Multi-language support</li>
                                    <li><i class="fas fa-check text-green-400 mr-2"></i>Regional compliance</li>
                                    <li><i class="fas fa-check text-green-400 mr-2"></i>Local payment methods</li>
                                    <li><i class="fas fa-check text-green-400 mr-2"></i>24/7 global support</li>
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
                    Ready to Transform Your HR?
                </h2>
                <p class="text-xl text-gray-400 mb-8 max-w-2xl mx-auto">
                    Join thousands of companies already using Smart School HRMS to streamline their workforce management
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
                            <i class="fas fa-users text-white text-sm"></i>
                        </div>
                        <span class="text-xl font-bold">Smart School HRMS</span>
                    </div>
                    <p class="text-gray-400 text-sm">
                        AI-powered human resource management system for the modern workplace.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Product</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#features" class="hover:text-white transition-colors">Features</a></li>
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
                        <li><a href="#" class="hover:text-white transition-colors">Documentation</a></li>
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