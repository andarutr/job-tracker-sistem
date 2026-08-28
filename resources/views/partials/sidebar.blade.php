<div ng-controller="SidebarController">
    <nav class="side-nav">
        <ul>
            <li>
                <a href="/{{ Request::segment(1) }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="gauge"></i> </div>
                    <div class="side-menu__title"> Dashboard </div>
                </a>
            </li>
            @if(auth()->user()->is_admin === 1)
            <li>
                <a href="/admin/account" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="user"></i> </div>
                    <div class="side-menu__title"> Account </div>
                </a>
            </li>
            @else
            <li>
                <a href="/user/applied" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="file-check-2"></i> </div>
                    <div class="side-menu__title"> Applied </div>
                </a>
            </li>
            @endif

            <li class="side-nav__devider my-6"></li>
            <li>
                <a href="javascript:;" ng-click="openChangelog()" class="side-menu">
                    <div class="side-menu__icon"> <i data-lucide="history"></i> </div>
                    <div class="side-menu__title"> Changelog <span class="ml-2 text-xs bg-primary/20 text-primary px-2 py-0.5 rounded-full font-semibold">v2.0.0</span> </div>
                </a>
            </li>
        </ul>
    </nav>

    <!-- AngularJS Changelog Modal -->
    <div ng-show="showChangelogModal" class="ng-cloak fixed inset-0 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm" style="z-index: 999999;" ng-click="closeChangelog()">
        <div ng-click="$event.stopPropagation()" class="bg-white dark:bg-darkmode-600 rounded-xl shadow-2xl max-w-2xl w-full max-h-[85vh] flex flex-col overflow-hidden border border-slate-200 dark:border-darkmode-400">
            
            <!-- Modal Header -->
            <div class="px-6 py-4 border-b border-slate-200 dark:border-darkmode-400 flex items-center justify-between bg-slate-50 dark:bg-darkmode-700">
                <div class="flex items-center gap-3">
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
                <div class="relative pl-6 border-l-2 border-primary">
                    <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-primary ring-4 ring-white dark:ring-darkmode-600"></div>
                    <div class="flex items-center justify-between mb-1.5">
                        <div class="flex items-center gap-2">
                            <span class="font-bold text-lg text-slate-900 dark:text-white">v2.0.0</span>
                            <span class="bg-emerald-100 text-emerald-700 dark:bg-emerald-900/40 dark:text-emerald-400 text-xs px-2.5 py-0.5 rounded-full font-semibold">Latest Release</span>
                        </div>
                        <span class="text-xs text-slate-400 font-medium">29 Agustus 2026</span>
                    </div>
                    <p class="font-semibold text-sm text-slate-800 dark:text-slate-100 mb-2">Major Architecture & AngularJS (v1.x) Refactoring</p>
                    <ul class="space-y-1.5 text-xs text-slate-600 dark:text-slate-300">
                        <li class="flex items-start gap-2">
                            <i class="bi bi-check2-circle text-primary mt-0.5"></i>
                            <span><strong>Migrasi AngularJS (v1.x):</strong> Mengubah seluruh fitur dari Livewire ke controller & direktif AngularJS murni.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="bi bi-check2-circle text-primary mt-0.5"></i>
                            <span><strong>Full Eloquent ORM:</strong> Menggantikan seluruh <code class="bg-slate-100 dark:bg-darkmode-800 px-1 py-0.5 rounded text-primary">DB::table</code> Query Builder dengan Model Eloquent (<code class="bg-slate-100 dark:bg-darkmode-800 px-1 py-0.5 rounded text-primary">User</code> & <code class="bg-slate-100 dark:bg-darkmode-800 px-1 py-0.5 rounded text-primary">Application</code>).</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="bi bi-check2-circle text-primary mt-0.5"></i>
                            <span><strong>Repository Pattern:</strong> Mengimplementasikan <code class="bg-slate-100 dark:bg-darkmode-800 px-1 py-0.5 rounded text-primary">UserRepository</code> dan <code class="bg-slate-100 dark:bg-darkmode-800 px-1 py-0.5 rounded text-primary">ApplicationRepository</code> terikat via <code class="bg-slate-100 dark:bg-darkmode-800 px-1 py-0.5 rounded text-primary">RepositoryServiceProvider</code>.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="bi bi-check2-circle text-primary mt-0.5"></i>
                            <span><strong>Form Request Validation:</strong> Pemisahan aturan validasi ke kelas <code class="bg-slate-100 dark:bg-darkmode-800 px-1 py-0.5 rounded text-primary">App\Http\Requests</code> (Profile, Account, Application).</span>
                        </li>
                    </ul>
                </div>

                <!-- Version 1.1.0 -->
                <div class="relative pl-6 border-l-2 border-slate-300 dark:border-slate-700">
                    <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-slate-300 dark:bg-slate-700 ring-4 ring-white dark:ring-darkmode-600"></div>
                    <div class="flex items-center justify-between mb-1.5">
                        <span class="font-bold text-base text-slate-900 dark:text-white">v1.1.0</span>
                        <span class="text-xs text-slate-400 font-medium">28 Agustus 2026</span>
                    </div>
                    <p class="font-semibold text-sm text-slate-800 dark:text-slate-100 mb-2">Dark Mode Feature & UI Enhancements</p>
                    <ul class="space-y-1.5 text-xs text-slate-600 dark:text-slate-300">
                        <li class="flex items-start gap-2">
                            <i class="bi bi-check2-circle text-slate-400 mt-0.5"></i>
                            <span>Implementasi Dark Mode toggle pada navbar aplikasi.</span>
                        </li>
                    </ul>
                </div>

                <!-- Version 1.0.0 -->
                <div class="relative pl-6 border-l-2 border-slate-300 dark:border-slate-700">
                    <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-slate-300 dark:bg-slate-700 ring-4 ring-white dark:ring-darkmode-600"></div>
                    <div class="flex items-center justify-between mb-1.5">
                        <span class="font-bold text-base text-slate-900 dark:text-white">v1.0.0</span>
                        <span class="text-xs text-slate-400 font-medium">03 Januari 2024</span>
                    </div>
                    <p class="font-semibold text-sm text-slate-800 dark:text-slate-100 mb-2">Initial Release Job Tracking System</p>
                    <ul class="space-y-1.5 text-xs text-slate-600 dark:text-slate-400">
                        <li class="flex items-start gap-2">
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
</div>
