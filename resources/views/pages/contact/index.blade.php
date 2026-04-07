@extends('layout.app')

@section('title', 'Contact')

@section('content')
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20 flex flex-col gap-12 md:gap-20">
        {{-- Header Section --}}
        <div class="flex flex-col justify-center items-center gap-3">
            <h1 class="text-sm md:text-lg font-semibold text-slate-900 tracking-wider uppercase">Hubungi Kami</h1>
            <p class="text-2xl md:text-5xl font-extrabold text-blue-800 w-full md:w-[70%] lg:w-[60%] text-center leading-tight">
                Punya pertanyaan atau tertarik untuk berkolaborasi? Sampaikan saja pada kami.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            {{-- Contact Information Cards --}}
            <div class="lg:col-span-5 space-y-6">
                {{-- <div class="group p-8 rounded-[32px] bg-white border border-slate-100 shadow-sm hover:border-blue-500 hover:shadow-xl hover:shadow-blue-500/5 transition-all duration-300">
                    <div class="flex items-start gap-6">
                        <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-extrabold text-slate-900 mb-2">Lokasi Kami</h3>
                            <p class="text-slate-500 text-sm leading-relaxed font-medium">Universitas Mandiri, Kampus Informatika. Jl. Raya Mandiri No. 123, Indonesia.</p>
                        </div>
                    </div>
                </div> --}}

                <div class="group p-8 rounded-[32px] bg-white border border-slate-100 shadow-sm hover:border-blue-500 hover:shadow-xl hover:shadow-blue-500/5 transition-all duration-300">
                    <div class="flex items-start gap-6">
                        <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-extrabold text-slate-900 mb-2">Email Resmi</h3>
                            <p class="text-blue-600 text-sm font-bold underline decoration-blue-200 underline-offset-4">himasiumofficial@gmail.com</p>
                        </div>
                    </div>
                </div>

                {{-- <div class="group p-8 rounded-[32px] bg-white border border-slate-100 shadow-sm hover:border-blue-500 hover:shadow-xl hover:shadow-blue-500/5 transition-all duration-300">
                    <div class="flex items-start gap-6">
                        <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-extrabold text-slate-900 mb-2">Respon Cepat</h3>
                            <p class="text-slate-500 text-sm leading-relaxed font-medium">Tim kami aktif melayani pada hari kerja (Senin - Jumat) mulai pukul 09.00 - 17.00 WIB.</p>
                        </div>
                    </div>
                </div> --}}
            </div>

            {{-- Contact Form --}}
            <div class="lg:col-span-7 bg-white p-6 md:p-12 rounded-[40px] border border-slate-100 shadow-2xl shadow-blue-500/5">
                <form action="#" class="space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest pl-4">Nama Lengkap</label>
                            <input type="text" class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-600/30 outline-none transition-all font-semibold text-slate-900 placeholder:text-slate-300" placeholder="Kenal lebih dekat...">
                        </div>
                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest pl-4">Alamat Email</label>
                            <input type="email" class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-600/30 outline-none transition-all font-semibold text-slate-900 placeholder:text-slate-300" placeholder="email@contoh.com">
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest pl-4">Pesan Anda</label>
                        <textarea rows="5" class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-blue-600/30 outline-none transition-all font-semibold text-slate-900 placeholder:text-slate-300 resize-none" placeholder="Tuliskan ide kolaborasi atau pertanyaan Anda di sini..."></textarea>
                    </div>
                    <button type="submit" class="group w-full py-5 bg-blue-600 hover:bg-blue-700 text-white rounded-2xl font-bold text-lg shadow-xl shadow-blue-500/25 transition-all hover:-translate-y-1 active:scale-95 flex items-center justify-center gap-3">
                        Kirim Pesan Sekarang
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
