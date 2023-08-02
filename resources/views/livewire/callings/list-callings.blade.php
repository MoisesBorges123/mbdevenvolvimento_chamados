<div class='row justify-content-center'>
    <div class="col-11">  

        @if(!empty($callings) && count($callings) > 0 )
            <div class="card">
                <div class="card-header">
                    <h3 class='card-title'>Lista de Chamados</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover card-table table-vcenter text-nowrap">
                            <thead>
                                <th>ID</th>
                                <th>Descrição</th>
                                <th>Aberto por...</th>
                                <th>Abertura</th>
                                <th>Fechamento</th>
                                <th>Status</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach($callings as $dado)
                                <tr>
                                    <td>{{$dado->id}}</td>
                                    <td>{{substr($dado->description,0,40)}}...</td>
                                    <td>{{$dado->user->name}}</td>
                                    <td>{{date('d/m/Y',strtotime($dado->opened))}}</td>
                                    <td>{{date('d/m/Y',strtotime($dado->answered))}}</td>
                                    <td>
                                        @if(!empty($dado->answered) && !empty($dado->readed))
                                            <i class="fe fe-check-circle text-success"></i>&nbsp; Atendido
                                        @elseif(empty($dado->answered) && !empty($dado->readed))
                                            <i class="fe fe-eye text-primary"></i> &nbsp; Lido
                                        @else
                                            <i class="fe fe-clock text-default"></i> &nbsp; Em espera
                                        @endif
                                    </td>
                                    <td>Actions</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @else
            <div class="alert alert-light-primary">
                <h4>Nenhum chamado encontrado.</h4>
            </div>
        @endif
        
    </div>
</div>
