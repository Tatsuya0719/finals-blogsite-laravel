@extends('layouts.master')

@section('title', 'Login')

@section('content')
<div class="min-h-screen bg-[#0f172a] flex items-center justify-center px-4">
    <div class="relative w-full max-w-md border border-blue-500 rounded-md shadow-2xl p-8 bg-gradient-to-br from-[#0f172a] via-[#1e293b] to-[#0f172a]">

        {{-- Futuristic top notch --}}
        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-blue-500 px-6 py-2 rounded-t-lg text-sm font-bold tracking-widest text-[#0f172a]">
            LOGIN
        </div>

        <form action="{{ route('login') }}" method="POST" class="space-y-6 mt-8 z-10">
            @csrf

            {{-- Email field --}}
            <div>
                <label for="email" class="text-blue-400 block mb-1 text-sm">Username / Email</label>
                <div class="flex items-center border border-blue-500 rounded-md px-3 py-2 bg-[#0f172a]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.386 0 4.61.623 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <input type="email" name="email" id="email" required
                        class="bg-transparent w-full text-blue-200 focus:outline-none placeholder-blue-500"
                        placeholder="Enter your email">
                </div>
            </div>

            {{-- Password field --}}
            <div>
                <label for="password" class="text-blue-400 block mb-1 text-sm">Password</label>
                <div class="flex items-center border border-blue-500 rounded-md px-3 py-2 bg-[#0f172a]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m0-10a4 4 0 00-4 4v4h8v-4a4 4 0 00-4-4z" />
                    </svg>
                    <input type="password" name="password" id="password" required
                        class="bg-transparent w-full text-blue-200 focus:outline-none placeholder-blue-500"
                        placeholder="Enter your password">
                </div>
            </div>

            {{-- Login button --}}
            <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-400 text-[#0f172a] font-semibold py-2.5 rounded-md transition shadow-md uppercase tracking-wide">
                Log In
            </button>

            {{-- Register link --}}
            <p class="text-sm text-center text-blue-400 mt-4">
                Don’t have an account?
                <a href="{{ route('register') }}" class="underline hover:text-blue-300">Register now</a>
            </p>
        </form>
    </div>
</div>
@endsection
