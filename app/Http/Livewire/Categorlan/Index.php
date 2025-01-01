<?php

namespace App\Http\Livewire\Categorlan;

use App\Models\CategoriaLanTypeLan;
use Livewire\Component;

class Index extends Component
{
    public $grupos;
    protected $listeners=['getGrupos'];
    public function mount() :void
    {
        $this->getGrupos();
    }
    public function render() :object
    {
        return view('livewire.categorlan.index');
    }
    public function getGrupos() :void
    {
        $this->grupos = CategoriaLanTypeLan::get();
    }
}
