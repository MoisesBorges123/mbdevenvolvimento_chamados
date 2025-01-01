<?php

namespace App\Http\Livewire\BankingCounts;

use App\Http\Livewire\PageControl;


class Dashboard extends PageControl
{
    public function mount()
    {
        $this->changePage('index');
    }
    public function render()
    {
        return view('livewire.banking-counts.dashboard');
    }
}
