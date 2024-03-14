<?php

use function Livewire\Volt\{state};
use Illuminate\Support\Facades\Auth;

$logout = function(){
    Auth::logout();
    toastr()->success('Anda telah logout!');
    return redirect('/login');   
};

?>

<div class="top-bar-boxed h-[70px] md:h-[65px] z-[51] border-b border-white/[0.08] mt-12 md:mt-0 -mx-3 sm:-mx-8 md:-mx-0 px-3 md:border-b-0 relative md:fixed md:inset-x-0 md:top-0 sm:px-8 md:px-10 md:pt-10 md:bg-gradient-to-b md:from-slate-100 md:to-transparent dark:md:from-darkmode-700">
    <div class="h-full flex items-center">
        <!-- BEGIN: Logo -->
        <a href="" class="logo -intro-x hidden md:flex xl:w-[180px] block">
            <img alt="Midone - HTML Admin Template" class="logo__image w-6" src="/assets/images/logo.svg">
            <span class="logo__text text-white text-lg ml-3"> Enigma </span> 
        </a>
        <!-- END: Logo -->
        <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto">
        </nav>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Search -->
        <div class="intro-x relative mr-3 sm:mr-6">
        </div>
        <!-- END: Search -->
        <!-- BEGIN: Notifications -->
        <div class="intro-x dropdown mr-4 sm:mr-6">
            <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
            <div class="notification-content pt-2 dropdown-menu">
                <div class="notification-content__box dropdown-content">
                    <div class="notification-content__title">Notifications</div>
                    <div class="cursor-pointer relative flex items-center ">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="https://www.profilebakery.com/wp-content/uploads/2023/04/PROFILE-PICTURE-FOR-FACEBOOK.jpg">
                            <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Bapak</a> 
                                <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">{{ \Carbon\Carbon::parse(now())->format('d F Y') }}</div>
                            </div>
                            <div class="w-full truncate text-slate-500 mt-0.5">Tetep semangat! Jangan lupa NGOPI! </div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-3">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="https://www.profilebakery.com/wp-content/uploads/2023/04/AI-Profile-Picture.jpg">
                            <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Mamak</a> 
                                <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">{{ \Carbon\Carbon::parse(now())->format('d F Y') }}</div>
                            </div>
                            <div class="w-full truncate text-slate-500 mt-0.5">Jangan lupa berdoa sebelum interview.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Notifications -->
        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                <img alt="Midone - HTML Admin Template" src="/assets/images/profile/{{ Auth::user()->picture }}">
            </div>
            <div class="dropdown-menu w-56">
                <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                    <li class="p-2">
                        <div class="font-medium">{{ Auth::user()->name }}</div>
                        <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">{{ Auth::user()->is_admin === 1 ? 'Admin' : 'User' }}</div>
                    </li>
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>
                    <li>
                        <a href="/{{ Request::segment(1) }}/settings/profile" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                    </li>
                    <li>
                        <a href="/{{ Request::segment(1) }}/settings/change-password" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>
                    @volt
                    <li>
                        <a class="dropdown-item hover:bg-white/5" wire:click="logout" wire:confirm="Yakin ingin logout?"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                    </li>
                    @endvolt
                </ul>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
</div>