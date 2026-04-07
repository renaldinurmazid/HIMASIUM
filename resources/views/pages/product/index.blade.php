@extends('layout.app')

@section('title', 'Products')

@section('content')
    <section class="py-12 bg-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col gap-8 md:gap-10">
            <div class="flex flex-col gap-2 justify-center items-center">
                <h1 class="text-sm md:text-lg font-semibold text-slate-800 uppercase tracking-wider">Produk Kami</h1>
                <p class="text-2xl md:text-4xl text-blue-800 font-extrabold text-center max-w-2xl leading-tight">Berbagai produk eksklusif dari mahasiswa Sistem Informasi</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                @foreach($products as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
            
            @if(count($products) == 0)
                <div class="py-20 text-center">
                    <div class="inline-flex items-center justify-center w-80 h-80 bg-slate-50 rounded-full mb-6">
                        <img src="{{ asset('assets/no-data.svg') }}" alt="" class="w-full h-full object-cover">
                    </div>
                    <p class="text-slate-400 font-medium italic text-md">Belum ada produk yang dipublikasikan. Nantikan segera!</p>
                </div>
            @endif
        </div>
    </section>
@endsection
