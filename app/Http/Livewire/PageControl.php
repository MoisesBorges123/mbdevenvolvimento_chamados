<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PageControl extends Component
{
    public $window, $selectedID;
    protected $listeners=['changePage'];
    public function render()
    {
        return view('livewire.page-control');
    }
    public function changePage($page,$id=null)
    {
        if(!empty($page)){
            $this->window = $page;
        }
        if(!empty($id)){
            $this->selectedID = $id;
        }
    }

}
