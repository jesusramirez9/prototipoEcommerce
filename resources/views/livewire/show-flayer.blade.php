<div>
    @push('link')
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    @endpush
    <x-jet-dialog-modal wire:model="open_edit">
        <div class="modalPublicidad">
            <x-slot name="title">
            </x-slot>
            <x-slot name="content">
                <div class="slide_rlg">
                    @foreach ($posts as $item)
                        <div>
                            <div class="pb-2 text-gray-700 text-lg uppercase font-semibold tracking-wider">
                                {{ $item->title }}
                            </div>
                            <img src="{{ Storage::url($item->image) }}" class="w-full" alt="">
                            <div class="py-2 text-gray-700 text-sm text-justify ">
                                {{ $item->description }}
                            </div>
                        </div>
                    @endforeach
                </div>

            </x-slot>
            <x-slot name="footer">
                <x-jet-button wire:click="$set('open_edit', false)" class="mr-4">
                    Aceptar
                </x-jet-button>
            </x-slot>
        </div>
    </x-jet-dialog-modal>

    @push('script')
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
          
            $(document).ready(function() {
                $('.slide_rlg').slick();
            });
        </script>
    @endpush

</div>
