<div>
    <div class="card">
        <div class="card-header">
            <div class="card-title mr-5">Grupos Despesa</div>
            
            <ul class="ml-3 nav nav-pills card-header-pills">
                @if($window != "create")
                <li class="nav-item">
                    <button class=" btn btn-primary btn-sm" type="button" wire:click='changePage("create")'>Adicionar Grupo <i class="fa fa-plus"></i></button>
                </li>
                @endif
                @if($window !='index')
                <li class="nav-item">
                    <button class=" btn btn-outline-primary btn-sm" type="button" wire:click='changePage("index")'>Meus Grupos <i class="fa fa-list"></i></button>
                </li>
                @endif
               
            </ul>
        </div>
        <div class="card-body">
            @if($window =='index')
                <livewire:categorlan.index>
            @elseif($window =='create')
                <livewire:categorlan.create>
            @elseif($window =='edit')
                <livewire:categorlan.edit :id="$selectedID">
            @elseif($window =='show')
                <livewire:categorlan.show>
            @endif           
        </div>
        <livewire:categorlan.delete>
    </div>
</div>
