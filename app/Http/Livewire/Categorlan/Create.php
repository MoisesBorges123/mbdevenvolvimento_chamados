<?php

namespace App\Http\Livewire\Categorlan;

use App\Models\CategoriaLanTypeLan;
use App\Models\Naturelan;
use Livewire\Component;
use App\Models\TypeLan;
use Illuminate\Support\Facades\DB;

class Create extends Component
{
    public $typesLAN, $typelan,$name, $description;
    public function mount()
    {
        $this->typesLAN  = Naturelan::get();
    }
    public function render()
    {
        return view('livewire.categorlan.create');
    }
    public function onSubmit()
    {
        try{
            DB::beginTransaction();
            CategoriaLanTypeLan::create([
                'name'=>$this->name,
                'naturelan_id'=>$this->typelan,
                'description'=> $this->description,
                'user_id'=>auth()->user()->id
            ]);
            DB::commit();
            $this->emit('toast','Grupo cadasstrasdo','success');
            $this->emit('changePage','index');
        }catch(\Exception $e) 
        {
            DB::rollBack();
            $this->emit('toast',$e->getMessage());
        }
    }

}
