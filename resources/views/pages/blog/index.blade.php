@extends('layout.app')

@section('title', 'Blog - HIMASIUM')

@section('content')
    <section class="py-24 bg-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-20">
                <div class="text-center md:text-left mb-8 md:mb-0">
                    <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 tracking-tight mb-4">
                        Warta <span class="text-indigo-600">HIMASIUM</span>
                    </h1>
                    <p class="text-lg text-slate-500 max-w-xl leading-relaxed">
                        Nikmati artikel menarik seputar teknologi informasi, berita kampus, dan tips dunia kerja.
                    </p>
                </div>
                {{-- <div>
                    <a href="#" class="bg-indigo-600 text-white hover:bg-indigo-700 px-8 py-3.5 rounded-full text-sm font-bold transition-all shadow-xl shadow-indigo-500/25">
                        View All Posts
                    </a>
                </div> --}}
            </div>
            
            @php
                $posts = \App\Models\Post::where('status', 'published')->with(['category', 'user'])->latest('published_at')->get();
            @endphp

            @if($posts->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-20">
                    @foreach($posts as $post)
                        <x-blog-card :post="$post" />
                    @endforeach
                </div>
            @else
                <div class="py-20 text-center">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-slate-50 rounded-full mb-6">
                        <svg class="w-10 h-10 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <p class="text-slate-400 font-bold italic text-xl">Belum ada artikel yang dipublikasikan. Nantikan segera!</p>
                </div>
            @endif
        </div>
    </section>
@endsection
