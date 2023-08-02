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
        $this->changePage('index');
    }
    public function render()
    {
        return view('livewire.dashboard.dashboard');
    }
    private function getCallings(){
        $this->callings = Callings::where('department_id',Auth::user()->deparment_id)->get();
    }
    public function filter(){
        $this->getCallings();
        $this->chamados = $this->callings;
    }
    
}
