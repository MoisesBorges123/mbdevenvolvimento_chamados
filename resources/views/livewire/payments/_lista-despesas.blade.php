<div class="row">
    <div class="col-12">
        <div class="page-header">
							<div class="page-leftheader">
                                @if(date('m',strtotime($dataFinal)) == date('m',strtotime($dataInicial)))
                                    <h4>Despesas <b class='text-capitalize'>{{strftime('%B')}}</b></h4>
                                @else
                                    <h4>Despesas <b>{{date('d/m/Y',strtotime($dataInicial))}} a {{date('d/m/Y',strtotime($dataFinal))}}<b> </h4>
                                @endif
								
							</div>
							<div class="page-rightheader">
                                <div class='d-none'>
                                    <div class="form-row">
                                        <div class="form-group col-5">
                                            <label for="dataInicial">Data Inicial</label>
                                            <input type="date" name="dataInicial" id="dataInicial" wire:model='dataInicial' class="form-control form-control-sm">
                                        </div>
                                        <div class="form-group col-5">
                                            <label for="dataInicial">Data Final</label>
                                            <input type="date" name="dataFinal" id="dataFinal" wire:model='dataFinal' class="form-control form-control-sm">
                                        </div>
                                        <div class="form-group col-5">
                                            <button class="btn btn-info" wire:click='filtrar'>
                                                <i class="fe fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
								<div class="btn btn-list">                                    
									<a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-filter mr-1"></i> Filtro </a>									
								</div>
							</div>
						</div>
        
    </div>
    <div class="col-12">
        <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap table-danger">
                <thead class="bg-danger text-white">
                    <tr>
                        <th class="text-white">ID</th>
                        <th class="text-white">Name</th>
                        <th class="text-white">Position</th>
                        <th class="text-white">Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Joan Powell</td>
                        <td>Associate Developer</td>
                        <td>$450,870</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Gavin Gibson</td>
                        <td>Account manager</td>
                        <td>$230,540</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Julian Kerr</td>
                        <td>Senior Javascript Developer</td>
                        <td>$55,300</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Cedric Kelly</td>
                        <td>Accountant</td>
                        <td>$234,100</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Samantha May</td>
                        <td>Junior Technical Author</td>
                        <td>$43,198</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>