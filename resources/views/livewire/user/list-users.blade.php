<div class='row justify-content-center'>
    <div class="col-md-11 col-sm-12">
        <div class="card">
            @if(!empty($users) && count($users) > 0)
                <div class="card-header">
                    <h4 class="card-title">Usuários</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-strip">
                            <thead>
                                <th></th>
                                <th>Nome</th>
                                <th>Perfil</th>
                                <th>Seções</th>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->profile->name ?? 'Não tem perfil atribuido'}}</td>
                                        <td>
                                            <div class="btn-list">
                                                <button class="btn btn-warning btn-icon" wire:click="changePage('edit','{{$user->id}}')">
                                                    <i class="fe fe-edit"></i>
                                                </button>
                                                <button wire:click="$emit('swal','Tem certeza que deseja excluir esse usuário?','question','true','destroy','{{$user->id}}')" class="btn btn-danger btn-icon ">
                                                    <i class="fe fe-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
            <div class="card-body">
                <div class="alert alert-light">
                    <h4>Nenhum usuário encontrado.</h4>
                </div>                
            </div>
            @endif
        </div>
    </div>
</div>
