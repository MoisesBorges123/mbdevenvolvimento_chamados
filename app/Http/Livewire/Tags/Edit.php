<?php

namespace App\Http\Livewire\Tags;

use App\Models\Tag;
use Livewire\Component;

class Edit extends Component
{
    public $tag;
    public $name;
    public $description;

    public function mount(Tag $tag)
    {
        $this->tag  = $tag;
        dd($this->tag);
    }
    public function render()
    {
        return view('livewire.tags.edit');
    }
}
