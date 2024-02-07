<div>
    <div>
        <h1>{{$title}} </h1>

    {{-- live modifica en tiempo rela --}}
    <input type="text" wire:model.live='name'>
    <x-button wire:click='save'> Save</x-button>
    </div>
    {{$name}}


</div>
