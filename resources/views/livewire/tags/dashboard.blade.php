<div>
    <div class="card">
        <div class="card-header">
            <div class="card-title mr-5">Tags</div>
            
            <ul class="ml-3 nav nav-pills card-header-pills">
                @if($window != "create")
                    <li class="nav-item">
                        <button class=" btn btn-primary btn-sm" type="button" wire:click='changePage("create")'>Adicionar Tag <i class="fa fa-plus"></i></button>
                    </li>
                @endif
                @if($window !='index')
                    <li class="nav-item">
                        <button class=" btn btn-outline-primary btn-sm" type="button" wire:click='changePage("index")'>Minhas Tags <i class="fa fa-list"></i></button>
                    </li>
                @endif
               
            </ul>
        </div>
        <div class="card-body">
            @if($window == 'index')
                <livewire:tags.index wire:key='1498787454' />
            @elseif($window =='create')
                <livewire:tags.create wire:key='1454233' />
            @elseif($window =='edit')
                <livewire:tags.edit wire:key='145434' :id="$selectedID">
            @elseif($window =='show')
                <livewire:tags.show wire:key='145453' />
            @endif           
        </div>
        <livewire:categorlan.delete wire:key='14545454' />
    </div>
</div>
