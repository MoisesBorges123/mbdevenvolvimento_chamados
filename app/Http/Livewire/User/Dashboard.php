<?php

namespace App\Http\Livewire\User;

use App\Http\Livewire\PageControl;


class Dashboard extends PageControl
{
    public function mount()
    {
        $this->changePage('index');
    }
    public function render()
    {
        return view('livewire.user.dashboard');
    }
}
