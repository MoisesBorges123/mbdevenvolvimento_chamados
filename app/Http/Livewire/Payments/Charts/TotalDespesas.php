<?php
namespace App\Http\Livewire\Payments\Charts;

use Livewire\Component;
use App\Models\Lancamento;
class TotalDespesas extends Component {

    public $totalDespesas;
    public $totalDespesasAnterior;
    public $percentual;
    public function mount()
    {
        $this->totalDespesas = $this->getTotal();
        $this->percentual = $this->getPercentual($this->totalDespesas);
    }

    public function render()
    {
        return view('livewire.payments.charts._chart-total-despesa');
    }

    public function getTotal() 
    {
        $lancamentos = Lancamento::where('user_id',auth()->user()->id)->get();
       return  $lancamentos->filter(function($item){        
            return date('m',strtotime($item['date_transaction'])) == date('m',time());
        })->sum('value_transaction');
    }

    public function getPercentual($totalAtual) 
    {
        $lancamentos = Lancamento::where('user_id',auth()->user()->id)->get();
       $this->totalDespesasAnterior = $totalAnterior =  $lancamentos->filter(function($item){        
            return date('m',strtotime($item['date_transaction'])) == date('m',strtotime('-1 month',time())) ;
        })->sum('value_transaction');
        $per = ($totalAtual/$totalAnterior)*100;
        return number_format($per,1,',','.');
    }
}