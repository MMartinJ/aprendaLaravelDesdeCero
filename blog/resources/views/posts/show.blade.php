<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl text-gray-600 font-bold">{{ $post->title }}</h1>
        <div class="text-lg text-gray-500 mb-2">
            {{ $post->extract }}
        </div>
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
            <div class="lg:col-span-2 post-content">
                {{-- contenido del post --}}
                <figure>
                    <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($post->image->url) }}"
                        alt="imagen post">
                </figure>

                <div class="text-base text-gray-500 mt-4">
                    {{ $post->content }}
                </div>
                <div>
                    @foreach ($post->tags as $tag)
                        <a href="" class="inline-block px-3 h6 bg-gray-500 text-white">{{ $tag->nombre }}</a>
                    @endforeach
                </div>
            </div>
            {{-- sidebar --}}
            <aside class="post-sidebar">
                <h1 class="text-3xl front-bold text-gray-600 mb-4">
                    Ver otras entradas {{ $post->category->nombre }}
                </h1>
                <ul class="post-sidebar-list">
                    @foreach ($categoria as $item)
                        <li class="mb-4">
                            <a href="{{ route('post.show', $item) }}" class="flex">
                                <img src="{{ Storage::url($item->image->url) }}" alt="imagen post">
                                <span class="ml-2 text-gray-600">{{ $item->title }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
                
            </aside>
        </div>
    </div>
    
    
</x-app-layout>
