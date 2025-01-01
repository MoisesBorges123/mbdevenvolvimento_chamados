<?php

namespace App\Http\Livewire\Tags;

use App\Models\Tag;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Create extends Component
{
    public $name;
    public $description;
    
    
    public function render()
    {
        return view('livewire.tags.create');
    }
    public function onSubmit()
    {
        try{
            DB::beginTransaction();
            Tag::create([
                'name'=>$this->name,                
                'description'=> $this->description,
                'visible'=>true,
                'user_id'=>auth()->user()->id
            ]);
            DB::commit();
            $this->emit('toast','Tag cadastrasda','success');
            $this->emit('changePage','index');
        }catch(\Exception $e) 
        {
            DB::rollBack();
            $this->emit('toast',$e->getMessage());
        }
    }

}
