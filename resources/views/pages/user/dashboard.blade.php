@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            {{ $menu }}
        </h2>
    </div>
	<div class="col-span-12 lg:col-span-6 mt-6">
	    <div class="box p-8 relative overflow-hidden bg-primary intro-y">
	        <div class="leading-[2.15rem] w-full sm:w-72 text-white text-xl -mt-3">Selamat Datang {{ Auth::user()->name }}!</div>
	        <div class="w-full sm:w-72 leading-relaxed text-white/70 dark:text-slate-500 mt-3">Kamu telah melamar pekerjaan sebanyak {{ $apply_count }}x. Tetap semangat ya!</div>
	        <a href="/user/applied/create" class="btn w-32 bg-white dark:bg-darkmode-800 dark:text-white mt-6 sm:mt-10">Lamar Sekarang</a>
	        <img class="hidden sm:block absolute top-0 right-0 w-2/5 -mt-3 mr-2" alt="Midone - HTML Admin Template" src="/assets/images/phone-illustration.svg">
	    </div>
	</div>
</div>
@endsection