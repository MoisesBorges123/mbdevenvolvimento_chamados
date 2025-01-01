<?php

namespace App\Http\Livewire\BankingCounts;

use Livewire\Component;
use App\Models\Cont;
use App\Models\Banking;
use Illuminate\Support\Facades\DB;

class Edit extends Component
{
    public $saldo;
    public $bancaria;
    public $bankings;
    public $banking_id;
    public $empresarial;
    public $name;
    public $agencia;
    public $num_count;  
    public $bankingCount;  

    public function mount($id)
    {
        $this->getBankings();
        $this->bankingCount = Cont::find($id);
        $this->saldo = $this->bankingCount->saldo;
        $this->empresarial = !empty($this->bankingCount->empresarial);
        $this->name = $this->bankingCount->name;
        $this->agencia = $this->bankingCount->agencia;
        $this->num_count = $this->bankingCount->num_count;
        $this->bancaria = !empty($this->bankingCount->banking_id);
        $this->banking_id = $this->bankingCount->banking_id;
        

    }

    public function render()
    {
        return view('livewire.banking-counts.edit');
    }

    public function onSubimt()
    {
        try{
            DB::beginTransaction();
            
            $count = $this->bankingCount->update([
                'name'=>$this->name,
                'saldo'=>$this->saldo,
                'agencia'=>$this->agencia,
                'num_count'=>$this->num_count,
                'banking_id'=>$this->banking_id,
                'empresarial'=>empty($this->empresarial) ? '0' : 1
            ]);           
            DB::commit();
            $this->emit('changePage','index');
            $this->emit('toast','<b>Prontinho!</b> <br> Sua conta foi alterada no sistema!','success');
        } catch(\Exception $e) {
            DB::rollBack();
            $this->emit('toast','Ops!!<br>'.$e->getMessage(),'error');
        }
    }
    
    private function getBankings()
    {
        $this->bankings = Banking::get();
    }
}
