@extends('layouts.master')

@section('title', 'Register')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-[#1a1a2e]"> {{-- Deep dark blue background --}}
    <div class="bg-[#16213e] p-8 rounded-lg shadow-lg w-full max-w-md"> {{-- Dark blue card --}}
        <h2 class="text-3xl font-bold mb-6 text-center text-white">Register</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-white text-sm font-bold mb-2">Name</label>
                <input type="text" id="name" name="name"
                    class="bg-[#0f3460] text-gray-100 border border-gray-600 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00aaff]"
                    placeholder="Enter your name">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-white text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email"
                    class="bg-[#0f3460] text-gray-100 border border-gray-600 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00aaff]"
                    placeholder="Enter your email">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-white text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="bg-[#0f3460] text-gray-100 border border-gray-600 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00aaff]"
                    placeholder="Enter your password">
            </div>
            <div class="mb-6">
                <label for="password_confirmation" class="block text-white text-sm font-bold mb-2">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                    class="bg-[#0f3460] text-gray-100 border border-gray-600 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00aaff]"
                    placeholder="Confirm your password">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-[#00aaff] hover:bg-[#0088cc] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Register
                </button>
                <a href="{{ route('login') }}"
                    class="text-sm text-[#00aaff] hover:text-[#0088cc] font-bold">
                    Already have an account?
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
