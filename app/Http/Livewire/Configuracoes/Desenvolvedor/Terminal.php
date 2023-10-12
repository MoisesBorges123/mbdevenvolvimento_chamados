<?php

namespace App\Http\Livewire\Configuracoes\Desenvolvedor;

use Illuminate\Support\Facades\Artisan;
use Livewire\Component;

class Terminal extends Component
{
    public $resultado, $comando;    
    public function render()
    {
        return view('livewire.configuracoes.desenvolvedor.terminal');
    }
    public function processar(){
        if(!empty($this->comando)){
            try{
                if($this->comando =='cls' || $this->comando == 'clear'){
                    $this->resultado = '';
                }else if($this->comando == 'route:list')
                {
                    $this->emit('toast','Esse terminal não suporta esse comando.','warning');
                }
                else{
                    Artisan::call(strval($this->comando));
                    $this->resultado = Artisan::output();
                    //dd($this->resultado);
                }
    
            }catch(\Exception $e)
            {
                $this->emit('swal',$e->getMessage(),'error');
            }
        }else{
            $this->emit('swal','Por favor digite um comando','warning');
        }
        
    }
}
