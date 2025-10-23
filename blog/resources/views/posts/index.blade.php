<x-app-layout>
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-3">
            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image:url({{ Storage::url($post->image->url) }})">

                    <div>
                     @foreach ($post->tags as $tag)
                         <a href="" class="inline-block px-3 h6 bg-gray-500 text-white">{{ $tag->nombre }}</a>
                     @endforeach       
                    </div>
                    <h1 class="text-4xl text-white leading-8 font-bold">
                        <a href="{{ route('post.show',$post) }}" rel="noopener norefererrer">
                            {{ $post->title }}
                        </a>
                    </h1>
                </article>
            @endforeach
        </div>
        {{-- paginate posts --}}
        <div class="posts-links-paginate mt-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>