<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Documentation - School Management System</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900">

    <!-- Top Navigation -->
    <nav class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-graduation-cap text-white text-sm"></i>
                        </div>
                        <span class="text-xl font-bold text-gray-900">School Management System</span>
                    </a>
                    <span class="text-gray-400">|</span>
                    <span class="text-lg font-semibold text-blue-600">Project Documentation</span>
                </div>
                <div class="flex items-center space-x-4">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600 transition-colors">
    <i class="fas fa-home mr-2"></i>Home
</a>
                    <a href="{{ route('documentation') }}" class="text-gray-600 hover:text-blue-600 transition-colors">
                        <i class="fas fa-book mr-2"></i>User Docs
                    </a>
                    <a href="{{ route('login') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-slate-900 via-blue-900 to-indigo-900 text-white py-16">
        <div class="max-w-5xl mx-auto px-6 text-center" data-aos="fade-up">
            <div class="mb-4">
                <span class="inline-flex items-center px-4 py-2 bg-blue-500/20 rounded-full text-blue-200 text-sm font-semibold border border-blue-400/30">
                    <i class="fas fa-file-contract mr-2"></i>
                    Official Project Confirmation Document
                </span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Smart School Management System
            </h1>
            <h2 class="text-2xl md:text-3xl font-light text-blue-200 mb-6">
                Project Documentation & Requirements
            </h2>
            <p class="text-lg text-gray-300 mb-8 max-w-3xl mx-auto">
                Comprehensive project specification for building an enterprise-level School Management System
                to streamline academic, administrative, and financial operations for educational institutions.
            </p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-6xl mx-auto px-6 py-12">

        <!-- Project Overview -->
        <section class="mb-16" data-aos="fade-up">
            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border border-blue-200 p-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                    <i class="fas fa-flag text-blue-500 mr-3"></i>
                    Detailed Project Introduction
                </h2>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Project Specifications</h3>
                        <div class="space-y-4 text-gray-700">
                            <div class="bg-white rounded-lg p-4 border border-blue-200">
                                <p><strong>Project Name:</strong> School Management System</p>
                                <p><strong>Project Type:</strong> Educational ERP Platform</p>
                                <p><strong>Industry:</strong> Education Technology (EdTech)</p>
                                <p><strong>Business Model:</strong> Institutional License / SaaS</p>
                            </div>
                            <div class="bg-white rounded-lg p-4 border border-blue-200">
                                <p><strong>Target Market:</strong> K-12 Schools, Colleges, Universities</p>
                                <p><strong>User Base:</strong> Admins, Teachers, Students, Parents, Accountants</p>
                                <p><strong>Deployment:</strong> Cloud-based or On-Premise</p>
                                <p><strong>Core Focus:</strong> Automation of Academic & Admin Processes</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Business Objectives</h3>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <i class="fas fa-target text-blue-500 mr-3 mt-1"></i>
                                <div>
                                    <strong>Primary Goal:</strong> Streamline School Administration
                                    <p class="text-sm text-gray-600">Reduce manual paperwork by 90% and improve efficiency</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-users text-green-500 mr-3 mt-1"></i>
                                <div>
                                    <strong>Stakeholder Connectivity:</strong> Connect Parents, Teachers & Students
                                    <p class="text-sm text-gray-600">Real-time communication and progress tracking</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-globe text-purple-500 mr-3 mt-1"></i>
                                <div>
                                    <strong>Digital Transformation:</strong> Paperless Campus Operations
                                    <p class="text-sm text-gray-600">Digitize admission, fees, exams, and library records</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-rocket text-red-500 mr-3 mt-1"></i>
                                <div>
                                    <strong>Financial Control:</strong> Zero Leakage Fee Management
                                    <p class="text-sm text-gray-600">Automated invoicing, reminders, and online payments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vision & Mission -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gradient-to-br from-blue-100 to-indigo-100 rounded-lg p-6">
                        <h4 class="text-lg font-semibold text-gray-900 mb-3 flex items-center">
                            <i class="fas fa-eye text-blue-600 mr-2"></i>
                            Our Vision
                        </h4>
                        <p class="text-gray-700">
                            To revolutionize the educational ecosystem by providing a seamless, integrated platform
                            that bridges the gap between administration, academics, and stakeholders, fostering an
                            environment focused on student growth and institutional excellence.
                        </p>
                    </div>
                    <div class="bg-gradient-to-br from-green-100 to-emerald-100 rounded-lg p-6">
                        <h4 class="text-lg font-semibold text-gray-900 mb-3 flex items-center">
                            <i class="fas fa-bullseye text-green-600 mr-2"></i>
                            Our Mission
                        </h4>
                        <p class="text-gray-700">
                            To empower educational institutions with cutting-edge technology that simplifies complex
                            administrative tasks, ensures financial transparency, and enhances the learning experience
                            through data-driven insights and efficient resource management.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Detailed Problem Analysis -->
        <section class="mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">
                Market Analysis & Problem Statement
            </h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <!-- Current Market Problems -->
                <div class="bg-gradient-to-br from-red-50 to-orange-50 rounded-xl border border-red-200 p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-exclamation-triangle text-red-500 mr-3"></i>
                        Challenges in Education Management
                    </h3>

                    <div class="space-y-6">
                        <div class="bg-white rounded-lg p-4 border-l-4 border-red-500">
                            <h4 class="font-semibold text-gray-900 mb-2">Manual Data Management</h4>
                            <p class="text-gray-700 text-sm mb-2">
                                Schools rely on physical registers and spreadsheets for attendance, marks, and fees,
                                leading to data redundancy and loss.
                            </p>
                            <p class="text-red-600 text-sm"><strong>Impact:</strong> High administrative burden, data errors</p>
                        </div>

                        <div class="bg-white rounded-lg p-4 border-l-4 border-orange-500">
                            <h4 class="font-semibold text-gray-900 mb-2">Communication Gaps</h4>
                            <p class="text-gray-700 text-sm mb-2">
                                Lack of real-time updates to parents regarding student attendance, homework, and
                                performance creates a disconnect.
                            </p>
                            <p class="text-orange-600 text-sm"><strong>Impact:</strong> Reduced parental engagement</p>
                        </div>

                        <div class="bg-white rounded-lg p-4 border-l-4 border-yellow-500">
                            <h4 class="font-semibold text-gray-900 mb-2">Fee Collection Issues</h4>
                            <p class="text-gray-700 text-sm mb-2">
                                Tracking pending fees, generating invoices, and reconciling payments manually is
                                prone to errors and delays.
                            </p>
                            <p class="text-yellow-600 text-sm"><strong>Impact:</strong> Revenue leakage, cash flow issues</p>
                        </div>

                        <div class="bg-white rounded-lg p-4 border-l-4 border-purple-500">
                            <h4 class="font-semibold text-gray-900 mb-2">Exam & Result Chaos</h4>
                            <p class="text-gray-700 text-sm mb-2">
                                Manual scheduling of exams and calculation of grades/report cards is time-consuming
                                and stressful for teachers.
                            </p>
                            <p class="text-purple-600 text-sm"><strong>Impact:</strong> Delayed results, teacher burnout</p>
                        </div>
                    </div>

                    <div class="mt-8 grid grid-cols-2 gap-4">
                        <div class="bg-red-100 rounded-lg p-4 text-center">
                            <div class="text-3xl font-bold text-red-600 mb-1">60%</div>
                            <div class="text-sm text-gray-600">Admin Time on Paperwork</div>
                        </div>
                        <div class="bg-orange-100 rounded-lg p-4 text-center">
                            <div class="text-3xl font-bold text-orange-600 mb-1">15%</div>
                            <div class="text-sm text-gray-600">Revenue Lost in Uncollected Fees</div>
                        </div>
                    </div>
                </div>

                <!-- Comprehensive Solution -->
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl border border-green-200 p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-lightbulb text-green-500 mr-3"></i>
                        Our Solution
                    </h3>

                    <div class="space-y-6">
                        <div class="bg-white rounded-lg p-4 border-l-4 border-green-500">
                            <h4 class="font-semibold text-gray-900 mb-2">Integrated Campus Management</h4>
                            <p class="text-gray-700 text-sm mb-2">
                                A single platform connecting Academics, Administration, Library, Transport, and Finance
                                for seamless data flow and operations.
                            </p>
                            <p class="text-green-600 text-sm"><strong>Benefit:</strong> Centralized control & efficiency</p>
                        </div>

                        <div class="bg-white rounded-lg p-4 border-l-4 border-blue-500">
                            <h4 class="font-semibold text-gray-900 mb-2">Smart Automation</h4>
                            <p class="text-gray-700 text-sm mb-2">
                                Automated attendance reports, fee reminders, result generation, and timetable scheduling
                                to reduce manual workload.
                            </p>
                            <p class="text-blue-600 text-sm"><strong>Benefit:</strong> 80% time savings for staff</p>
                        </div>

                        <div class="bg-white rounded-lg p-4 border-l-4 border-purple-500">
                            <h4 class="font-semibold text-gray-900 mb-2">Parent & Student Portals</h4>
                            <p class="text-gray-700 text-sm mb-2">
                                Dedicated dashboards for parents to track attendance, marks, and pay fees, and for
                                students to access homework and schedules.
                            </p>
                            <p class="text-purple-600 text-sm"><strong>Benefit:</strong> Enhanced engagement & transparency</p>
                        </div>

                        <div class="bg-white rounded-lg p-4 border-l-4 border-indigo-500">
                            <h4 class="font-semibold text-gray-900 mb-2">Secure & Scalable</h4>
                            <p class="text-gray-700 text-sm mb-2">
                                Role-based access control (RBAC) ensures data privacy, scalable architecture supports
                                institutions of any size.
                            </p>
                            <p class="text-indigo-600 text-sm"><strong>Benefit:</strong> Data security & peace of mind</p>
                        </div>
                    </div>

                    <div class="mt-8 grid grid-cols-2 gap-4">
                        <div class="bg-green-100 rounded-lg p-4 text-center">
                            <div class="text-3xl font-bold text-green-600 mb-1">95%</div>
                            <div class="text-sm text-gray-600">Paperwork Reduction</div>
                        </div>
                        <div class="bg-blue-100 rounded-lg p-4 text-center">
                            <div class="text-3xl font-bold text-blue-600 mb-1">100%</div>
                            <div class="text-sm text-gray-600">Fee Tracking Accuracy</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Market Opportunity -->
            <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl border border-indigo-200 p-8 mt-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Market Opportunity</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
                    <div>
                        <div class="text-3xl font-bold text-indigo-600 mb-2">$30B+</div>
                        <div class="text-sm text-gray-600">Global EdTech Market</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-purple-600 mb-2">15%</div>
                        <div class="text-sm text-gray-600">Annual Growth Rate</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-blue-600 mb-2">1M+</div>
                        <div class="text-sm text-gray-600">Schools & Colleges</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-green-600 mb-2">High</div>
                        <div class="text-sm text-gray-600">Demand for Digitalization</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comprehensive Feature Documentation -->
        <section class="mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">
                Comprehensive Feature Documentation
            </h2>

            <!-- Core HR Modules -->
            <div class="space-y-8">

                <!-- Student Information System -->
                <div class="bg-white rounded-xl border border-gray-200 p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-blue-500 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-user-graduate text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Student Information System</h3>
                            <p class="text-gray-600">Complete student lifecycle management from admission to alumni</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Core Features</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Online Admission Form</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Student Profile Management</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Class & Section Allocation</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Parent/Guardian Details</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Document Uploads</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>ID Card Generation</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Advanced Features</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Student Promotion Logic</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Alumni Management</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Sibling Mapping</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Bulk Import/Export</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Student History Tracking</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Custom Fields</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Business Impact</h4>
                            <div class="space-y-3">
                                <div class="bg-blue-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-blue-600">100%</div>
                                    <div class="text-xs text-gray-600">Digital Records</div>
                                </div>
                                <div class="bg-green-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-green-600">50%</div>
                                    <div class="text-xs text-gray-600">Faster Admissions</div>
                                </div>
                                <div class="bg-purple-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-purple-600">360°</div>
                                    <div class="text-xs text-gray-600">Student View</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Academic Management -->
                <div class="bg-white rounded-xl border border-gray-200 p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-green-500 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-book-open text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Academic Management</h3>
                            <p class="text-gray-600">Streamlining curriculum, timetables, and daily academic activities</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Curriculum & Classes</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Subject Management</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Class Routine/Timetable</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Syllabus Planning</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Lesson Plans</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Homework/Assignment</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Study Material Upload</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Attendance & Tracking</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Student Attendance (Daily/Subject-wise)</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Teacher Attendance</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Biometric Integration</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Absentee SMS Notification</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Monthly Attendance Reports</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Leave Management</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">ROI Metrics</h4>
                            <div class="space-y-3">
                                <div class="bg-green-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-green-600">Zero</div>
                                    <div class="text-xs text-gray-600">Timetable Clashes</div>
                                </div>
                                <div class="bg-blue-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-blue-600">Real-time</div>
                                    <div class="text-xs text-gray-600">Parent Updates</div>
                                </div>
                                <div class="bg-purple-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-purple-600">100%</div>
                                    <div class="text-xs text-gray-600">Syllabus Coverage Tracking</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fee Management Module -->
                <div class="bg-white rounded-xl border border-gray-200 p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-yellow-500 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-file-invoice-dollar text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Fee Management System</h3>
                            <p class="text-gray-600">Automated fee collection, invoicing, and financial reporting</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Fee Operations</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Fee Structure Configuration</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Fee Type Management (Tuition, Transport, etc.)</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Invoice Generation</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Online Fee Payment</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Offline Payment Recording</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Receipt Generation</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Financial Control</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Due Fee Reports</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Discount/Scholarship Management</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Fine/Late Fee Calculation</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Daily Collection Reports</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Expense Management</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Staff Payroll Integration</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Business Value</h4>
                            <div class="space-y-3">
                                <div class="bg-yellow-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-yellow-600">100%</div>
                                    <div class="text-xs text-gray-600">Transparency</div>
                                </div>
                                <div class="bg-green-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-green-600">Faster</div>
                                    <div class="text-xs text-gray-600">Collections</div>
                                </div>
                                <div class="bg-blue-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-blue-600">Auto</div>
                                    <div class="text-xs text-gray-600">Reminders</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Examination & Results Module -->
                <div class="bg-white rounded-xl border border-gray-200 p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-purple-500 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-clipboard-check text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Examination & Grading</h3>
                            <p class="text-gray-600">Comprehensive exam management and automated result processing</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Exam Setup</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Exam Scheduling</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Admit Card Generation</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Grade/Marking System Config</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Exam Attendance</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Online Exams</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Question Bank</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Results & Reports</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Marks Entry System</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Automated Tabulation</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Report Card Generation</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Merit List Generation</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Performance Analytics</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Student Progress Tracking</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Efficiency</h4>
                            <div class="space-y-3">
                                <div class="bg-purple-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-purple-600">Instant</div>
                                    <div class="text-xs text-gray-600">Result Publishing</div>
                                </div>
                                <div class="bg-blue-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-blue-600">Error-free</div>
                                    <div class="text-xs text-gray-600">Calculations</div>
                                </div>
                                <div class="bg-green-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-green-600">Easy</div>
                                    <div class="text-xs text-gray-600">Analysis</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Modules Summary -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-gradient-to-br from-indigo-50 to-blue-50 rounded-xl border border-indigo-200 p-6">
                        <div class="w-12 h-12 bg-indigo-500 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-book text-white"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Library Management</h4>
                        <p class="text-sm text-gray-600 mb-3">Book tracking, issuing, and digital catalog</p>
                        <div class="text-xs text-gray-500">
                            <div class="font-medium">Key Features:</div>
                            <div>• Book Inventory</div>
                            <div>• Issue/Return Tracking</div>
                            <div>• Fine Calculation</div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-red-50 to-pink-50 rounded-xl border border-red-200 p-6">
                        <div class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-bus text-white"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Transport Management</h4>
                        <p class="text-sm text-gray-600 mb-3">Route planning, vehicle tracking, and fee mapping</p>
                        <div class="text-xs text-gray-500">
                            <div class="font-medium">Key Features:</div>
                            <div>• Route Management</div>
                            <div>• Vehicle Tracking</div>
                            <div>• Driver Details</div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-cyan-50 to-teal-50 rounded-xl border border-cyan-200 p-6">
                        <div class="w-12 h-12 bg-cyan-500 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-bed text-white"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Hostel Management</h4>
                        <p class="text-sm text-gray-600 mb-3">Room allocation, mess management, and attendance</p>
                        <div class="text-xs text-gray-500">
                            <div class="font-medium">Key Features:</div>
                            <div>• Room Allocation</div>
                            <div>• Mess Menu</div>
                            <div>• Visitor Log</div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-xl border border-orange-200 p-6">
                        <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-bullhorn text-white"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Communication</h4>
                        <p class="text-sm text-gray-600 mb-3">SMS, Email, and App notifications for updates</p>
                        <div class="text-xs text-gray-500">
                            <div class="font-medium">Key Features:</div>
                            <div>• Notice Board</div>
                            <div>• SMS Alerts</div>
                            <div>• Event Calendar</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technology Stack -->
        <section class="mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Technology Stack</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl border border-gray-200 p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                        <i class="fas fa-server text-blue-500 mr-2"></i>Backend
                    </h3>
                    <ul class="space-y-2 text-gray-600">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Laravel 10+ Framework</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>MySQL/PostgreSQL Database</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Redis for Queues & Cache</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>RESTful APIs</li>
                    </ul>
                </div>

                <div class="bg-white rounded-xl border border-gray-200 p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                        <i class="fas fa-paint-brush text-green-500 mr-2"></i>Frontend
                    </h3>
                    <ul class="space-y-2 text-gray-600">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Blade Templating</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>TailwindCSS Styling</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Alpine.js Interactivity</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Responsive Design</li>
                    </ul>
                </div>

                <div class="bg-white rounded-xl border border-gray-200 p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                        <i class="fas fa-cloud text-purple-500 mr-2"></i>Infrastructure
                    </h3>
                    <ul class="space-y-2 text-gray-600">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Docker Containerization</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>AWS/Azure Deployment</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Nginx Web Server</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>CloudFlare CDN</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Development Timeline -->
        <section class="mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Development Timeline</h2>

            <div class="space-y-6">
                <!-- Phase 1 -->
                <div class="bg-white rounded-xl border border-gray-200 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold text-gray-900 flex items-center">
                            <span class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white text-sm mr-3">1</span>
                            Foundation (Months 1-2)
                        </h3>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">Core Modules</span>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <ul class="space-y-1 text-sm text-gray-600">
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Student & Staff Management</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Class & Section Setup</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Authentication System</li>
                        </ul>
                        <ul class="space-y-1 text-sm text-gray-600">
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Basic Admin Dashboard</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Database Design</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Role Management</li>
                        </ul>
                    </div>
                </div>

                <!-- Phase 2 -->
                <div class="bg-white rounded-xl border border-gray-200 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold text-gray-900 flex items-center">
                            <span class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white text-sm mr-3">2</span>
                            Core Operations (Months 3-4)
                        </h3>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">Academic Modules</span>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <ul class="space-y-1 text-sm text-gray-600">
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Fee Management</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Timetable Generation</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Attendance Tracking</li>
                        </ul>
                        <ul class="space-y-1 text-sm text-gray-600">
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Exam Management</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Parent/Student Portal</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Reporting System</li>
                        </ul>
                    </div>
                </div>

                <!-- Phase 3 -->
                <div class="bg-white rounded-xl border border-gray-200 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold text-gray-900 flex items-center">
                            <span class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center text-white text-sm mr-3">3</span>
                            Advanced Features (Months 5-6)
                        </h3>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-semibold">Extensions</span>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <ul class="space-y-1 text-sm text-gray-600">
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Library Management</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Transport System</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Hostel Management</li>
                        </ul>
                        <ul class="space-y-1 text-sm text-gray-600">
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Mobile App (Android/iOS)</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Advanced Reports</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>API Development</li>
                        </ul>
                    </div>
                </div>

                <!-- Phase 4 -->
                <div class="bg-white rounded-xl border border-gray-200 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold text-gray-900 flex items-center">
                            <span class="w-8 h-8 bg-pink-500 rounded-full flex items-center justify-center text-white text-sm mr-3">4</span>
                            Launch & Scale (Month 7+)
                        </h3>
                        <span class="bg-pink-100 text-pink-800 px-3 py-1 rounded-full text-sm font-semibold">Go-to-Market</span>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <ul class="space-y-1 text-sm text-gray-600">
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Performance Optimization</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Security Audits</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Load Testing</li>
                        </ul>
                        <ul class="space-y-1 text-sm text-gray-600">
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Marketing Launch</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Customer Onboarding</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Investor Presentation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Budget & Resources -->
        <section class="mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Budget & Resources</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl border border-blue-200 p-6 text-center">
                    <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-code text-white"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Development</h3>
                    <div class="text-2xl font-bold text-blue-600 mb-1">$100K</div>
                    <p class="text-sm text-gray-600">7-month development cost</p>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl border border-green-200 p-6 text-center">
                    <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-cloud text-white"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Infrastructure</h3>
                    <div class="text-2xl font-bold text-green-600 mb-1">$15K</div>
                    <p class="text-sm text-gray-600">Annual hosting & services</p>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl border border-purple-200 p-6 text-center">
                    <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-bullhorn text-white"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Marketing</h3>
                    <div class="text-2xl font-bold text-purple-600 mb-1">$50K</div>
                    <p class="text-sm text-gray-600">Launch & customer acquisition</p>
                </div>

                <div class="bg-gradient-to-br from-yellow-50 to-orange-50 rounded-xl border border-yellow-200 p-6 text-center">
                    <div class="w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-headset text-white"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Support</h3>
                    <div class="text-2xl font-bold text-yellow-600 mb-1">$30K</div>
                    <p class="text-sm text-gray-600">Annual maintenance & support</p>
                </div>
            </div>
        </section>

        <!-- Project Confirmation -->
        <section class="mb-16" data-aos="fade-up">
            <div class="bg-gradient-to-r from-green-600 to-emerald-600 rounded-2xl p-8 text-white text-center">
                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-handshake text-green-600 text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold mb-4">Project Confirmed & Ready</h2>
                <p class="text-xl text-green-100 mb-6">
                    All requirements documented and approved. Development can begin immediately.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center mb-8">
                    <div>
                        <div class="text-3xl font-bold mb-1">✅</div>
                        <div class="text-green-100 text-sm">Requirements Confirmed</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold mb-1">✅</div>
                        <div class="text-green-100 text-sm">Technology Stack Approved</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold mb-1">✅</div>
                        <div class="text-green-100 text-sm">Timeline Established</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold mb-1">✅</div>
                        <div class="text-green-100 text-sm">Budget Allocated</div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('login') }}" class="bg-white text-green-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        <i class="fas fa-rocket mr-2"></i>Start Development
                    </a>
                    <a href="{{ route('home') }}" class="bg-green-500 text-white px-8 py-3 rounded-lg font-semibold hover:bg-green-400 transition-colors">
                        <i class="fas fa-home mr-2"></i>Back to Home
                    </a>
                </div>
            </div>
        </section>
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
    </script>
</body>
</html>
    
