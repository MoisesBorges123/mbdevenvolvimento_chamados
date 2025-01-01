<?php 
namespace App\Http\Livewire\Payments;

use DateTime;
use Livewire\Component;
use App\Models\Lancamento;

class ListaDespesas extends Component {
    public $dataInicial;
    public $dataFinal;
    public $filter;

    public function mount() 
    {
        $this->filter = false;
        setlocale(LC_TIME, 'pt_BR.UTF-8');
        date_default_timezone_set('America/Sao_Paulo'); // Define o fuso horário
        $this->getPeriodoAtual();
        $this->filtrar();
    }

    public function render()
    {
        return view('livewire.payments._lista-despesas');
    }

    public function filtrar()
    {
        $lancamentos = Lancamento::where('user_id',auth()->user()->id)
                        ->where('date_transaction','>=',$this->dataInicial)
                        ->where('date_transaction','<=',$this->dataFinal)
                        ->get();
        
    }
    private function getPeriodoAtual()
    {
        $data = new DateTime('first day of this month');
        $data2 = new DateTime('last day of this month');
        $this->dataInicial = $data->format('Y-m-d');
        $this->dataFinal = $data2->format('Y-m-d');
    }
}