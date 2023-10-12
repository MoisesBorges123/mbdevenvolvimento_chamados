<div class="page-header">        
    <div class="page-rightheader">            
        <div class="btn btn-list">
            @if($window != 'create')
                <button  class='btn btn-primary' wire:click="changePage('create')"  type='button'>Adicionar usuário</button>
            @endif
            @if($window != 'index')
                <button  class='btn btn-outline-primary' wire:click="changePage('index')"  type='button'>Usuários Cadastrados</button>
            @endif
        </div>
        
    </div>
</div>
<div class='row justify-content-center'>
    @if($window=='index')
        <livewire:user.list-users>
    @elseif($window == 'edit')
        <livewire:user.edit :id="$selectedID">
    @elseif($window == 'create')
        <livewire:user.create>
    @endif
    <livewire:user.delete>
</div>