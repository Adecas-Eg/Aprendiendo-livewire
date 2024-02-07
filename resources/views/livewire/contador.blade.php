<div>

    <x-button wire:click='inc(4)'>
        +
    </x-button>

    <span class="mx-2">{{ $count }} </span>
    
    <x-button wire:click='dec(4)'>
        -
    </x-button>

</div>
