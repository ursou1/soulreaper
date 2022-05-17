<div style="text-align: center">
    <div>
        <button wire:click="increment">+</button>
        <h1>{{ $count }}</h1>

        <h>{{ $name }}</h>
        <input wire:model="name" type="text">
        <input wire:model="change" type="checkbox">
        @if ($ok)
            <h2>show</h2>
        @endif
    </div>
</div>

