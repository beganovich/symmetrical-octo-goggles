<div>
    <p>Component: {{ $component }}</p>

    @livewire($component, [], key($component))

    <button wire:click="next">Next</button>
</div>
