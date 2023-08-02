<?php

namespace App\Http\Livewire\Callings\MyCallings;

use App\Models\Callings;
use Illuminate\Support\Facades\Auth;    
use Livewire\Component;

class Closed extends Component
{
    public $callings, $date_beginning, $date_end;
    public function mount()
    {
        date_default_timezone_set('America/Sao_Paulo');        
        $this->date_beginning = date('Y-m-d',strtotime('-30 days',time()));
        $this->date_end = date('Y-m-d',time());
        $this->callings = $this->getCallings();       

    }
    public function render()
    {
        return view('livewire.callings.my-callings.closed');
    }
    public function getCallings()
    {
        return Callings::where('answered_by',Auth::user()->id)
                        ->where('answered','>=',$this->date_beginning)
                        ->where('answered','<=',$this->date_end)                        
                        ->orderby('answered','desc')
                        ->get();
    }
}
