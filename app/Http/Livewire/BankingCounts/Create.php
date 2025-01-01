<?php

namespace App\Http\Livewire\BankingCounts;

use App\Models\Banking;
use Livewire\Component;
use App\Models\Cont;
use Illuminate\Support\Facades\DB;


class Create extends Component
{
    public $saldo,$bancaria,$bankings, $banking_id, $empresarial, $name,$agencia, $num_count;    
    public function mount()
    {        
        $this->getBankings();
    }
    public function render()
    {
        return view('livewire.banking-counts.create');
    }
    public function onSubimt()
    {   
        try{
            DB::beginTransaction();
            $count = Cont::create([
                'name'=>$this->name,
                'saldo'=>$this->saldo,
                'agencia'=>$this->agencia,
                'num_count'=>$this->num_count,
                'banking_id'=>$this->banking_id,
                'empresarial'=>empty($this->empresarial) ? '0' : 1
            ]);
            $count->usersOwner()->attach(auth()->user()->id);
            DB::commit();
            $this->reset();
            $this->emit('toast','<b>Prontinho!</b> <br> Sua conta foi cadastrada no sistema!','success');
            $this->emit('changePage','index');
        }catch(\Exception $e){
            DB::rollBack();
            $this->emit('swal',$e->getMessage(),'error');
        }
        
    }
    public function getBankings()
    {
        $this->bankings = Banking::get();
    }
}
