<?php

namespace App\Http\Livewire\Tags;

use App\Http\Livewire\PageControl;


class Dashboard extends PageControl
{
    public function mount()
    {
        $this->changePage('index');
    }
    public function render()
    {
        return view('livewire.tags.dashboard');
    }
}
