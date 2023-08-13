<?php

namespace App\Http\Livewire\Dashboard;

use App\Http\Livewire\PageControl;
use App\Models\Callings;
use Illuminate\Support\Facades\Auth;


class Dashboard extends PageControl
{
    public $chamados, $callings;
    public function mount()
    {
        
    }
    public function render()
    {
        return view('livewire.dashboard.dashboard');
    }
   
    
}
