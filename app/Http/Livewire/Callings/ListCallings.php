<?php

namespace App\Http\Livewire\Callings;

use App\Models\Callings;
use Livewire\Component;

class ListCallings extends Component
{
    public $callings;
    public function mount()
    {
        $this->getCallings();
    }   
    public function render()
    {
        return view('livewire.callings.list-callings');
    }
    public function getCallings()
    {
        $this->callings = Callings::get();
    }
}
