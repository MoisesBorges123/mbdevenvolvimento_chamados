<div class='row justify-content-center mb-5 pb-5'>
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Terminal Artisan</h5>               
            </div>
            <div class="card-body">
                <div class="form">
                    <div class="form-group">
                        <label for="">Linha de comando</label>
                        <div class="input-group mb-3">
                            <span class='input-group-text'>php artisan </span>
                            <input wire:model='comando'  class="form-control">
                            
                                <button class="btn btn-primary input-group-text" wire:click='processar'>Processar
                                    <span  wire:loading class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    </button>
                            
                          </div>
                        
                        
                    </div>
                </div> 
                <div class="form">
                    <div class="form-group">
                           
                    </div>
                </div>               
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Resultado</h5>
            </div>
            <div class="card-body">
              <pre> {{ $resultado }}  </pre>
            </div>
        </div>
    </div>

</div>
