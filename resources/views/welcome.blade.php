@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
<div class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-[#0f172a] via-[#1e293b] to-[#0f172a] text-white px-6 py-16 overflow-hidden">

    {{-- Blue Glowing Background Orbs --}}
    <div class="absolute w-[600px] h-[600px] bg-blue-500/10 rounded-full blur-3xl top-[-200px] left-[-200px] z-0"></div>
    <div class="absolute w-[400px] h-[400px] bg-blue-700/10 rounded-full blur-2xl bottom-[-100px] right-[-100px] z-0"></div>

    {{-- Main Content --}}
    <div class="relative z-10 text-center max-w-3xl">
        {{-- Logo --}}
        <div class="mb-8">
            <img src="{{ asset('images/logo.png') }}" alt="Game Ako Logo" class="mx-auto w-20 h-20 sm:w-24 sm:h-24">
        </div>

        {{-- Heading --}}
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mb-4">
            Welcome to <span class="text-blue-400">Game Ako</span>
        </h1>
        <p class="text-lg sm:text-xl text-gray-300 mb-8">#fortheloveofgaming — Explore. Play. Write. Share.</p>

        {{-- Buttons --}}
        <div class="flex flex-col sm:flex-row justify-center gap-4 mb-8">
            <a href="{{ route('login') }}"
               class="bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg text-lg font-bold transition duration-200">
                Login
            </a>
            <a href="{{ route('register') }}"
               class="border border-blue-500 hover:bg-blue-600 hover:border-blue-600 px-6 py-3 rounded-lg text-lg font-bold transition duration-200">
                Register
            </a>
        </div>

        {{-- Guest link --}}
        <p class="text-gray-400">
            Just browsing?
            <a href="{{ route('welcome') }}" class="text-blue-400 hover:text-blue-300 font-semibold underline ml-1">
                View stories as guest →
            </a>
        </p>
    </div>
</div>
@endsection
