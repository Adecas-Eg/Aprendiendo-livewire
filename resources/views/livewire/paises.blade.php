<div class="p-4">
    {{-- @livewire('hijo') --}}

    <x-button class="mb-4" wire:click="$set('count',0)" wire:click="$toggle('open')">
        Mostrar / Ocultar
    </x-button>
    <form class="mb-4" wire:submit='save'>
        <x-input wire:model='pais' wire:keydown.space="aumen">Ingrese un pais</x-input>

        <x-button>
            Agregar
        </x-button>

    </form>
    @if ($open)
        <ul class="list-disc list-inside space-y-2">
            @foreach ($paises as $index => $item)
                <li wire:key='pais-{{ $index }}'>

                    <span wire:mouseenter="changeActive('{{ $item }}')"> {{ $index }} {{ $item }}
                    </span>
                    <x-danger-button wire:click='delete({{ $index }})'> x</x-danger-button>
                </li>
            @endforeach

        </ul>


    @endif
    {{ $active }}
    {{ $count }}

</div>
