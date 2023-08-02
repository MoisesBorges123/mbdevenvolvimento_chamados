<?php

namespace App\Http\Livewire\Callings;

use App\Models\Callings;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Details extends Component
{
    public $redirectExternal;
    public $calling;
    public function mount($id,$external=false)
    {
        $this->redirectExternal =$external; 
        date_default_timezone_set('America/Sao_Paulo');
        $this->calling = Callings::find($id);
        if(empty($this->calling->readed)){
            $this->calling->update([
                'readed'=>date('Y-m-d H:i:s',time()),
                'readed_by'=>Auth::user()->id
            ]);
        }
    }
    public function render()
    {
        return view('livewire.callings.details');
    }
}
