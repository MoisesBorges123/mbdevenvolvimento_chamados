<?php

namespace App\Http\Livewire\Categorlan;

use App\Models\TypeLan;
use Livewire\Component;

class Edit extends Component
{
    public $typesLAN; 
    public $typelan;
    public $name;
    public $description;

    public function mount($id)
    {
        $this->typesLAN  = TypeLan::get();
    }
    public function render()
    {
        return view('livewire.categorlan.edit');
    }
}
