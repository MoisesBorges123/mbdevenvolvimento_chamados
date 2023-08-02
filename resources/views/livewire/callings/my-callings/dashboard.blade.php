<div class='rown justify-content-center'>
    <div class="col-md-12 col-sm-12">        
        <div class="panel panel-primary">
            <div class=" tab-menu-heading p-0 bg-light">
                <div class="tabs-menu1 ">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                        <li class=""><a href="#tab5" class="active" data-toggle="tab">Minhas Solicitações</a></li>
                        <li><a href="#tab6" data-toggle="tab">Meus Atendimentos</a></li>                                            
                    </ul>
                </div>
            </div>
            <div class="panel-body tabs-menu-body">
                <div class="tab-content">
                    <div class="tab-pane active " id="tab5">
                        <livewire:callings.my-callings.opened>
                    </div>
                    <div class="tab-pane " id="tab6">
                        <livewire:callings.my-callings.closed>
                    </div>                    
                </div>
            </div>
        </div>
                 
    </div>
    
    
</div>
