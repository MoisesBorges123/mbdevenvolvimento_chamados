<?php

namespace App\Http\Livewire\Tags;

use App\Models\Tag;
use Livewire\Component;

class Delete extends Component
{
    protected $listeners = ['delete'];
    public function render() 
    {
        return view('livewire.tags.delete');
    }
    public function delete(Tag $registro) :void
    {
        try {
            $registro->delete();
        } catch (\Exception $e) {
            $this->emit('toast',$e->getMessage(),'erro');
        } finally {
            $this->emit('toast','Registro deletado','success');
            $this->emit('getTags');
        }

    }
}
