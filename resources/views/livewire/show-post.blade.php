<div>
    <div class="container py-10">
        <h1 class="text-center text-2xl font-bold mb-10 text-gray-500">Nuestros posts</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($posts as $item)
            <div>
                <div class="px-3 py-2 shadow-lg rounded-lg bg-white">
                    <h1 class="text-gray-700 pb-2 font-semibold">{{$item->title}}</h1>
                    <img src="{{Storage::url($item->image)}}" class="w-full h-56 object-cover object-center" alt="">
                    <p class="pt-2 text-justify font-medium">{{$item->content}}</p>
                </div>
            </div>
            @endforeach
            
        </div>
        <div class="px-6 py-3">
            {{ $posts->links() }}
        </div>
    </div>
</div>
