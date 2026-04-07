@extends('layout.app')

@section('title', 'Blogs')

@section('content')
    <section class="bg-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex flex-col gap-12">
            <div class="flex flex-col justify-center items-center gap-2">
                <h1 class="text-sm md:text-lg font-semibold text-slate-900 tracking-wider uppercase">Informasi Terkini</h1>
                <p class="text-2xl md:text-4xl font-extrabold text-blue-800 w-full md:w-[70%] lg:w-[56%] text-center leading-tight">Segala Jenis Informasi dari Himpunan Mahasiswa Sistem Informasi</p>
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex gap-2 justify-start items-center">
                    <h5 class="text-xl font-bold">Informasi</h5>
                    <div class="w-0.5 h-8 bg-slate-900 rounded-full"></div>
                    <p>Informasi Terbaru</p>
                </div>
                <div class="flex gap-2 overflow-x-auto pb-2 md:pb-0 md:flex-wrap no-scrollbar">
                    <a href="{{ route('blog') }}" 
                       class="whitespace-nowrap rounded-2xl text-[13px] md:text-sm font-semibold px-4 py-2 border {{ !request()->has('category') ? 'border-blue-700 bg-blue-700 text-white' : 'border-slate-300 text-slate-500 hover:border-blue-700 hover:text-blue-700 transition-colors' }}">
                        Semua
                    </a>
                    @foreach($category as $cat)
                        <a href="{{ route('blog', ['category' => $cat->slug]) }}" 
                           class="whitespace-nowrap rounded-2xl text-[13px] md:text-sm font-semibold px-4 py-2 border {{ request()->category == $cat->slug ? 'border-blue-700 bg-blue-700 text-white' : 'border-slate-300 text-slate-500 hover:border-blue-700 hover:text-blue-700 transition-colors' }}">
                            {{ $cat->name }}
                        </a>
                    @endforeach
                </div>
            </div>
            
            @if($posts->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-20">
                    @foreach($posts as $post)
                        <x-blog-card :post="$post" />
                    @endforeach
                </div>
            @else
                <div class="py-20 text-center">
                    <div class="inline-flex items-center justify-center w-80 h-80 bg-slate-50 rounded-full mb-6">
                        <img src="{{ asset('assets/no-data.svg') }}" alt="" class="w-full h-full object-cover">
                    </div>
                    <p class="text-slate-400 font-medium italic text-md">Belum ada artikel yang dipublikasikan. Nantikan segera!</p>
                </div>
            @endif
        </div>
    </section>
@endsection
