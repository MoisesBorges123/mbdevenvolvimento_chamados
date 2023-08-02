<?php

namespace App\Http\Livewire\Callings;

use App\Models\Urgency;
use App\Models\Callings;
use App\Models\Departments;
use Livewire\Component;

class OpenCalling extends Component
{
    public $urgencyModes, $departments, $urgencia, $description, $departamento, $urgencyDescription ;
    
    public function mount()
    {       
        
        $this->urgencyModes = Urgency::get();
        $this->departments = Departments::get();
        //dd(count($this->urgencyModes));
    }    
    public function rules()
    {
        return [
            'urgencia'=>'required',
            'description'=>'required',
            'departamento'=>'required'
        ];
    }
    public function render()
    {
        return view('livewire.callings.open-calling');
    }
    public function onSubmit()
    {
        date_default_timezone_set('America/Sao_Paulo');        
        $this->validate();
        try{
            Callings::create([
                'title'=> auth()->user()->department->name.' '.substr($this->description,0,20).'...',
                'description'=>$this->description,
                'department_id'=>$this->departamento,
                'user_id'=>auth()->user()->id,
                'urgency_id'=>$this->urgencia,               
                'opened'=>date('Y-m-d H:i:s',time())
            ]);
            $this->emit('whatsappNotify','553398803640','Você abriu um novo chamado');
            $this->emit('toast','Sua solicitação foi encaminhada para o responsável com sucesso!','success');            
        }catch(\Exception $e){
            $this->emit('toast',$e->getMessage(),'error');
        }
        $this->reset(['urgencia','description','departamento']);

        



    }
    public function updatedurgencia(){
        
        $this->getUrgencyDescrition();
        
    }
    public function getUrgencyDescrition()
    {
        
        try{
            if(!empty($this->urgencia))                            
                $this->urgencyDescription = $this->urgencyModes->where('id',$this->urgencia)->first()->description;
                       
            else                    
                $this->urgencyDescription = '';            
        }catch(\Exception $e){
            dd($e->getMessage());
            $this->emit('toast',$e->getMessage(),'error');
        }
        
    }
}
