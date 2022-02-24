<x-admin-layout>
    <div class="container py-12">
        @livewire('admin.create-category')
    </div>
    @push('script')

    <script>
        livewire.on('deleteCategory', categorySlug =>{
            Swal.fire({
                    title: '¿Estas seguro?',
                    text: "¡No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Sí, bórralo!'

                }).then((result) => {
                    if (result.isConfirmed) {

                          Livewire.emitTo('admin.create-category', 'delete', categorySlug);

                        Swal.fire(  
                            'Eliminado!',
                            'Tu archivo ha sido eliminado.',
                            'éxito'
                        )
                    }
                })
        })
    </script>
        
    @endpush
</x-admin-layout>
