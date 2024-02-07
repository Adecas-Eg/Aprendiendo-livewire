<div>
    <div class="bg-white shadow mb-8 rounded-lg p-6">
        <form wire:submit="save">
            <div class="mb-4">
                <x-label>
                    Nombre:
                </x-label>
                <x-input class="w-full" wire:model.live='postCreate.title'>

                </x-input>

                <x-input-error for='postCreate.title' />
            </div>
            <div class="mb-4">
                <x-textarea class="w-full" wire:model.live='postCreate.content'></x-textarea>
                <x-input-error for='postCreate.content' />

            </div>

            <div class="mb-4">
                <x-label>Categorias</x-label>

                <x-select class="w-full" wire:model.live='postCreate.category_id'>

                    <option value="" disabled> seleccione una categoria</option>
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->name }} </option>
                    @endforeach

                </x-select>
                <x-input-error for='postCreate.category_id' />

            </div>

            <div class="mb-4">
                <x-label>
                    Tags
                </x-label>

                <ul>
                    @foreach ($tags as $tag)
                        <li>
                            <x-checkbox wire:model.live='postCreate.tags' value="{{ $tag->id }}" />
                            {{ $tag->name }}

                        </li>
                    @endforeach
                </ul>
                <x-input-error for='postCreate.tags' />

            </div>

            <div class="flex justify-end">
                <x-button>
                    Crear
                </x-button>
            </div>

        </form>
    </div>

    <div class="bg-white shadow rounded-lg p-6">
        <ul class="list-disc list-inside  -space-y-0.5">
            @foreach ($posts as $post)
                <li class="flex justify-between" wire:key="post-{{ $post->id }}">

                    {{ $post->title }}

                    <div>
                        <x-button class="mb-4" wire:click='edit({{ $post->id }})'>
                            Editar
                        </x-button>

                        <x-danger-button class="mb-4">
                            Eliminar
                        </x-danger-button>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <form wire:submit="update">

        <x-dialog-modal wire:model="postEdit.open">
            <x-slot name="title">
                Actualizar Post
            </x-slot>

            <x-slot name="content">
                <div class="mb-4">
                    <x-label>
                        Nombre:
                    </x-label>
                    <x-input class="w-full" wire:model='postEdit.title'>

                    </x-input>
                </div>
                <div class="mb-4">
                    <x-textarea class="w-full" wire:model='postEdit.content'></x-textarea>
                </div>

                <div class="mb-4">
                    <x-label>Categorias</x-label>

                    <x-select class="w-full" wire:model='postEdit.category_id'>

                        <option value="" disabled> seleccione una categoria</option>
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->name }} </option>
                        @endforeach
                    </x-select>
                </div>

                <div class="mb-4">
                    <x-label>
                        Tags
                    </x-label>

                    <ul>
                        @foreach ($tags as $tag)
                            <li>
                                <x-checkbox wire:model='postEdit.tags' value="{{ $tag->id }}" />
                                {{ $tag->name }}

                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="flex justify-end">

                    <x-secondary-button class="mr-2"
                        wire:click="$toggle('postEdit.open')">Cancelar</x-secondary-button>
                    <x-button>
                        Actualizar
                    </x-button>
                </div>


            </x-slot>

            <x-slot name="footer"></x-slot>
        </x-dialog-modal>
    </form>

    


{{-- para hacer el push se necesita primero cargar el stack en la plantilla principal --}}
    @push('js')
        <script>
            Livewire.on('post-created', function(comment) {
                console.log(comment);
            });
        </script>
    @endpush



</div>
