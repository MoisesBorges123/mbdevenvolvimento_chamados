<div>
    <form wire:submit.prevent='onSubmit'>
        <div class="form">
            <div class="form-group">
                <label for="">Nome</label>
                <input type="text" name="name" id="name"  wire:model='name' class="form-control">
            </div>
        </div>        
        
        <div class="form">
            <div class="form-group">
                <label for="">Descrição</label>
                <textarea wire:model='description' cols="30" rows="10" class="form-control"></textarea>

            </div>
        </div>
        <div class="form">
            <button class="btn btn-primary" type="submit">Salvar</button>
        </div>
    </form>
    
</div>
