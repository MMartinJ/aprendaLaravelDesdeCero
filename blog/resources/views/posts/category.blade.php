<x-app-layout>
    <div class="container">

        <h1 class="text-white text-3xl text-center font-bold mb-6">Categoria: {{ $category->nombre }}</h1>

        
        @foreach ($posts as $post)
            <x-card-post :post="$post"></x-card-post>
        @endforeach
        
        {{-- paginate posts --}}
        <div class="category-paginate-section mt-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
