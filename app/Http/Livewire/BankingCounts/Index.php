<?php

namespace App\Http\Livewire\BankingCounts;
use App\Models\Cont;
use Livewire\Component; 

class Index extends Component
{
    public $counts;
    public function mount()
    {
        $this->getCounts();
    }
    public function render()
    {
        return view('livewire.banking-counts.index');
    }
    public function getCounts()
    {
       $this->counts = auth()->user()->contas;
       
    }
}
