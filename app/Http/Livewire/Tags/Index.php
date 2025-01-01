<?php

namespace App\Http\Livewire\Tags;

use App\Models\Tag;
use Livewire\Component;

class Index extends Component
{
    public $grupos;
    protected $listeners=['getTags'];
    public function mount() :void
    {
        $this->getTags();
    }
    public function render() :object
    {
        return view('livewire.tags.index');
    }
    public function getTags() :void
    {
        $this->grupos = Tag::get();
    }
}
