@props(['post'])

<div class="group bg-transparent transition-all duration-300">
    <div class="relative mb-6">
        <!-- Featured Image with extremely rounded corners -->
        <div class="aspect-[16/10] overflow-hidden rounded-[40px] shadow-sm group-hover:shadow-xl transition-all duration-500">
            <img 
                src="{{ $post->featured_image ? ('storage/'.$post->featured_image) : 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?q=80&w=1000&auto=format&fit=crop' }}" 
                alt="{{ $post->title }}"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
            >
        </div>
        
        <!-- Hover arrow circle button -->
        <div class="absolute bottom-4 right-4 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
            <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-white border border-white/30">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </div>
        </div>
    </div>

    <div class="px-4">
        <!-- Category -->
        <p class="text-indigo-600 font-bold text-sm mb-2 tracking-wide uppercase">
            {{ $post->category->name ?? 'Uncategorized' }}
        </p>

        <!-- Title -->
        <a href="{{ route('blog.show', $post->slug) }}" class="block mb-3">
            <h3 class="text-2xl font-bold text-slate-900 group-hover:text-indigo-600 transition-colors leading-tight">
                {{ $post->title }}
            </h3>
        </a>

        <!-- Excerpt -->
        <p class="text-slate-500 line-clamp-2 mb-6 leading-relaxed">
            @if($post->meta_description)
                {{ $post->meta_description }}
            @elseif(is_string($post->content))
                {{ Str::limit(strip_tags($post->content), 120) }}
            @else
                {{-- Fallback if content is JSON/Array and no meta description --}}
                Baca selengkapnya untuk konten menarik lainnya...
            @endif
        </p>

        <!-- Footer: Author & Meta -->
        <div class="flex items-center justify-between pt-4 border-t border-slate-100">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-slate-200 overflow-hidden ring-2 ring-white">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($post->user->name ?? 'A') }}&background=6366f1&color=fff" alt="Author" class="w-full h-full object-cover">
                </div>
                <span class="text-sm font-bold text-slate-700">{{ $post->user->name ?? 'Author' }}</span>
            </div>
            <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">
                {{ $post->published_at ? $post->published_at->diffForHumans() : '5 min read' }}
            </span>
        </div>
    </div>
</div>
