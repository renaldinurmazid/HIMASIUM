@extends('layout.app')

@section('title', 'Contact - HIMASIUM')

@section('content')
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                <div>
                    <h1 class="text-4xl font-extrabold text-slate-900 mb-8 sm:text-5xl">Hubungi Kami</h1>
                    <p class="text-lg text-slate-500 mb-12">Punya pertanyaan atau tertarik untuk berkolaborasi? Sampaikan saja pada kami.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-center gap-6">
                            <div class="p-3 bg-blue-50 text-blue-600 rounded-xl font-bold">📍</div>
                            <div class="text-slate-600 font-medium">Universitas Mandiri, Kampus Informatik.</div>
                        </div>
                        <div class="flex items-center gap-6">
                            <div class="p-3 bg-indigo-50 text-indigo-600 font-bold rounded-xl">📧</div>
                            <div class="text-slate-600 font-bold underline">himasium@mandiri.ac.id</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 shadow-xl">
                    <form class="space-y-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Nama Lengkap</label>
                            <input type="text" class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-600 outline-none transition-all placeholder:text-slate-400" placeholder="Contoh: Renaldi Nurmazid">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Email</label>
                            <input type="email" class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-600 outline-none transition-all placeholder:text-slate-400" placeholder="alamat@email.com">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Pesan Anda</label>
                            <textarea rows="4" class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-600 outline-none transition-all placeholder:text-slate-400" placeholder="Tuliskan pesan atau ide kolaborasi Anda di sini..."></textarea>
                        </div>
                        <button type="button" class="w-full py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-2xl font-bold text-lg shadow-xl shadow-blue-500/25 transition-all active:scale-95">Kirim Pesan &rarr;</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
