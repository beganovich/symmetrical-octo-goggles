<?php

namespace App\Livewire;

use Livewire\Component;

class Picker extends Component
{
    public string $component = First::class;

    public function next()
    {
        $this->component = Second::class;
    }

    public function render()
    {
        return view('livewire.picker');
    }
}
