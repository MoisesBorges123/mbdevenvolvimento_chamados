<?php

namespace App\Http\Livewire\Callings;

use App\Models\Callings;
use Livewire\Component;

class SetorListCallings extends Component
{
    public $chamados, $callings,$setor, $alertSound=false,$numOpenCallings;
    protected $listeners = ['loadCallings'];
    public function mount($department)
    {
        $this->setor = $department;       
        $this->getCallings();
        $this->chamados = $this->callings;
        $this->numOpenCallings = $this->callings->count();
    
    }
    public function render()
    {
        return view('livewire.callings.setor-list-callings');
    }
    private function getCallings(){
        $this->callings = Callings::where('department_id',$this->setor)->where('answered',null)->get();
    }
    public function filter(){
        date_default_timezone_set('America/Sao_Paulo');
        $this->getCallings();
        $this->chamados = $this->callings;
        $this->alert();
    }
    public function loadCallings(){        
    }
    public function alert(){
        if($this->numOpenCallings < $this->callings->count())
        {
        
           $this->emit('notifySound');
           $this->numOpenCallings = $this->callings->count();
        }else{
            $this->alertSound = false;
        }
    }
}
