<?php

namespace App\Http\Livewire\Categorlan;

use App\Models\CategoriaLanTypeLan;
use Livewire\Component;

class Delete extends Component
{
    protected $listeners = ['delete'];
    public function render() 
    {
        return view('livewire.categorlan.delete');
    }
    public function delete(CategoriaLanTypeLan $registro) :void
    {
        try {
            $registro->delete();
        } catch (\Exception $e) {
            $this->emit('toast',$e->getMessage(),'erro');
        } finally {
            $this->emit('toast','Registro deletado','success');
            $this->emit('getGrupos');
        }

    }
}
