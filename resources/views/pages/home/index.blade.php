@extends('layout.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="relative min-h-[500px] md:min-h-[600px] rounded-[40px] overflow-hidden flex items-center justify-center text-center p-8 md:p-16">
            {{-- Background Image with Blue Overlay --}}
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('assets/himasium.png') }}" 
                     alt="HIMASIUM Community" 
                     class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-blue-800/30 backdrop-blur-[2px]"></div>
            </div>

            {{-- Content --}}
            <div class="relative z-10 max-w-4xl">
                <h1 class="text-4xl md:text-7xl font-black text-white leading-tight mb-6 uppercase tracking-tighter">
                    Himpunan Mahasiswa <br> Sistem Informasi
                </h1>
                <p class="text-white/90 text-sm md:text-lg max-w-2xl mx-auto leading-relaxed font-medium">
                    HIMASIUM Universitas Mandiri adalah organisasi keprofesian di bidang sistem informasi yang berlandaskan Tridharma Perguruan Tinggi dan Pancasila.
                </p>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="w-16 h-1 bg-blue-800 mb-8"></div>
                    <h2 class="text-4xl font-extrabold text-slate-900 mb-8">Tentang <span class="text-blue-600">HIMASIUM</span></h2>
                    <div class="space-y-6 text-lg text-slate-500 leading-relaxed">
                        <p>
                            Himpunan Mahasiswa Sistem Informasi Universitas Mandiri (HIMASIUM) didirikan sebagai organisasi yang menjembatani aspirasi mahasiswa dengan institusi serta dunia industri.
                        </p>
                        <p>
                            Kami berfokus pada pengembangan kompetensi teknis (hard skills) dan karakter (soft skills) melalui berbagai program kerja unggulan seperti Seminar Teknologi, Workshop, hingga Inkubasi Produk Digital.
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <div class="aspect-square bg-gradient-to-br from-blue-800 to-blue-900 rounded-3xl overflow-hidden shadow-2xl rotate-3">
                        <div class="absolute inset-x-0 bottom-0 p-8 text-white bg-gradient-to-t from-black/60 to-transparent">
                            <p class="text-sm font-bold uppercase tracking-widest mb-2 text-blue-200">Our Community</p>
                            <p class="text-2xl font-bold">Membangun Masa Depan Teknologi Bersama Mahasiswa SI.</p>
                        </div>
                    </div>
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 -rotate-12 bg-white p-4 rounded-2xl shadow-xl w-32 h-32 flex items-center justify-center border border-slate-100">
                         <img class="h-16 w-auto" src="{{ asset('assets/logo.svg') }}" alt="HIMASIUM Icon">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divisi Kami -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-sm font-semibold text-slate-500 uppercase tracking-widest mb-3">Divisi Kami</p>
                <h2 class="text-3xl font-extrabold text-slate-900 sm:text-4xl leading-tight">Mengenal Lebih Dekat Struktur Organisasi Dasar<br>Himpunan Mahasiswa Sistem Informasi</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Katarika -->
                <div class="group p-8 rounded-[32px] bg-slate-50 hover:bg-blue-600 transition-all duration-500 border border-slate-100 hover:border-blue-500 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-600 group-hover:bg-white/20 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-blue-600/20 transition-colors">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-extrabold text-slate-900 group-hover:text-white mb-3 transition-colors">Katarika</h3>
                    <p class="text-slate-500 group-hover:text-white/80 text-sm leading-relaxed transition-colors">
                        <b>Keterampilan dan Retorika</b>. Berfokus pada pengembangan soft skills mahasiswa, terutama dalam komunikasi, public speaking, dan interpersonal.
                    </p>
                </div>

                <!-- Pesona -->
                <div class="group p-8 rounded-[32px] bg-slate-50 hover:bg-blue-600 transition-all duration-500 border border-slate-100 hover:border-blue-500 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-600 group-hover:bg-white/20 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-blue-600/20 transition-colors">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-extrabold text-slate-900 group-hover:text-white mb-3 transition-colors">Pesona</h3>
                    <p class="text-slate-500 group-hover:text-white/80 text-sm leading-relaxed transition-colors">
                        <b>Publikasi, Sosmed, dan Narasi</b>. Mengelola citra digital HIMASIUM melalui konten kreatif, media sosial, dan penyebaran informasi menarik.
                    </p>
                </div>

                <!-- Inobis -->
                <div class="group p-8 rounded-[32px] bg-slate-50 hover:bg-blue-600 transition-all duration-500 border border-slate-100 hover:border-blue-500 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-600 group-hover:bg-white/20 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-blue-600/20 transition-colors">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-extrabold text-slate-900 group-hover:text-white mb-3 transition-colors">Inobis</h3>
                    <p class="text-slate-500 group-hover:text-white/80 text-sm leading-relaxed transition-colors">
                        <b>Inovasi dan Bisnis</b>. Mewadahi kewirausahaan dan kreativitas mahasiswa dalam menciptakan inovasi produk digital maupun bisnis kreatif.
                    </p>
                </div>

                <!-- Bersinar -->
                <div class="group p-8 rounded-[32px] bg-slate-50 hover:bg-blue-600 transition-all duration-500 border border-slate-100 hover:border-blue-500 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-600 group-hover:bg-white/20 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-blue-600/20 transition-colors">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-extrabold text-slate-900 group-hover:text-white mb-3 transition-colors">Bersinar</h3>
                    <p class="text-slate-500 group-hover:text-white/80 text-sm leading-relaxed transition-colors">
                        <b>Sehat, Inspiratif, dan Religius</b>. Menjaga kesejahteraan mental dan spiritual mahasiswa melalui kegiatan religius dan gaya hidup sehat.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Kerja Kami -->
    <section class="py-0 bg-white">
        <!-- Blue Header Banner -->
        <div class="bg-gradient-to-r from-blue-700 to-blue-800 py-16 text-center">
            <p class="text-sm font-semibold text-blue-200 uppercase tracking-widest mb-3">Program Kerja Kami</p>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white leading-tight">Kegiatan dan Aktivitas Kami di Himpunan<br>Mahasiswa Sistem Informasi</h2>
        </div>

        <!-- Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <div class="lg:col-span-4">
                    <div class="flex items-center justify-between mb-8">
                        <h3 class="text-2xl font-extrabold text-slate-900 tracking-tight">News</h3>
                        <a href="{{ route('blog', ['category' => 'kepanitiaan']) }}" class="text-sm font-bold text-blue-600 hover:text-blue-700 transition-colors">See all</a>
                    </div>
                    
                    <div class="space-y-8">
                        @forelse($kepanitiaanPosts as $post)
                            <div class="flex gap-5 group">
                                <div class="flex-shrink-0">
                                    <div class="w-16 h-16 rounded-full border-2 border-blue-600 flex flex-col items-center justify-center text-blue-600 transition-all group-hover:bg-blue-600 group-hover:text-white group-hover:border-blue-600">
                                        <span class="text-sm font-extrabold leading-none">{{ $post->published_at->format('d') }}</span>
                                        <span class="text-xs font-semibold leading-none mt-0.5">{{ $post->published_at->format('M') }}</span>
                                    </div>
                                </div>
                                <div>
                                    <a href="{{ route('blog.show', $post->slug) }}" class="block">
                                        <h4 class="text-base font-extrabold text-slate-900 mb-2 group-hover:text-blue-600 transition-colors line-clamp-2">
                                            {{ $post->title }}
                                        </h4>
                                    </a>
                                    <p class="text-sm text-slate-500 leading-relaxed mb-3 text-justify line-clamp-3">
                                        {{ Str::limit($post->meta_description, 150) }}
                                    </p>
                                    <a href="{{ route('blog.show', $post->slug) }}" class="text-sm font-bold text-blue-600 hover:text-blue-700 transition-colors flex items-center gap-1 group/btn">
                                        Selengkapnya 
                                        <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="py-12 text-center bg-slate-50 rounded-[32px] border border-dashed border-slate-200">
                                <p class="text-slate-400 font-medium italic text-sm">Belum ada berita kepanitiaan terbaru.</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <div class="lg:col-span-8">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="relative rounded-2xl overflow-hidden group aspect-[4/3]">
                            <img src="{{ asset('assets/ngopi.jpg') }}" alt="NGOPI" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-700/90 via-blue-700/30 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                <h4 class="text-lg font-extrabold text-white uppercase tracking-wide mb-1">NGOPI</h4>
                                <p class="text-sm text-blue-100 leading-relaxed font-medium">Ngobrol Perkara Iman. Wadah diskusi santai untuk meningkatkan kualitas iman dan mempererat ukhuwah antar mahasiswa Sistem Informasi.</p>
                            </div>
                        </div>

                        <div class="relative rounded-2xl overflow-hidden group aspect-[4/3]">
                            <img src="{{ asset('assets/olbar.jpg') }}" alt="OLBAR" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-700/90 via-blue-700/30 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                <h4 class="text-lg font-extrabold text-white uppercase tracking-wide mb-1">OLBAR</h4>
                                <p class="text-sm text-blue-100 leading-relaxed font-medium">Olahraga Bareng. Kegiatan rutin untuk menjaga kebugaran fisik sekaligus menjadi sarana refreshing dan keakraban bagi seluruh mahasiswa SI.</p>
                            </div>
                        </div>
{{-- 
                        <div class="relative rounded-2xl overflow-hidden group aspect-[4/3] bg-gradient-to-br from-blue-800 to-blue-900">
                            <div class="absolute inset-0 opacity-20 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2280%22%20height%3D%2280%22%20viewBox%3D%220%200%2080%2080%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.1%22%3E%3Cpath%20d%3D%22M50%2050c0-5.523%204.477-10%2010-10s10%204.477%2010%2010-4.477%2010-10%2010-10-4.477-10-10zM10%2010c0-5.523%204.477-10%2010-10s10%204.477%2010%2010-4.477%2010-10%2010S10%2015.523%2010%2010z%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')]"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-800/95 via-blue-800/20 to-transparent"></div>
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white/10">
                                <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 24 24"><path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                <h4 class="text-lg font-extrabold text-white uppercase tracking-wide mb-1">OLBAR</h4>
                                <p class="text-sm text-blue-100 leading-relaxed">Informatics Festival and Competitions adalah perlombaan teknologi informasi tingkat nasional.</p>
                            </div>
                        </div>

                        <div class="relative rounded-2xl overflow-hidden group aspect-[4/3] bg-gradient-to-br from-slate-800 to-slate-950">
                            <div class="absolute inset-0 opacity-20 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2260%22%20height%3D%2260%22%20viewBox%3D%220%200%2060%2060%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.08%22%3E%3Cpath%20d%3D%22M36%2034v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6%2034v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6%204V0H4v4H0v2h4v4h2V6h4V4H6z%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')]"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/95 via-slate-900/30 to-transparent"></div>
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white/10">
                                <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 24 24"><path d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                <h4 class="text-lg font-extrabold text-white uppercase tracking-wide mb-1">Webinar Nasional Informatika</h4>
                                <p class="text-sm text-blue-100 leading-relaxed">Seminar nasional yang membahas perkembangan teknologi informasi terkini.</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
