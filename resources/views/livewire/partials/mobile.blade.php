<?php

use function Livewire\Volt\{state};

//

?>

<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Midone - HTML Admin Template" class="w-6" src="/assets/images/logo.svg">
        </a>
        <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <div class="scrollable">
        <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        <ul class="scrollable__content py-2">
            <li>
                <a href="/{{ Request::segment(1) }}" class="menu">
                    <div class="menu__icon"> <i data-lucide="gauge"></i> </div>
                    <div class="menu__title"> Dashboard </div>
                </a>
            </li>
            @if(auth()->user()->is_admin === 1)
            <li>
                <a href="/admin/account" class="menu">
                    <div class="menu__icon"> <i data-lucide="user"></i> </div>
                    <div class="menu__title"> Account </div>
                </a>
            </li>
            @else
            <li>
                <a href="/user/applied" class="menu">
                    <div class="menu__icon"> <i data-lucide="file-check-2"></i> </div>
                    <div class="menu__title"> Applied </div>
                </a>
            </li>
            @endif
        </ul>
    </div>
</div>
