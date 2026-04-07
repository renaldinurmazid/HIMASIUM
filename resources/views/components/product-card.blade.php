@props(['product'])

<div class="flex flex-col bg-white rounded-xl overflow-hidden">
    <div class="relative w-full aspect-square bg-slate-100 group overflow-hidden">
        {{-- Discount Badge --}}
        @if($product->discount)
            <div class="absolute top-2 left-0 z-10">
                <div class="bg-red-500 text-white text-[12px] font-bold px-2 py-0.5 rounded-r-md">
                    {{ $product->discount }}%
                </div>
                <div class="w-0 h-0 border-t-[4px] border-t-red-800 border-l-[4px] border-l-transparent"></div>
            </div>
        @endif

        {{-- Product Image --}}
        <img src="{{ $product->image }}" alt="{{ $product->name }}" 
             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
    </div>

    <div class="flex flex-col p-2 gap-1.5">
        {{-- Name --}}
        <h3 class="text-[13px] text-slate-800 leading-tight line-clamp-2 h-8">
            {{ $product->name }}
        </h3>

        {{-- Price --}}
        <div class="flex flex-col">
            <span class="text-[17px] font-bold text-slate-900">
                Rp{{ number_format($product->price, 0, ',', '.') }}
            </span>
            
            @if($product->bonus)
                <span class="text-[11px] text-orange-500 font-semibold">
                    {{ $product->bonus }}
                </span>
            @endif
        </div>

        {{-- Rating & Sold --}}
        <div class="flex items-center gap-1 text-[11px] text-slate-500">
            <div class="flex items-center text-yellow-400">
                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
            </div>
            <span>{{ $product->rating }}</span>
            <span class="text-slate-300">•</span>
            <span>{{ $product->sold }} terjual</span>
        </div>

        {{-- Store --}}
        <div class="flex items-center gap-1 text-slate-500 text-[11px]">
            <div class="bg-indigo-500 text-white p-0.5 rounded-sm">
                <svg class="w-2 h-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <span class="font-medium truncate">{{ $product->store }}</span>
        </div>
    </div>
</div>
