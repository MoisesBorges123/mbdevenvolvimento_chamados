<div class="row">
    <div class="col-md-12" wire:poll.5s='filter'>
       <div class="card">
          <div class="card-header">
            
             <h5 class="card-title">Chamados Abertos {{ date('H:i',time()) }}</h5>
          </div>
          <div class="card-body table-responsive">
             @if(!empty($chamados) && count($chamados) >0)
                <table class="table table-hover card-table table-vcenter text-nowrap">
                   <thead>                    
                      <th>ID</th>
                      <th>Descrição</th>
                      <th>Aberto por...</th>
                      <th>Abertura</th>                                    
                      <th></th>
                   </thead>
                   <tbody>
                      @foreach($callings as $dado)
                      <tr>                         
                        <td>                           
                            {{$dado->id}}
                        </td>
                         <td>{{substr($dado->description,0,20)}}...</td>
                         <td>{{$dado->user->name.'/'.$dado->user->department->name}}</td>
                         <td>{{date('d/m/Y H:i:s',strtotime($dado->created_at))}}</td>                       
                         <td>
                            <div class="btn-list">
                                <button class="btn btn-icon btn-primary" wire:click='$emit("changePage","show","{{$dado->id}}")'>
                                    <i class="fe fe-eye"></i>
                                </button>
                                <button class="btn btn-icon btn-success" wire:click='$emit("atendido","{{$dado->id}}")'>
                                    <i class="fe fe-check-circle"></i>
                                </button>
                                <!-- <button class="btn btn-icon btn-danger" wire:click='$emit("swal","Deseja excluir esse chamado?","question","true","destroy","{$dado->id}}")'> -->
                                <button class="btn btn-icon btn-danger" wire:click='$emit("swal","Essa funcionalidade não está disponível ainda.","info")'>
                                    <i class="fe fe-trash"></i>
                                </button>                                
                            </div>
                         </td>
                      </tr>
                      @endforeach
                   </tbody>
                </table>       
             @else
                <div class="alert alert-default">
                <p>Nenhum chamado encontrado.</p> 
                </div>
             @endif
          </div>
       </div>              
    </div>
    
 </div>