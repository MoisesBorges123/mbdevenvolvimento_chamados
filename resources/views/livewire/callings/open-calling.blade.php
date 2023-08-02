<div class ='row justify-content-center'>
    <div class="col-md-8 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Abrir Chamado</h3>
            </div>
            <x-alerts.errors-validation></x-alerts.errors-validation>
            <div class="card-body">
                <form wire:submit.prevent='onSubmit'>
                    @if(!empty($urgencyModes) && count($urgencyModes) > 0)
                        <div class="form">
                            <div class="form-group">
                                <label for="">Nível urgência</label>
                                <select wire:model='urgencia' class="form-control">
                                    <option value=""> - Selecione o nível de urgência - </option>
                                    @foreach($urgencyModes as $mode)
                                        <option value="{{$mode->id}}">{{$mode->name}}</option>
                                    @endforeach
                                </select>                               
                                <h5 class='mt-3'>{{$urgencyDescription}}</h5>
                               
                            </div>
                        </div>
                    @else
                        <div class="alert alert-light">
                            <h5>Nenhum nível de urgência cadastrado.</h5>
                        </div>
                    @endif
                    @if(!empty($departments) && count($departments) > 0)
                        <div class="form">
                            <div class="form-group">
                                <label for="">Setor Responsável</label>
                                <select wire:model='departamento' class="form-control">
                                    <option value=""> - Selecione o setor  - </option>
                                    @foreach($departments as $dado)
                                        <option value="{{$dado->id}}">{{$dado->name}}</option>
                                    @endforeach
                                </select>                             
                            </div>
                        </div>
                    @else
                        <div class="alert alert-light">
                            <h5>Nenhum setor cadastrado.</h5>
                        </div>
                    @endif
                    
                    <div class="form">
                        <div class="form-group">
                            <label for="">Descrição</label>
                            <textarea wire:model = 'description' cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form">
                        <button class="btn btn-primary" type="submit">Abrir Chamado</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
