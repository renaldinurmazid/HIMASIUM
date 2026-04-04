@extends('layout.app')

@section('title', ($post->meta_title ?? $post->title) . ' - HIMASIUM')

@section('content')
    <article class="py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">
            <!-- Header -->
            <div class="text-center mb-16">
                @if($post->published_at)
                    <p class="text-indigo-600 font-bold tracking-widest uppercase text-xs mb-4">
                        Published {{ $post->published_at->format('M d, Y') }}
                    </p>
                @endif
                
                <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 tracking-tight mb-8 px-4">
                    {{ $post->title }}
                </h1>
                
                @if($post->meta_description)
                    <p class="text-lg md:text-xl text-slate-500 mb-8 max-w-2xl mx-auto leading-relaxed italic">
                        "{{ $post->meta_description }}"
                    </p>
                @endif

                <!-- Tags / Category -->
                <div class="flex flex-wrap justify-center gap-3">
                    @if($post->category)
                        <span class="px-4 py-1.5 rounded-full border-2 border-indigo-100 text-indigo-600 text-xs font-bold uppercase tracking-wider">
                            {{ $post->category->name }}
                        </span>
                    @endif
                    <!-- Add tags here if model supports tags -->
                </div>
            </div>

            <!-- Main Image -->
            <div class="aspect-video w-full overflow-hidden rounded-[50px] shadow-2xl mb-20">
                <img 
                    src="{{ $post->featured_image ? asset('storage/' . $post->featured_image) : 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?q=80&w=1000&auto=format&fit=crop' }}" 
                    alt="{{ $post->title }}"
                    class="w-full h-full object-cover"
                >
            </div>

            <!-- Content -->
            <div class="prose prose-slate prose-lg lg:prose-xl max-w-none prose-headings:font-extrabold prose-headings:tracking-tight prose-p:text-slate-600 prose-p:leading-loose prose-strong:text-slate-900 prose-img:rounded-3xl">
                @if(is_array($post->content))
                    {{-- In Filament v3, if using ->json(), content will be a JSON array. 
                         You might need a tiptap-to-html converter here or just remove ->json() in PostForm to get HTML string. --}}
                    [Konten tersimpan dalam format JSON. Sila gunakan renderer atau matikan ->json() di PostForm untuk menyimpan HTML.]
                @else
                    {!! $post->content !!}
                @endif
            </div>

            <!-- Footer Author -->
            <div class="mt-24 pt-12 border-t border-slate-100 flex flex-col md:flex-row items-center border-b pb-12">
                <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-6">
                    <img class="h-20 w-20 rounded-full object-cover shadow-lg ring-4 ring-slate-50" src="https://ui-avatars.com/api/?name={{ urlencode($post->user->name ?? 'A') }}&background=6366f1&color=fff" alt="Author">
                </div>
                <div class="text-center md:text-left">
                    <p class="text-xs font-extrabold text-indigo-600 uppercase tracking-widest mb-1">Written by</p>
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">{{ $post->user->name ?? 'Anonymous' }}</h3>
                    <p class="text-slate-500 max-w-md">Dedikasi untuk pengembangan ilmu pengetahuan dan inovasi di lingkungan Sistem Informasi.</p>
                </div>
            </div>
        </div>
    </article>
@endsection
