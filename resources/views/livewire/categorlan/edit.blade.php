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
                <label for="">Natureza do Grupo</label>
                <select name="typelan" wire:model='typelan' id="typelan" class="form-control">
                    <option value="">Selecione</option>
                    @forelse($typesLAN as $item)
                        <option value="{{$item->id}}">
                            @if($item->positive)
                            (+)
                            @else
                            (-)
                            @endif
                            {{' '.$item->name}}
                        </option>
                    @empty       
                    @endif
    
                </select>
            </div>
        </div>
        <div class="form">
            <div class="form-group">
                <textarea wire:model='description' cols="30" rows="10" class="form-control"></textarea>

            </div>
        </div>
        <div class="form">
            <button class="btn btn-primary" type="submit">Salvar</button>
        </div>
    </form>
    
</div>
