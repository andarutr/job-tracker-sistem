<!DOCTYPE html>
<html lang="en" class="light" ng-app="jobTrackerApp">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/images/logo.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Dashboard' }} - Job Tracking System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
    <style>[ng-cloak], .ng-cloak, .ng-hide { display: none !important; }</style>
</head>
<body class="py-5 md:py-0" ng-controller="SidebarController">
    @include('partials.mobile')
    @include('partials.navbar')
    <div class="flex overflow-hidden">
        @include('partials.sidebar')

        @yield('content')
    </div>

    <!-- BEGIN: System Changelog Modal (AngularJS at Body Level) -->
    <div ng-show="showChangelogModal" class="ng-cloak flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm" style="position: fixed !important; top: 0 !important; left: 0 !important; right: 0 !important; bottom: 0 !important; width: 100vw !important; height: 100vh !important; z-index: 999999 !important;" ng-click="closeChangelog()">
        <div ng-click="$event.stopPropagation()" class="bg-white dark:bg-darkmode-600 rounded-xl shadow-2xl flex flex-col overflow-hidden border border-slate-200 dark:border-darkmode-400" style="max-width: 650px; width: 95%; max-height: 85vh; margin: auto;">
            
            <!-- Modal Header -->
            <div class="px-6 py-4 border-b border-slate-200 dark:border-darkmode-400 flex items-center justify-between bg-slate-50 dark:bg-darkmode-700">
                <div class="flex items-center" style="gap: 12px;">
                    <div class="w-10 h-10 rounded-full bg-primary/10 text-primary flex items-center justify-center">
                        <i class="bi bi-clock-history text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-slate-800 dark:text-white">System Changelog</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400">Catatan riwayat pembaruan & versi aplikasi</p>
                    </div>
                </div>
                <button ng-click="closeChangelog()" type="button" class="text-slate-400 hover:text-slate-600 dark:hover:text-white p-2 rounded-lg hover:bg-slate-200 dark:hover:bg-darkmode-400 transition-colors">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="p-6 overflow-y-auto space-y-6 flex-1 text-slate-600 dark:text-slate-300">
                
                <!-- Version 2.0.0 -->
                <div class="relative mb-6" style="padding-left: 28px; border-left: 2px solid #3b82f6;">
                    <div style="position: absolute; left: -9px; top: 2px; width: 16px; height: 16px; border-radius: 9999px; background-color: #3b82f6; border: 3px solid #ffffff;"></div>
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center" style="gap: 8px;">
                            <span class="font-bold text-lg text-slate-900 dark:text-white">v2.0.0</span>
                            <span class="bg-emerald-100 text-emerald-700 dark:bg-emerald-900/40 dark:text-emerald-400 text-xs px-2.5 py-0.5 rounded-full font-semibold">Latest Release</span>
                        </div>
                        <span class="text-xs text-slate-400 font-medium">29 Agustus 2026</span>
                    </div>
                    <p class="font-semibold text-sm text-slate-800 dark:text-slate-100 mb-2">Major Architecture & AngularJS (v1.x) Refactoring</p>
                    <ul class="space-y-2 text-xs text-slate-600 dark:text-slate-300">
                        <li class="flex items-start" style="gap: 8px;">
                            <i class="bi bi-check2-circle text-primary mt-0.5"></i>
                            <span><strong>Migrasi AngularJS (v1.x):</strong> Mengubah seluruh fitur dari Livewire ke controller & direktif AngularJS murni.</span>
                        </li>
                        <li class="flex items-start" style="gap: 8px;">
                            <i class="bi bi-check2-circle text-primary mt-0.5"></i>
                            <span><strong>Full Eloquent ORM:</strong> Menggantikan seluruh <code class="bg-slate-100 dark:bg-darkmode-800 px-1.5 py-0.5 rounded text-primary font-mono">User</code> & <code class="bg-slate-100 dark:bg-darkmode-800 px-1.5 py-0.5 rounded text-primary font-mono">Application</code> Query Builder.</span>
                        </li>
                        <li class="flex items-start" style="gap: 8px;">
                            <i class="bi bi-check2-circle text-primary mt-0.5"></i>
                            <span><strong>Repository Pattern:</strong> Mengimplementasikan <code class="bg-slate-100 dark:bg-darkmode-800 px-1.5 py-0.5 rounded text-primary font-mono">UserRepository</code> dan <code class="bg-slate-100 dark:bg-darkmode-800 px-1.5 py-0.5 rounded text-primary font-mono">ApplicationRepository</code> terikat via <code class="bg-slate-100 dark:bg-darkmode-800 px-1.5 py-0.5 rounded text-primary font-mono">RepositoryServiceProvider</code>.</span>
                        </li>
                        <li class="flex items-start" style="gap: 8px;">
                            <i class="bi bi-check2-circle text-primary mt-0.5"></i>
                            <span><strong>Form Request Validation:</strong> Pemisahan aturan validasi ke kelas <code class="bg-slate-100 dark:bg-darkmode-800 px-1.5 py-0.5 rounded text-primary font-mono">App\Http\Requests</code> (Profile, Account, Application).</span>
                        </li>
                    </ul>
                </div>

                <!-- Version 1.1.0 -->
                <div class="relative mb-6" style="padding-left: 28px; border-left: 2px solid #cbd5e1;">
                    <div style="position: absolute; left: -9px; top: 2px; width: 16px; height: 16px; border-radius: 9999px; background-color: #94a3b8; border: 3px solid #ffffff;"></div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="font-bold text-base text-slate-900 dark:text-white">v1.1.0</span>
                        <span class="text-xs text-slate-400 font-medium">28 Agustus 2026</span>
                    </div>
                    <p class="font-semibold text-sm text-slate-800 dark:text-slate-100 mb-2">Dark Mode Feature & UI Enhancements</p>
                    <ul class="space-y-2 text-xs text-slate-600 dark:text-slate-300">
                        <li class="flex items-start" style="gap: 8px;">
                            <i class="bi bi-check2-circle text-slate-400 mt-0.5"></i>
                            <span>Implementasi Dark Mode toggle pada navbar aplikasi.</span>
                        </li>
                    </ul>
                </div>

                <!-- Version 1.0.0 -->
                <div class="relative" style="padding-left: 28px; border-left: 2px solid #cbd5e1;">
                    <div style="position: absolute; left: -9px; top: 2px; width: 16px; height: 16px; border-radius: 9999px; background-color: #94a3b8; border: 3px solid #ffffff;"></div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="font-bold text-base text-slate-900 dark:text-white">v1.0.0</span>
                        <span class="text-xs text-slate-400 font-medium">03 Januari 2024</span>
                    </div>
                    <p class="font-semibold text-sm text-slate-800 dark:text-slate-100 mb-2">Initial Release Job Tracking System</p>
                    <ul class="space-y-2 text-xs text-slate-600 dark:text-slate-400">
                        <li class="flex items-start" style="gap: 8px;">
                            <i class="bi bi-check2-circle text-slate-400 mt-0.5"></i>
                            <span>Sistem autentikasi & manajemen akun (Admin & User).</span>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Modal Footer -->
            <div class="px-6 py-3 border-t border-slate-200 dark:border-darkmode-400 flex justify-end bg-slate-50 dark:bg-darkmode-700">
                <button ng-click="closeChangelog()" type="button" class="btn btn-secondary px-5 py-2 text-xs font-medium">Tutup</button>
            </div>

        </div>
    </div>
    <!-- END: System Changelog Modal -->

    <!-- BEGIN: JS Assets-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/angular-app.js') }}"></script>
    @stack('scripts')
</body>
</html>