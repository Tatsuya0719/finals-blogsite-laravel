@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
<div class="min-h-screen bg-[#24263b] flex flex-col items-center justify-center px-6 py-16 text-white">
    {{-- Logo & Tagline --}}
    <div class="text-center mb-12">
        <img src="{{ asset('images/logo.png') }}" alt="Game Ako Logo" class="mx-auto w-24 h-24 mb-4">
        <h1 class="text-4xl sm:text-5xl font-extrabold">Welcome to <span class="text-[#e94560]">Game Ako</span></h1>
        <p class="mt-2 text-lg text-gray-300">#fortheloveofgaming — Where Gamers Share Stories</p>
    </div>

    {{-- Action Buttons --}}
    <div class="flex flex-col sm:flex-row gap-4 mb-10">
        <a href="{{ route('login') }}"
           class="bg-[#e94560] hover:bg-[#c2364e] px-6 py-3 rounded-lg text-lg font-bold text-white transition duration-200">
            Login
        </a>
        <a href="{{ route('register') }}"
           class="border border-[#e94560] hover:bg-[#e94560] px-6 py-3 rounded-lg text-lg font-bold text-white transition duration-200">
            Register
        </a>
    </div>

    {{-- Preview / Call to Explore --}}
    <div class="text-center max-w-2xl">
        <h2 class="text-2xl font-semibold mb-2">Read the latest stories, reviews & walkthroughs</h2>
        <p class="text-gray-400 mb-6">Jump into featured articles from gamers across the community. Want to share yours? Register and join the conversation.</p>
        <a href="{{ route('welcome') }}"
           class="text-[#e94560] hover:text-[#c2364e] font-semibold underline">
            Browse Stories as Guest →
        </a>
    </div>
</div>
@endsection
