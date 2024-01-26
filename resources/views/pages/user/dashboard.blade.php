@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            {{ $menu }}
        </h2>
    </div>
    <div class="col-span-12 mt-8">
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5 text-center">
                        <div class="text-3xl font-medium leading-8 mt-6">{{ $send_cv }}</div>
                        <div class="text-base text-slate-500 mt-1">Send CV</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5 text-center">
                        <div class="text-3xl font-medium leading-8 mt-6">{{ $viewed }}</div>
                        <div class="text-base text-slate-500 mt-1">Viewed</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5 text-center">
                        <div class="text-3xl font-medium leading-8 mt-6">{{ $interview_hrd }}</div>
                        <div class="text-base text-slate-500 mt-1">Interview HRD</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5 text-center">
                        <div class="text-3xl font-medium leading-8 mt-6">{{ $interview_user }}</div>
                        <div class="text-base text-slate-500 mt-1">Interview User</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5 text-center">
                        <div class="text-3xl font-medium leading-8 mt-6">{{ $failed }}</div>
                        <div class="text-base text-slate-500 mt-1">Failed</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5 text-center">
                        <div class="text-3xl font-medium leading-8 mt-6">{{ $apply_count }}</div>
                        <div class="text-base text-slate-500 mt-1">Total Lamaran</div>
                    </div>
                </div>
            </div>
        </div>
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