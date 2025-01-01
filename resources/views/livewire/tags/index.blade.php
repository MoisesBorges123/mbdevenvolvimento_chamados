<div class='table-resposive'>
    @if(!empty($grupos) && count($grupos)>0)
        <table class='table'>
            <thead>
                <th>ID</th>
                <th>Nome</th>                
                <th>Ativa</th>
                <th>Descrição</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach($grupos as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name }}</td>                        
                        <td>{{$item->visible}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            <div class="btn-list">
                                <button class="btn btn-icon btn-danger" type="button" wire:click='$emit("delete","{{$item->id}}")'>
                                    <i class="fa fa-trash"></i>
                                </button>
                                <button class="btn btn-icon btn-warning" wire:click="$emit('changePage','{{$item->id}}')">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-default">
            <h4>Você ainda não possui TAGS cadastradas. <span class='text-info' style='cursor:pointer' wire:click="$emit('changePage','create')"><b>Clique aqui</b></span> e cadastre agora mesmo. </h5>
        </div> 
    @endif
</div>
