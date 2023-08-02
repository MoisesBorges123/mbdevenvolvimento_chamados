<?php

namespace App\Http\Livewire\Callings;
use App\Models\Callings;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Close extends Component
{
    protected $listeners=['atendido'];
    public function render()
    {
        return view('livewire.callings.close');
    }
    public function atendido($id){  
        date_default_timezone_set('America/Sao_Paulo');
        try{
            $calling = Callings::find($id);
            if(empty($calling->readed)){
                $calling->update([
                    'readed'=>date('Y-m-d H:i:s',time()),
                    'readed_by'=>Auth::user()->id
                ]);
            }

            $calling->update([
                'answered'=>date('Y-m-d H:i:s',time()),
                'answered_by'=>Auth::user()->id
            ]);
            $this->emit('toast','Chamado atendido!','success');        
        }catch(\Exception $e)
        {
            $this->emit('toast',$e->getMessage(),'error');
        }        
    }
}
