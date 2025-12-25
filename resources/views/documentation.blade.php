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
                    <a href="{{ route('home') }}" class="flex items-center space-x-3">
                        <div
                            class="w-8 h-8 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-graduation-cap text-white text-sm"></i>
                        </div>
                        <span class="text-xl font-bold text-gray-900">Smart School ERP</span>
                    </a>
                    <span class="text-gray-400">|</span>
                    <span class="text-lg font-semibold text-blue-600">Comprehensive Documentation</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600 transition-colors">
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
                <!-- <nav class="space-y-2">
                    <a href="#overview"
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-info-circle mr-3 text-blue-500"></i>Project Overview
                    </a>
                    <a href="#setup"
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-cog mr-3 text-green-500"></i>Setup & Deployment
                    </a>
                    <a href="#modules"
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-cubes mr-3 text-purple-500"></i>Modules 
                    </a>
                    <a href="#finance"
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-dollar-sign mr-3 text-yellow-500"></i>Plans
                    </a>
                    

                    <a href="#roles"
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-users-cog mr-3 text-indigo-500"></i>User Roles & Permissions
                    </a>
                    <a href="#user-guides"
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-book-reader mr-3 text-teal-500"></i>User Guides
                    </a>
                    <a href="#security"
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-shield-alt mr-3 text-red-500"></i>Data Security & Compliance
                    </a>
                    <a href="#api"
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-code mr-3 text-cyan-500"></i>API Integrations
                    </a>
                    <a href="#roadmap"
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-road mr-3 text-pink-500"></i>Development Roadmap
                    </a>
                    <a href="#faq"
                        class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-question-circle mr-3 text-orange-500"></i>FAQ
                    </a>
                </nav> -->

                <nav class="space-y-1">
                    <a href="#overview"
                        class="flex items-start gap-3 px-3 py-2.5 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-info-circle text-blue-500 w-5 mt-0.5"></i>
                        <span class="leading-snug">Project Overview</span>
                    </a>

                    <a href="#setup"
                        class="flex items-start gap-3 px-3 py-2.5 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-cog text-green-500 w-5 mt-0.5"></i>
                        <span class="leading-snug">Setup & Deployment</span>
                    </a>

                    <a href="#modules"
                        class="flex items-start gap-3 px-3 py-2.5 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-cubes text-purple-500 w-5 mt-0.5"></i>
                        <span class="leading-snug">Modules</span>
                    </a>

                    <a href="#finance"
                        class="flex items-start gap-3 px-3 py-2.5 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-dollar-sign text-yellow-500 w-5 mt-0.5"></i>
                        <span class="leading-snug">Plans</span>
                    </a>

                    <a href="#roles"
                        class="flex items-start gap-3 px-3 py-2.5 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-users-cog text-indigo-500 w-5 mt-0.5"></i>
                        <span class="leading-snug">User Roles & Permissions</span>
                    </a>

                    <a href="#user-guides"
                        class="flex items-start gap-3 px-3 py-2.5 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-book-reader text-teal-500 w-5 mt-0.5"></i>
                        <span class="leading-snug">User Guides</span>
                    </a>

                    <a href="#security"
                        class="flex items-start gap-3 px-3 py-2.5 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-shield-alt text-red-500 w-5 mt-0.5"></i>
                        <span class="leading-snug">Data Security & Compliance</span>
                    </a>

                    <a href="#api"
                        class="flex items-start gap-3 px-3 py-2.5 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-code text-cyan-500 w-5 mt-0.5"></i>
                        <span class="leading-snug">API Integrations</span>
                    </a>

                    <a href="#roadmap"
                        class="flex items-start gap-3 px-3 py-2.5 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-road text-pink-500 w-5 mt-0.5"></i>
                        <span class="leading-snug">Development Roadmap</span>
                    </a>

                    <a href="#faq"
                        class="flex items-start gap-3 px-3 py-2.5 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-blue-600 transition-colors">
                        <i class="fas fa-question-circle text-orange-500 w-5 mt-0.5"></i>
                        <span class="leading-snug">FAQ</span>
                    </a>
                </nav>

            </div>
        </div>

        <div class="flex-1 max-w-none">
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
                <div class="max-w-4xl mx-auto px-6 text-center" data-aos="fade-up">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">
                        Smart School ERP Documentation
                    </h1>
                    <p class="text-xl text-blue-100 mb-8">
                        Detailed guides and resources for effectively managing your educational institution
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
                        Project Overview
                    </h2>

                    <div class="prose prose-lg max-w-none">
                        <p class="text-lg text-gray-600 mb-6">
                            Smart School ERP is a state-of-the-art Enterprise Resource Planning solution tailored for
                            educational institutions. Our multi-tenant SaaS platform is designed to automate and
                            streamline a wide array of campus operations, encompassing academic, administrative, and
                            financial management. It supports a diverse range of user roles, including SuperAdmins,
                            School Admins, Accountants, Teachers, Parents, and Students, offering a customized and
                            efficient experience for every stakeholder. The system is built to handle multi-branch
                            institutions and provides real-time, data-driven insights to foster effective
                            decision-making and a collaborative learning environment.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                        <div
                            class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-xl border border-blue-200 group hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-school text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Multi-Branch & Multi-Tenant</h3>
                            <p class="text-gray-600">Centralized management for institutions with multiple campuses,
                                each with isolated data and customizable settings.</p>
                        </div>

                        <div
                            class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-xl border border-green-200 group hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-calendar-alt text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Academic Session Management</h3>
                            <p class="text-gray-600">Robust handling of academic sessions, student promotions, and
                                historical data archiving.</p>
                        </div>

                        <div
                            class="bg-gradient-to-br from-purple-50 to-pink-50 p-6 rounded-xl border border-purple-200 group hover:shadow-lg transition-all duration-300">
                            <div
                                class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-chart-line text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Data-Driven Insights</h3>
                            <p class="text-gray-600">Real-time analytics and comprehensive reports for informed
                                decision-making across all modules.</p>
                        </div>
                    </div>
                </section>

                <section id="setup" class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-cog text-green-500 mr-3"></i>
                        Setup & Deployment
                    </h2>

                    <div class="bg-white rounded-xl border border-gray-200 p-6 mb-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Local Development Environment</h3>
                        <div class="space-y-4">
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2">1. Clone the Repository</h4>
                                <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto"><code>git clone [your-repository-url].git
cd schoolmanagermentsystem</code></pre>
                            </div>

                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2">2. Install PHP and JavaScript Dependencies
                                </h4>
                                <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto"><code>composer install
npm install && npm run dev</code></pre>
                            </div>

                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2">3. Environment Configuration</h4>
                                <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto"><code>cp .env.example .env
php artisan key:generate
php artisan storage:link</code></pre>
                            </div>

                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2">4. Database Setup & Seeding</h4>
                                <pre
                                    class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto"><code>php artisan migrate:fresh --seed</code></pre>
                                <p class="text-sm text-gray-500 mt-2">This command will create tables and seed initial
                                    data, including a SuperAdmin user (email: <code>superadmin@example.com</code>,
                                    password: <code>password</code>).</p>
                            </div>

                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2">5. Run the Application</h4>
                                <pre
                                    class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto"><code>php artisan serve</code></pre>
                                <p class="text-sm text-gray-500 mt-2">Access the application at
                                    <code>http://127.0.0.1:8000</code>.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border border-blue-200 p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                            <i class="fas fa-cloud text-blue-500 mr-2"></i>
                            Production Deployment Considerations
                        </h3>
                        <div class="prose prose-lg max-w-none text-gray-600">
                            <p>For production environments, ensure you configure your web server (Nginx/Apache), set up
                                a robust database, and manage your environment variables securely. Implement proper
                                caching, queue workers, and scheduled tasks for optimal performance. Consider using
                                Docker for containerized deployments for consistency across environments.</p>
                            <h4 class="font-semibold text-gray-800 mt-4 mb-2">Key Steps:</h4>
                            <ul class="list-disc list-inside space-y-1">
                                <li>Configure `.env` file with production database credentials and application URL.</li>
                                <li>Optimize composer autoloader: <code>composer dump-autoload --optimize</code></li>
                                <li>Cache configuration and routes: <code>php artisan config:cache</code>,
                                    <code>php artisan route:cache</code></li>
                                <li>Set up a queue worker: <code>php artisan queue:work --daemon --tries=3</code></li>
                                <li>Configure cron job for scheduled tasks:
                                    <code>* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1</code>
                                </li>
                                <li>Secure file permissions for storage and bootstrap/cache directories.</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="modules" class="mb-16" data-aos="fade-up">
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
                                    Comprehensive Online Admission & Enrollment
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Detailed Student Profiles, Documents & Health Records
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Digital ID Card Generation with QR/Barcode
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Academic Promotions, Transfers & Alumni Records
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
                                    Multi-level Class, Section & Subject Management
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Dynamic Timetable Creation & Homework Assignment
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Configurable Exam Scheduling & Automated Marks Entry
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Centralized Study Materials & Resource Sharing
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
                                    Flexible Fee Structures & Auto-allocations
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Integrated Online Payment Gateways
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Automated Invoicing, Receipts & Due Date Reminders
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Comprehensive Income, Expense & Payroll Reports
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
                                    Centralized Staff Directories & Role-based Access
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Integrated Teacher & Employee Attendance
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Automated Leave Management System
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Customizable Salary Templates & Auto-Payroll Generation
                                </div>
                            </div>
                        </div>


                        <div
                            class="bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg transition-all duration-300 group">
                            <div class="flex items-center mb-4">
                                <div
                                    class="w-10 h-10 bg-red-500 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-bus text-white"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900">Transport Management</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Efficiently manage school transportation services.</p>
                            <div class="space-y-2">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Vehicle & Driver Management
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Route & Stop Planning
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Student Allocation to Routes
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Automated Transport Fees
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg transition-all duration-300 group">
                            <div class="flex items-center mb-4">
                                <div
                                    class="w-10 h-10 bg-cyan-500 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-hotel text-white"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900">Hostel Management</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Streamlined management of student accommodation.</p>
                            <div class="space-y-2">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Building & Room Setup
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Student Room Allocations
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Hostel Fee Generation
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Visitor & Mess Management
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg transition-all duration-300 group">
                            <div class="flex items-center mb-4">
                                <div
                                    class="w-10 h-10 bg-orange-500 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-warehouse text-white"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900">Inventory Management</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Track and manage all school assets and supplies.</p>
                            <div class="space-y-2">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Item Categories, Suppliers & Stores
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Stock In/Out & Low Stock Alerts
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Asset Tracking & Maintenance
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Comprehensive Inventory Reports
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg transition-all duration-300 group">
                            <div class="flex items-center mb-4">
                                <div
                                    class="w-10 h-10 bg-emerald-500 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-comments text-white"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900">Communication</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Seamless communication channels for all stakeholders.</p>
                            <div class="space-y-2">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Global & School-specific Notices
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Internal Messaging System
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Email & SMS Integration
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-2"></i>
                                    Parent-Teacher Feedback
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <section id="finance" class="mb-16" data-aos="fade-up">
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

                        <div class="bg-gradient-to-r from-orange-50 to-red-50 rounded-xl border border-orange-200 p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-orange-600 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-id-badge text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-900">Operational Staff</h3>
                                    <p class="text-orange-600 text-sm">Accountant, Librarian & Transport</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-2">Accountant</h4>
                                    <ul class="space-y-1 text-sm text-gray-600">
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Manage Fee Invoices</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Track Expenses & Income</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Generate Financial Reports
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-2">Librarian & Driver</h4>
                                    <ul class="space-y-1 text-sm text-gray-600">
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Issue/Return Books</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Manage Bus Routes</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Vehicle Maintenance Logs
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="user-guides" class="mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-book-reader text-teal-500 mr-3"></i>
                        User Guides
                    </h2>

                    <div class="space-y-8">
                        <!-- Admin Guide -->
                        <div class="bg-white rounded-xl border border-gray-200 p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                                <i class="fas fa-user-shield text-purple-600 mr-3"></i>
                                Administrator Guide
                            </h3>
                            <div class="prose prose-sm text-gray-600 max-w-none">
                                <p class="mb-4">As a SuperAdmin or School Admin, you have full control over the ERP
                                    system. Here are the key workflows:</p>
                                <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 list-none pl-0">
                                    <li class="flex items-start">
                                        <i class="fas fa-chevron-right text-teal-500 mt-1 mr-2"></i>
                                        <span><strong>System Configuration:</strong> Go to <em>Settings > General
                                                Settings</em> to configure school details, logos, and academic
                                            sessions.</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-chevron-right text-teal-500 mt-1 mr-2"></i>
                                        <span><strong>User Management:</strong> Use the <em>Human Resource</em> module
                                            to add staff and the <em>Student Information</em> module for
                                            admissions.</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-chevron-right text-teal-500 mt-1 mr-2"></i>
                                        <span><strong>Fee Setup:</strong> Define fee groups and types in <em>Fees
                                                Collection</em> before assigning them to students.</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-chevron-right text-teal-500 mt-1 mr-2"></i>
                                        <span><strong>Timetable:</strong> Create class-wise timetables in the
                                            <em>Academics</em> module to enable attendance tracking.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Teacher Guide -->
                        <div class="bg-white rounded-xl border border-gray-200 p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                                <i class="fas fa-chalkboard-teacher text-blue-600 mr-3"></i>
                                Teacher Guide
                            </h3>
                            <div class="prose prose-sm text-gray-600 max-w-none">
                                <p class="mb-4">Teachers can manage their daily academic activities through the Teacher
                                    Portal:</p>
                                <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 list-none pl-0">
                                    <li class="flex items-start">
                                        <i class="fas fa-chevron-right text-teal-500 mt-1 mr-2"></i>
                                        <span><strong>Attendance:</strong> Mark student attendance daily via
                                            <em>Academics > Daily Attendance</em>.</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-chevron-right text-teal-500 mt-1 mr-2"></i>
                                        <span><strong>Homework:</strong> Assign homework and upload study materials in
                                            the <em>Homework</em> module.</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-chevron-right text-teal-500 mt-1 mr-2"></i>
                                        <span><strong>Examinations:</strong> Enter marks for scheduled exams and
                                            generate report cards.</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-chevron-right text-teal-500 mt-1 mr-2"></i>
                                        <span><strong>Leaves:</strong> Apply for leave and view approval status in the
                                            <em>Human Resource</em> section.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Student/Parent Guide -->
                        <div class="bg-white rounded-xl border border-gray-200 p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                                <i class="fas fa-users text-green-600 mr-3"></i>
                                Student & Parent Guide
                            </h3>
                            <div class="prose prose-sm text-gray-600 max-w-none">
                                <p class="mb-4">Students and parents can access the portal to stay updated with school
                                    activities:</p>
                                <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 list-none pl-0">
                                    <li class="flex items-start">
                                        <i class="fas fa-chevron-right text-teal-500 mt-1 mr-2"></i>
                                        <span><strong>Online Fees:</strong> View pending dues and pay fees securely
                                            using integrated payment gateways.</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-chevron-right text-teal-500 mt-1 mr-2"></i>
                                        <span><strong>Academic Progress:</strong> Download report cards, view attendance
                                            records, and check class timetables.</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-chevron-right text-teal-500 mt-1 mr-2"></i>
                                        <span><strong>Homework:</strong> View assigned homework and download attached
                                            documents.</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-chevron-right text-teal-500 mt-1 mr-2"></i>
                                        <span><strong>Transport:</strong> Track assigned bus routes and vehicle
                                            details.</span>
                                    </li>
                                </ul>
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
                            <div class="w-4 h-4 bg-emerald-500 rounded-full mt-2"></div>
                            <div class="flex-1">
                                <div class="bg-white rounded-xl border border-gray-200 p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <h3 class="text-xl font-semibold text-gray-900">Q1 2026 - AI Tutor & Analytics
                                        </h3>
                                        <span
                                            class="bg-emerald-100 text-emerald-800 px-3 py-1 rounded-full text-sm font-semibold">Implemented</span>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-robot text-emerald-500 mr-2"></i>AI Doubt Solving Bot
                                            </li>
                                            <li><i class="fas fa-brain text-emerald-500 mr-2"></i>Adaptive Learning
                                                Paths
                                            </li>
                                        </ul>
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-chart-line text-emerald-500 mr-2"></i>Performance
                                                Prediction</li>
                                            <li><i class="fas fa-cogs text-emerald-500 mr-2"></i>Smart Timetable
                                                Generator
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-4 h-4 bg-emerald-500 rounded-full mt-2"></div>
                            <div class="flex-1">
                                <div class="bg-white rounded-xl border border-gray-200 p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <h3 class="text-xl font-semibold text-gray-900">Q2 2026 - Mobile Apps</h3>
                                        <span
                                            class="bg-emerald-100 text-emerald-800 px-3 py-1 rounded-full text-sm font-semibold">Implemented</span>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-mobile-alt text-emerald-500 mr-2"></i>Parent App
                                                (iOS/Android)</li>
                                            <li><i class="fas fa-chalkboard-teacher text-emerald-500 mr-2"></i>Teacher
                                                App
                                            </li>
                                        </ul>
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-bell text-emerald-500 mr-2"></i>Instant Homework
                                                Notifications</li>
                                            <li><i class="fas fa-bus text-emerald-500 mr-2"></i>Live Bus Tracking</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-4 h-4 bg-emerald-500 rounded-full mt-2"></div>
                            <div class="flex-1">
                                <div class="bg-white rounded-xl border border-gray-200 p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <h3 class="text-xl font-semibold text-gray-900">Q3 2026 - LMS Integration</h3>
                                        <span
                                            class="bg-emerald-100 text-emerald-800 px-3 py-1 rounded-full text-sm font-semibold">Implemented</span>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-video text-emerald-500 mr-2"></i>Live Classes
                                                (Zoom/Meet)</li>
                                            <li><i class="fas fa-file-pdf text-emerald-500 mr-2"></i>E-Library & Notes
                                            </li>
                                        </ul>
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-question text-emerald-500 mr-2"></i>Online Quiz Module
                                            </li>
                                            <li><i class="fas fa-certificate text-emerald-500 mr-2"></i>Course
                                                Certification</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-4 h-4 bg-emerald-500 rounded-full mt-2"></div>
                            <div class="flex-1">
                                <div class="bg-white rounded-xl border border-gray-200 p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <h3 class="text-xl font-semibold text-gray-900">Q4 2026 - Enhanced Security &
                                            Compliance
                                        </h3>
                                        <span
                                            class="bg-emerald-100 text-emerald-800 px-3 py-1 rounded-full text-sm font-semibold">Implemented</span>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-shield-alt text-emerald-500 mr-2"></i>Advanced Threat
                                                Detection</li>
                                            <li><i class="fas fa-file-contract text-emerald-500 mr-2"></i>Continuous
                                                Compliance Audits</li>
                                        </ul>
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-database text-emerald-500 mr-2"></i>Customizable Data
                                                Retention</li>
                                            <li><i class="fas fa-lock text-emerald-500 mr-2"></i>Secure API Access
                                                Controls</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2027 Vision -->
                        <div class="flex items-start space-x-4">
                            <div class="w-4 h-4 bg-blue-500 rounded-full mt-2 animate-pulse"></div>
                            <div class="flex-1">
                                <div
                                    class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl border border-blue-200 p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <h3 class="text-xl font-semibold text-gray-900">2027 Strategic Vision</h3>
                                        <span
                                            class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">In
                                            Planning</span>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-link text-blue-500 mr-2"></i><strong>Blockchain
                                                    Credentials:</strong> Tamper-proof digital diplomas and
                                                certificates.</li>
                                            <li><i class="fas fa-wifi text-blue-500 mr-2"></i><strong>IoT Smart
                                                    Campus:</strong> Automated attendance via RFID gates and energy
                                                management.</li>
                                        </ul>
                                        <ul class="space-y-2 text-gray-600">
                                            <li><i class="fas fa-language text-blue-500 mr-2"></i><strong>AI Voice
                                                    Assistant:</strong> Voice-command navigation for the dashboard.</li>
                                            <li><i class="fas fa-chart-pie text-blue-500 mr-2"></i><strong>Predictive
                                                    Retention:</strong> AI models to identify at-risk students early.
                                            </li>
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
                                    apps for Parents and Teachers are scheduled for release in Q2 2026.
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