<?php

namespace App\Http\Livewire\Callings;

use App\Models\Callings;
use Livewire\Component;

class Delete extends Component
{
    protected $listeners=['destroy'];
    public function render()
    {
        return view('livewire.callings.delete');
    }
    public function destroy($id){  
        try{
            $calling = Callings::find($id);
            $calling->delete();
            $this->emit('loadCallins');
            $this->emit('toast','Chamado exclido com sucesso!','success');        
        }catch(\Exception $e)
        {
            $this->emit('toast',$e->getMessage(),'error');
        }        
    }
    
}
