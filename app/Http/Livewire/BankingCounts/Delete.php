<?php

namespace App\Http\Livewire\BankingCounts;

use Livewire\Component;
use App\Models\Cont;
use Illuminate\Support\Facades\DB;

class Delete extends Component
{
    protected $listeners = ['confirm'];

    public function render()
    {
        return view('livewire.banking-counts.delete');
    }

    public function confirm($id)
    {
        try {
            if (empty($id)) {
                throw new \Exception('Não foi possíve executar essa ação CONTA ID: NULL');
            }

            DB::beginTransaction();
            Cont::find($id)->delete();
            DB::commit();
            $this->emit('toast','Conta excluida','success');
            $this->emit('changePage','index');
        } catch(\Exception $e) {
            $this->emit('toast',$e->getMessage(),'error');
        }
    }
}
