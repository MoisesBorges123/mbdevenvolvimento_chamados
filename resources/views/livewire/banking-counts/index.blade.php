<div class='table-resposive'>
    @if(!empty($counts) && count($counts)>0)
        <table class='table'>
            <thead>
                <th>ID</th>
                <th>Tipo</th>                
                <th>Saldo</th>
                <th>Caráter</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach($counts as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{!empty($item->bancaria) ? 'Bancária' : 'Caixa' }}</td>                        
                        <td>{{$item->saldo}}</td>
                        <td>{{$item->empresarial ? 'Conta Empresárial' : 'Conta Pessoa Física' }}</td>
                        <td>
                            <div class="btn-list">
                                <button class="btn btn-warning btn-icon" type='button' wire:click="$emit('changePage','edit',{{$item->id}})">
                                    <i class="fa fa-pencil"></i>
                                </button>
                                <button class="btn btn-danger btn-icon" type="button" wire:click="$emit('swal-modal',{{
                                        json_encode([
                                            'parm_confirm'=>$item->id,
                                            'title'=>'Exclui conta?',
                                            'type'=>'question',
                                            'message'=>'Tem certeza que deseja excluir a conta ID:'.$item->id.', saldo: '.$item->saldo.'? ',
                                            'liveWire_action_confirm'=>'confirm',
                                            'confirmButtonText'=>'Sim! Excluir.',
                                            'cancelButtonText'=>'Não! Me enganei.',
                                            'showCancelButton'=>true
                                        ])
                                }})">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-default">
            <h4>Você ainda não possui contas cadastradas. <span class='text-info' style='cursor:pointer' wire:click="$emit('changePage','create')"><b>Clique aqui</b></span> e cadastre agora mesmo. </h5>
        </div> 
    @endif
</div>
