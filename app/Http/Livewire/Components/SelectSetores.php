<?php

namespace App\Http\Livewire\Components;

use App\Models\Departments;
use Livewire\Component;

class SelectSetores extends Component
{
    public $setores;
    public function mount()
    {
        $this->setores = Departments::get();
    }
    public function render()
    {
        return view('livewire.components.select-setores');
    }
}
