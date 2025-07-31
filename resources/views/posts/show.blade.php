@extends('layouts.master')

@section('title', $post->title)

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold text-white">{{ $post->title }}</h1>
        <p class="text-gray-600">Published on: {{ $post->created_at ? $post->created_at->format('M d, Y') : 'Date not available' }}</p>

        {{-- Add the featured image here --}}
        <div class="mt-4 mb-8">
             <a href="#" class="block js-open-image-modal" data-image-url="{{ $post->featured_image_url }}">
                <img class="w-full h-96 object-cover rounded-lg shadow-lg cursor-pointer" src="{{ $post->featured_image_url }}" alt="Featured Image for {{ $post->title }}">
            </a>
        </div>

        <div class="mt-8 text-lg text-gray-300 leading-relaxed">
            <p>{{ $post->content }}</p>
        </div>

        <hr class="my-8 border-gray-700">

        <div id="comments-section">
            <h2 class="text-2xl font-bold text-white mb-4">Comments</h2>
        </div>
    </div>
@endsection

{{-- Moved the modal HTML and JavaScript outside of the 'content' section --}}
<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
    <div class="relative max-w-7xl max-h-full p-4">
        <button id="closeModalBtn" class="absolute top-4 right-4 text-white text-3xl font-bold">&times;</button>
        <img id="modalImage" src="" alt="Full-size image" class="max-w-full max-h-full">
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const closeBtn = document.getElementById('closeModalBtn');
        const imageLinks = document.querySelectorAll('.js-open-image-modal');

        imageLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault(); // Prevent the default link behavior
                const imageUrl = link.getAttribute('data-image-url');
                modalImage.src = imageUrl;
                modal.classList.remove('hidden');
            });
        });

        closeBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        modal.addEventListener('click', (e) => {
            if (e.target.id === 'imageModal') {
                modal.classList.add('hidden');
            }
        });
    });
</script>
@endpush