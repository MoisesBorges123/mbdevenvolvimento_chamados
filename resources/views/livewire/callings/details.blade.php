<div class = 'row justify-content-center'>
    <div class="col-md-11">
        <div class="card">
            <div class="card-header">
                
                <h5 class="card-title">Mais informações</h5>
                
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 mb-5">
                        @if($redirectExternal)
                            <a class='btn btn-outline-primary' href="{{url()->previous()}}">
                                <i class="fa fa-chevron-left"></i>
                                Voltar
                            </a>
                        @else
                            <button class='btn btn-outline-primary' wire:click='$emit("changePage","index")'>
                                <i class="fa fa-chevron-left"></i>
                                Voltar
                            </button>
                        @endif
                    </div>
                    <div class="col-12">                        
                        <div class="d-flex">
                            <h6>Aberto Por: &nbsp;</h6>
                            <p>{{$calling->user->name}} / {{ $calling->user->department->name}}</p>
                        </div>
                        <p><b>Aberto:&nbsp;</b>{{date('d/m/Y H:m:s',strtotime($calling->created_at))}}</p>
                        <p><b>Lido:&nbsp;</b>@if(!empty($calling->readed)){{date('d/m/Y H:m:s',strtotime($calling->readed))}} @else - @endif</p>
                        <p><b>Atendido:&nbsp;</b>@if(!empty($calling->answered)) {{date('d/m/Y H:m:s',strtotime($calling->answered))}} @else - @endif</p>
                                        
                    </div>
                    <div class="col-12">
                        <h4>
                            <b>
                                Mensagem
                            </b>
                        </h4>
                        <h5>{{$calling->description}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
