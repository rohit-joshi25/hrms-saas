<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pre-Project Documentation - SavantX HRMS</title>

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
                            <i class="fas fa-users text-white text-sm"></i>
                        </div>
                        <span class="text-xl font-bold text-gray-900">SavantX HRMS</span>
                    </a>
                    <span class="text-gray-400">|</span>
                    <span class="text-lg font-semibold text-blue-600">Pre-Project Documentation</span>
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
                AI-Powered HRMS SaaS
            </h1>
            <h2 class="text-2xl md:text-3xl font-light text-blue-200 mb-6">
                Pre-Project Documentation & Requirements
            </h2>
            <p class="text-lg text-gray-300 mb-8 max-w-3xl mx-auto">
                Comprehensive project specification for building enterprise-level Human Resource Management System
                serving 100,000+ companies with AI-powered automation and multi-tenant architecture.
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
                                <p><strong>Project Name:</strong> AI-Powered HRMS by SavantX Technologies</p>
                                <p><strong>Project Type:</strong> Enterprise SaaS Platform</p>
                                <p><strong>Industry:</strong> Human Resource Management Technology</p>
                                <p><strong>Business Model:</strong> B2B SaaS with Multi-Tenant Architecture</p>
                            </div>
                            <div class="bg-white rounded-lg p-4 border border-blue-200">
                                <p><strong>Target Market:</strong> Small to Enterprise businesses (10-50,000 employees)</p>
                                <p><strong>Geographic Scope:</strong> Global with multi-region deployment</p>
                                <p><strong>Revenue Model:</strong> Subscription-based with tiered pricing</p>
                                <p><strong>Competitive Advantage:</strong> AI-first approach with advanced automation</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Business Objectives</h3>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <i class="fas fa-target text-blue-500 mr-3 mt-1"></i>
                                <div>
                                    <strong>Primary Goal:</strong> Capture 5% of global HRMS market share
                                    <p class="text-sm text-gray-600">Targeting $500M ARR by Year 5 in a $10B+ market</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-users text-green-500 mr-3 mt-1"></i>
                                <div>
                                    <strong>Scale Target:</strong> 100,000+ companies, 10M+ employees managed
                                    <p class="text-sm text-gray-600">Supporting organizations from 10 to 50,000+ employees</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-globe text-purple-500 mr-3 mt-1"></i>
                                <div>
                                    <strong>Global Reach:</strong> Multi-region deployment with local compliance
                                    <p class="text-sm text-gray-600">North America, Europe, Asia-Pacific, emerging markets</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-rocket text-red-500 mr-3 mt-1"></i>
                                <div>
                                    <strong>Innovation Leadership:</strong> First AI-native HRMS platform
                                    <p class="text-sm text-gray-600">Setting new industry standards for automation and insights</p>
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
                            To become the world's leading AI-powered HRMS platform, transforming how organizations
                            manage their workforce through intelligent automation, predictive analytics, and seamless
                            user experiences that drive employee engagement and business growth.
                        </p>
                    </div>
                    <div class="bg-gradient-to-br from-green-100 to-emerald-100 rounded-lg p-6">
                        <h4 class="text-lg font-semibold text-gray-900 mb-3 flex items-center">
                            <i class="fas fa-bullseye text-green-600 mr-2"></i>
                            Our Mission
                        </h4>
                        <p class="text-gray-700">
                            To democratize advanced HR technology by providing an accessible, scalable, and intelligent
                            HRMS solution that empowers organizations of all sizes to optimize their human capital
                            management and achieve operational excellence.
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
                        Current Market Problems
                    </h3>

                    <div class="space-y-6">
                        <div class="bg-white rounded-lg p-4 border-l-4 border-red-500">
                            <h4 class="font-semibold text-gray-900 mb-2">Fragmented Systems</h4>
                            <p class="text-gray-700 text-sm mb-2">
                                Companies use 5-15 different tools for HR functions: separate systems for payroll,
                                attendance, performance, recruitment, and employee data management.
                            </p>
                            <p class="text-red-600 text-sm"><strong>Impact:</strong> Data silos, integration costs, training overhead</p>
                        </div>

                        <div class="bg-white rounded-lg p-4 border-l-4 border-orange-500">
                            <h4 class="font-semibold text-gray-900 mb-2">Manual Processes</h4>
                            <p class="text-gray-700 text-sm mb-2">
                                90% of HR tasks still require manual intervention: leave approvals, payroll calculations,
                                performance reviews, and compliance reporting.
                            </p>
                            <p class="text-orange-600 text-sm"><strong>Impact:</strong> Human errors, delays, compliance risks</p>
                        </div>

                        <div class="bg-white rounded-lg p-4 border-l-4 border-yellow-500">
                            <h4 class="font-semibold text-gray-900 mb-2">Lack of Intelligence</h4>
                            <p class="text-gray-700 text-sm mb-2">
                                Current solutions provide basic reporting but lack predictive analytics, AI insights,
                                or intelligent automation capabilities.
                            </p>
                            <p class="text-yellow-600 text-sm"><strong>Impact:</strong> Reactive decisions, missed opportunities</p>
                        </div>

                        <div class="bg-white rounded-lg p-4 border-l-4 border-purple-500">
                            <h4 class="font-semibold text-gray-900 mb-2">Scalability Limitations</h4>
                            <p class="text-gray-700 text-sm mb-2">
                                Existing solutions struggle with rapid growth, requiring expensive migrations and
                                custom development for enterprise features.
                            </p>
                            <p class="text-purple-600 text-sm"><strong>Impact:</strong> Migration costs, downtime, feature limitations</p>
                        </div>
                    </div>

                    <div class="mt-8 grid grid-cols-2 gap-4">
                        <div class="bg-red-100 rounded-lg p-4 text-center">
                            <div class="text-3xl font-bold text-red-600 mb-1">40%</div>
                            <div class="text-sm text-gray-600">HR Time Wasted on Manual Tasks</div>
                        </div>
                        <div class="bg-orange-100 rounded-lg p-4 text-center">
                            <div class="text-3xl font-bold text-orange-600 mb-1">$75K+</div>
                            <div class="text-sm text-gray-600">Annual Inefficiency Cost per 100 Employees</div>
                        </div>
                    </div>
                </div>

                <!-- Comprehensive Solution -->
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl border border-green-200 p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-lightbulb text-green-500 mr-3"></i>
                        SavantX HRMS Solution
                    </h3>

                    <div class="space-y-6">
                        <div class="bg-white rounded-lg p-4 border-l-4 border-green-500">
                            <h4 class="font-semibold text-gray-900 mb-2">Unified Platform</h4>
                            <p class="text-gray-700 text-sm mb-2">
                                Single integrated platform handling all HR functions with real-time data synchronization
                                across modules and intelligent workflow automation.
                            </p>
                            <p class="text-green-600 text-sm"><strong>Benefit:</strong> 90% reduction in tool complexity</p>
                        </div>

                        <div class="bg-white rounded-lg p-4 border-l-4 border-blue-500">
                            <h4 class="font-semibold text-gray-900 mb-2">AI-First Architecture</h4>
                            <p class="text-gray-700 text-sm mb-2">
                                Built-in machine learning for resume screening, predictive analytics for employee retention,
                                and intelligent chatbot for instant HR support.
                            </p>
                            <p class="text-blue-600 text-sm"><strong>Benefit:</strong> 75% faster decision making</p>
                        </div>

                        <div class="bg-white rounded-lg p-4 border-l-4 border-purple-500">
                            <h4 class="font-semibold text-gray-900 mb-2">Multi-Tenant Scalability</h4>
                            <p class="text-gray-700 text-sm mb-2">
                                Cloud-native architecture with automatic scaling, supporting unlimited companies
                                with complete data isolation and custom configurations.
                            </p>
                            <p class="text-purple-600 text-sm"><strong>Benefit:</strong> Scales from 10 to 50,000+ employees seamlessly</p>
                        </div>

                        <div class="bg-white rounded-lg p-4 border-l-4 border-indigo-500">
                            <h4 class="font-semibold text-gray-900 mb-2">Enterprise Security</h4>
                            <p class="text-gray-700 text-sm mb-2">
                                SOC 2 Type II certified with end-to-end encryption, role-based access control,
                                and comprehensive audit logging for compliance.
                            </p>
                            <p class="text-indigo-600 text-sm"><strong>Benefit:</strong> Enterprise-ready from day one</p>
                        </div>
                    </div>

                    <div class="mt-8 grid grid-cols-2 gap-4">
                        <div class="bg-green-100 rounded-lg p-4 text-center">
                            <div class="text-3xl font-bold text-green-600 mb-1">85%</div>
                            <div class="text-sm text-gray-600">Expected Cost Reduction</div>
                        </div>
                        <div class="bg-blue-100 rounded-lg p-4 text-center">
                            <div class="text-3xl font-bold text-blue-600 mb-1">350%</div>
                            <div class="text-sm text-gray-600">Projected ROI within 12 months</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Market Opportunity -->
            <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl border border-indigo-200 p-8 mt-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Market Opportunity</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
                    <div>
                        <div class="text-3xl font-bold text-indigo-600 mb-2">$12.9B</div>
                        <div class="text-sm text-gray-600">Global HRMS Market Size (2024)</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-purple-600 mb-2">8.7%</div>
                        <div class="text-sm text-gray-600">Annual Market Growth Rate</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-blue-600 mb-2">2.3M+</div>
                        <div class="text-sm text-gray-600">Target Companies Globally</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-green-600 mb-2">$500M</div>
                        <div class="text-sm text-gray-600">Our 5-Year ARR Target</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comprehensive Feature Documentation -->
        <section class="mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">
                Comprehensive Feature Documentation (75+ Features)
            </h2>

            <!-- Core HR Modules -->
            <div class="space-y-8">

                <!-- Employee Management Module -->
                <div class="bg-white rounded-xl border border-gray-200 p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-blue-500 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-users text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Employee Management Module</h3>
                            <p class="text-gray-600">Complete employee lifecycle management from hire to retire</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Core Features</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Employee profile management</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Organizational structure (departments, designations)</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Employee onboarding workflows</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Document management & storage</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Employee directory & search</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Bulk employee import/export</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Advanced Features</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Custom employee fields</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Employee lifecycle tracking</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Automated workflows</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Integration with external systems</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Advanced reporting & analytics</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Employee self-service portal</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Business Impact</h4>
                            <div class="space-y-3">
                                <div class="bg-blue-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-blue-600">60%</div>
                                    <div class="text-xs text-gray-600">Faster onboarding</div>
                                </div>
                                <div class="bg-green-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-green-600">90%</div>
                                    <div class="text-xs text-gray-600">Data accuracy</div>
                                </div>
                                <div class="bg-purple-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-purple-600">50%</div>
                                    <div class="text-xs text-gray-600">Admin time saved</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Attendance & Time Tracking Module -->
                <div class="bg-white rounded-xl border border-gray-200 p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-green-500 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-fingerprint text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Advanced Attendance & Time Tracking</h3>
                            <p class="text-gray-600">Multi-modal attendance tracking with intelligent automation</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Tracking Methods</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Biometric fingerprint scanning</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Face recognition technology</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>GPS-based location tracking</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Manual clock-in with approval</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Web-based time tracking</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Mobile app integration</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Smart Features</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Automatic overtime calculation</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Shift pattern recognition</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Break time monitoring</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Late arrival notifications</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Attendance policy enforcement</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Real-time attendance dashboard</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">ROI Metrics</h4>
                            <div class="space-y-3">
                                <div class="bg-green-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-green-600">95%</div>
                                    <div class="text-xs text-gray-600">Attendance accuracy</div>
                                </div>
                                <div class="bg-blue-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-blue-600">80%</div>
                                    <div class="text-xs text-gray-600">Time theft reduction</div>
                                </div>
                                <div class="bg-purple-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-purple-600">$25K</div>
                                    <div class="text-xs text-gray-600">Annual savings per 100 employees</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payroll & Benefits Module -->
                <div class="bg-white rounded-xl border border-gray-200 p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-yellow-500 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-money-bill-wave text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Payroll & Benefits Management</h3>
                            <p class="text-gray-600">Automated payroll processing with compliance and tax management</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Payroll Features</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Automated salary calculations</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Tax deductions & compliance</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Overtime & bonus calculations</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Multi-currency support</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Payslip generation & distribution</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Bank integration for direct deposits</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Benefits & Compliance</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Benefits administration</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Insurance management</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Tax compliance (multiple countries)</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Statutory reporting</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Provident fund management</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Year-end tax processing</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Business Value</h4>
                            <div class="space-y-3">
                                <div class="bg-yellow-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-yellow-600">99.9%</div>
                                    <div class="text-xs text-gray-600">Payroll accuracy</div>
                                </div>
                                <div class="bg-green-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-green-600">70%</div>
                                    <div class="text-xs text-gray-600">Processing time reduction</div>
                                </div>
                                <div class="bg-blue-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-blue-600">$40K</div>
                                    <div class="text-xs text-gray-600">Annual compliance savings</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AI-Powered Features Module -->
                <div class="bg-white rounded-xl border border-gray-200 p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-purple-500 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-robot text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">AI-Powered Intelligence Module</h3>
                            <p class="text-gray-600">Machine learning and artificial intelligence for smart HR decisions</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">AI Automation</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Intelligent resume screening</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Automated interview scheduling</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Smart leave approval recommendations</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Performance prediction algorithms</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Salary benchmarking AI</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Employee retention predictions</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Analytics & Insights</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Predictive workforce analytics</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Employee sentiment analysis</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Performance trend identification</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Cost optimization recommendations</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Skill gap analysis</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Diversity & inclusion metrics</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Competitive Advantage</h4>
                            <div class="space-y-3">
                                <div class="bg-purple-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-purple-600">90%</div>
                                    <div class="text-xs text-gray-600">Faster hiring decisions</div>
                                </div>
                                <div class="bg-blue-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-blue-600">85%</div>
                                    <div class="text-xs text-gray-600">Improved candidate matching</div>
                                </div>
                                <div class="bg-green-50 rounded-lg p-3">
                                    <div class="text-lg font-bold text-green-600">45%</div>
                                    <div class="text-xs text-gray-600">Retention improvement</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Modules Summary -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-gradient-to-br from-indigo-50 to-blue-50 rounded-xl border border-indigo-200 p-6">
                        <div class="w-12 h-12 bg-indigo-500 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-chart-line text-white"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Performance Management</h4>
                        <p class="text-sm text-gray-600 mb-3">360-degree reviews, KPI tracking, goal management</p>
                        <div class="text-xs text-gray-500">
                            <div class="font-medium">Key Features:</div>
                            <div>• Review cycles & templates</div>
                            <div>• Goal setting & tracking</div>
                            <div>• Peer feedback system</div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-red-50 to-pink-50 rounded-xl border border-red-200 p-6">
                        <div class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-user-plus text-white"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Recruitment & Hiring</h4>
                        <p class="text-sm text-gray-600 mb-3">AI-powered candidate screening and interview management</p>
                        <div class="text-xs text-gray-500">
                            <div class="font-medium">Key Features:</div>
                            <div>• Job posting management</div>
                            <div>• Candidate pipeline</div>
                            <div>• Interview scheduling</div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-cyan-50 to-teal-50 rounded-xl border border-cyan-200 p-6">
                        <div class="w-12 h-12 bg-cyan-500 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-tasks text-white"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Task & Project Management</h4>
                        <p class="text-sm text-gray-600 mb-3">Onboarding tasks, training assignments, project tracking</p>
                        <div class="text-xs text-gray-500">
                            <div class="font-medium">Key Features:</div>
                            <div>• Onboarding workflows</div>
                            <div>• Training management</div>
                            <div>• Task dependencies</div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-xl border border-orange-200 p-6">
                        <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-file-invoice-dollar text-white"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Expense Management</h4>
                        <p class="text-sm text-gray-600 mb-3">Digital expense tracking, approval workflows, reimbursements</p>
                        <div class="text-xs text-gray-500">
                            <div class="font-medium">Key Features:</div>
                            <div>• Receipt scanning</div>
                            <div>• Approval workflows</div>
                            <div>• Reimbursement processing</div>
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
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Employee Management</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Department Setup</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Authentication System</li>
                        </ul>
                        <ul class="space-y-1 text-sm text-gray-600">
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Basic Admin Dashboard</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Database Design</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Multi-tenant Architecture</li>
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
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">HR Modules</span>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <ul class="space-y-1 text-sm text-gray-600">
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Payroll Processing</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Leave Management</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Attendance Tracking</li>
                        </ul>
                        <ul class="space-y-1 text-sm text-gray-600">
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Performance Reviews</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Employee Portal</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Reporting System</li>
                        </ul>
                    </div>
                </div>

                <!-- Phase 3 -->
                <div class="bg-white rounded-xl border border-gray-200 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold text-gray-900 flex items-center">
                            <span class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center text-white text-sm mr-3">3</span>
                            AI Integration (Months 5-6)
                        </h3>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-semibold">AI Features</span>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <ul class="space-y-1 text-sm text-gray-600">
                            <li><i class="fas fa-check text-green-500 mr-2"></i>AI Chatbot</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Resume Analysis</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Predictive Analytics</li>
                        </ul>
                        <ul class="space-y-1 text-sm text-gray-600">
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Mobile App</li>
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
                    <div class="text-2xl font-bold text-blue-600 mb-1">$150K</div>
                    <p class="text-sm text-gray-600">7-month development cost</p>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl border border-green-200 p-6 text-center">
                    <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-cloud text-white"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Infrastructure</h3>
                    <div class="text-2xl font-bold text-green-600 mb-1">$25K</div>
                    <p class="text-sm text-gray-600">Annual hosting & services</p>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl border border-purple-200 p-6 text-center">
                    <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-bullhorn text-white"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Marketing</h3>
                    <div class="text-2xl font-bold text-purple-600 mb-1">$75K</div>
                    <p class="text-sm text-gray-600">Launch & customer acquisition</p>
                </div>

                <div class="bg-gradient-to-br from-yellow-50 to-orange-50 rounded-xl border border-yellow-200 p-6 text-center">
                    <div class="w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-headset text-white"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Support</h3>
                    <div class="text-2xl font-bold text-yellow-600 mb-1">$50K</div>
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
