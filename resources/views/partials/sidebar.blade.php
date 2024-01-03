<nav class="side-nav">
    <ul>
        <li>
            <a href="/{{ Request::segment(1) }}" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        @if(Auth::user()->is_admin === 1)
        <li>
            <a href="/{{ Request::segment(1) }}" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="user"></i> </div>
                <div class="side-menu__title"> Account </div>
            </a>
        </li>
        @else
        <li>
            <a href="/{{ Request::segment(1) }}" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="file-check-2"></i> </div>
                <div class="side-menu__title"> Applied </div>
            </a>
        </li>
        @endif
    </ul>
</nav>