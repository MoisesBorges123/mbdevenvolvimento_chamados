<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label for="">Data Inicial</label>
                <input type="date" wire:model='date_beginning' class="form-control">
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="">Data Final</label>
                <input type="date" wire:model='date_end' class="form-control">
            </div>
        </div>
    </div>
    <div class="card-body">
        @if(!empty($callings) && count($callings) > 0)
            <div class='table-responsive'>
                <table class="table table-hover card-table table-vcenter text-nowrap">
                    <thead>
                        <th>ID</th>
                        <th>Descrição</th>            
                        <th>Abertura</th>
                        <th>Visualizado</th>
                        <th>Fechamento</th>
                        <th>Status</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($callings as $dado)
                        <tr>
                            <td><a href='{{route('details-calling',['id'=>$dado->id,'external'=>true])}}'>{{$dado->id}}</a></td>
                            <td>{{$dado->description}}</td>                
                            <td>{{date('d/m/Y H:i:s',strtotime($dado->opened))}}</td>
                            <td>
                                @if(!empty($dado->readed_by))
                                    {{$dado->userRead->name}} - {{date('d/m/Y H:i:s',strtotime($dado->readed))}}
                                @else 
                                    - 
                                @endif
                            </td>
                            <td>
                                @if(!empty($dado->answered))
                                    {{$dado->userAnswered->name}} - {{date('d/m/Y H:i:s',strtotime($dado->answered))}}
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                @if(!empty($dado->answered) && !empty($dado->readed) && !empty($dado->confirmed))
                                    @if($dado->confirmed == 'S')
                                        <span class="badge badge-pill badge-success mt-2"><i class="fe fe-check-circle"></i>&nbsp;Confirmado</span>  
                                    @else
                                        <span class="badge badge-pill badge-warning mt-2"><i class="fe fe-alert-triangle"></i>&nbsp;Recusado</span>  
                                    @endif
                                @elseif(!empty($dado->answered) && !empty($dado->readed))
                                    <i class="fe fe-check-circle text-success"></i>&nbsp; Atendido
                                @elseif(empty($dado->answered) && !empty($dado->readed))
                                    <i class="fe fe-eye text-primary"></i> &nbsp; Lido
                                @else
                                    <i class="fe fe-clock text-default"></i> &nbsp; Em espera
                                @endif
                            </td>
                            <td>
                                <div class="btn-list">
                                    @if(empty($dado->answered))
                                       <!-- <button class='btn btn-primary' wire:click='reCalling'>
                                            <i class="mdi mdi-alarm"></i> &nbsp; Relembrar                            
                                        </button> -->
                                    @endif
                                    @if(!empty($dado->answered) && empty($dado->confirmed))
                                        <!-- <button class='btn btn-primary' wire:click='reCalling'>
                                            <i class="fe fe-check"></i>&nbsp;Confirmar                            
                                        </button> -->
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <h5>Nenhuma solicitação encontrada.</h5>
        @endif
    </div>
</div>

