<div>
    <div class="container ">
        <p class="text-center mb-16">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil esse eligendi, atque
            autem labore ut, quidem eos beatae voluptate error aliquid optio temporibus odio sit molestias reprehenderit
            aliquam! Maiores, voluptates.</p>
    </div>
<div class=" py-10">
    <div class="container">
        @foreach ($services as $service)
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 lg:gap-10 items-center bg-red-100 p-8 rounded-lg mb-8">
            
                <div class="col-span-1">
                    <div>
                        <img src="{{ Storage::url($service->image) }}" class="w-full object-center object-cover rounded-lg" alt="">
                    </div>
                </div>

                <div class="col-span-2">
                    <div>
                        <h1
                            class="text-lg lg:text-2xl font-semibold text-gray-700 tracking-wide uppercase text-center mb-4">
                            {{ $service->title }}</h1>
                    </div>
                    <div>
                        <p class="text-base font-medium text-gray-500 text-justify ">{{ $service->description }}</p>
                    </div>
                </div>
            
        </div>
        @endforeach
        <div class="">
            {{$services->links()}}
        </div>
    </div>
</div>
    
</div>
