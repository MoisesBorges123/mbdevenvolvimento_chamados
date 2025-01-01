<div>
    <div class="card">
        <div class="card-header">
            <div class="card-title mr-5">Contas</div>
            <ul class="ml-3 nav nav-pills card-header-pills">
                @if($window != "create")
                <li class="nav-item">
                    <button class=" btn btn-primary btn-sm" type="button" wire:click='changePage("create")'>Adicionar Conta <i class="fa fa-plus"></i></button>
                </li>
                @endif
                @if($window !='index')
                <li class="nav-item">
                    <button class=" btn btn-outline-primary btn-sm" type="button" wire:click='changePage("index")'>Minhas Contas <i class="fa fa-list"></i></button>
                </li>
                @endif
               
            </ul>
        </div>
        <div class="card-body">
            @if($window =='index')
                <livewire:banking-counts.index wire:key='78255'>
            @elseif($window =='create')
                <livewire:banking-counts.create wire:key='17881'>
            @elseif($window =='edit')
                <livewire:banking-counts.edit :id="$selectedID">
            @elseif($window =='show')
                <livewire:banking-counts.show wire:key='5887'>
            @endif
            <livewire:banking-counts.delete wire:key='1231'>
        </div>
    </div>
</div>
