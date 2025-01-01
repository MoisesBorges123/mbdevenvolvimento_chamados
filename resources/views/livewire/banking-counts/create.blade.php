<div>
   <form wire:submit.prevent='onSubimt'>
        <div class="form">
            <div class="form-group">
                <label for="conta-nome">Conta</label>
                <input type="text" name="nome" class='form-control' id="conta-nome" wire:model='name' placeholder="Informe um nome ou número da sua conta.">
            </div>
        </div>
        <div class="form">
            <div class="form-group">
                <label for="conta-saldo">Saldo Inicial</label>
                <input type="text" name="saldo" class='form-control' id="conta-saldo" wire:model='saldo' placeholder="Informe o saldo atual da sua conta.">
            </div>
        </div>
        <label class="custom-switch">
            <input wire:model='bancaria'  type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
            <span class="custom-switch-indicator"></span>
            <span class="custom-switch-description">Conta bancária</span>
        </label>
        @if(!empty($bancaria))
        <div class="form">
            <div class="form-group">
                <label for="">Bancos</label>
                <select name="bankings" id="bankings" class="form-control" wire:model="banking_id">
                    <option> - Selecione - </option>
                    @foreach($bankings as $item)
                        <option value="{{$item->id}}">{{$item->banco}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-6">
                <label for="agencia">Agência</label>
                <input type="text" name="agencia" placeholder="0058" id="agencia" wire:model='agencia' class="form-control">
            </div>
            <div class="form-group col-6">
                <label for="num_count">Número Conta</label>
                <input type="text" name="num_count" id="num_count" wire:model='num_count' class="form-control" placeholder="0.000.00-5">
            </div>
        </div>
        
        @endif
        
        <label class="custom-switch">
            <input wire:model='empresarial' type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
            <span class="custom-switch-indicator"></span>
            <span class="custom-switch-description">Conta Empresarial</span>
        </label>
        <div class="form mt-4">
            <button class="btn btn-primary" type='submit'>Salvar</button>
        </div>
   </form>
    </div>
