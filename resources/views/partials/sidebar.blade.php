<div>
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
</div>
