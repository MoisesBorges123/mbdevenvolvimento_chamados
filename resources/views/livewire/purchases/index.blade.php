<div class="row mt-5">
 <!-- Dados da Compra -->
 @dd($dadosNFE)
 <div class="col-xl-6 col-md-12 col-lg-6">
    <div class="card overflow-hidden card-collapsed">
        <div class="card-header bg-primary ">
            <h4 class="card-title text-white">Instruções</h4>
            <div class="card-options ">
                <a href="#" class="card-options-collapse mr-2" data-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x text-white"></i></a>
            </div>
        </div>
        <div class="card-body">
            <h3 class='text-primary text-center'>Adicionar Despesa</h3>
                <ol class='title'>
                    <li>
                        <h5>Marque os itens que deseja adicionar.</h5>
                    </li>
                    <li>
                        <h5>Selecione a categoria da despesa importada.</h5>
                    </li>
                    <li>
                        <h5>
                            Você pode também adicionar uma tag a essa despesa. <span class='text-danger'>Ex.: Férias Gramado</span>
                        </h5> 
                    </li>
                </ol>
        </div>        
    </div> 
    <div class="card">
        <div class="card-body">
            <h4 class='card-title'>Importar despesas | {{count($itensSelecionados)}} Itens selecionados</h4>            
            <div class="form-row">
                <div class="col-12 form-group">
                    <label for="">Conta</label>
                    <select name="conta" id="conta" wire:model='conta' class='form-control form-control-sm'>
                        <option value=""> - Selecione - </option>
                        @foreach($contas ?? [] as $item)
                        <option value="{{$item['id']}}">{{$item['name']}} - R${{number_format(floatval($item['saldo']),2,',','.')}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 form-group">
                    <label for="">Classificação</label>
                    <select name="group" id="group" wire:model='grupo' class='form-control form-control-sm'>
                        <option value=""> - Selecione - </option>
                        @foreach($grupos ?? [] as $item)
                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 form-group">
                    <div class="input-group wd-150">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm4.25 12.15L11 13V7h1.5v5.25l4.5 2.67-.75 1.23z" opacity=".3"></path><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"></path></svg>
                                Tag
                            </div><!-- input-group-text -->
                        </div><!-- input-group-prepend -->
                        
                        <select name="tag" id="tag" class="form-control" wire:model='tag'>
                            <option value=""> - Selecione - </option>
                            @foreach($tags as $item)
                                <option value="{{$item['id']}}">{{$item['name']}}</option>
                            @endforeach
                        </select>
                        <button class="btn btn btn-primary br-tl-0 br-bl-0" id="setTimeButton" wire:click='addTag'>
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>                    

                </div>
            </div>
            <div class="btn-list">
                <button class="btn btn-primary" type='button' wire:click='importarDespesa'>Importar</button>
            </div>
        </div>
    </div>     
 </div>
    <!-- Dados Fornecedor -->
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12">
                <div class="card bg-primary text-white">
                    <div class="card-body text-center">
                        <img class="avatar avatar-xxl brround mb-5" src="{{asset('img/icons/png/map-pointer.png')}}" alt="img">
                        <h4 class="font-weight-semibold mb-1">Fornecedor</h4>
                        <p class="fs-12 mb-0">{{$dadosNFE['dadosFornecedor']['nome']}} - {{$dadosNFE['dadosFornecedor']['uf']}}</p>
                        <p class="fs-12 mb-0"></p>
                    </div>
                    <div class="card-body border-transparent">
                        <div class="row mb-3">
                            <div class="col-4 fs-12">CNPJ</div>
                            <div class="col-8 font-weight-semibold fs-12">{{$dadosNFE['dadosFornecedor']['cnpj']}}</div>
                        </div>
                        <!--
                        <div class="row">
                            <div class="col-4 fs-12">Endereço</div>
                            <div class="col-8 font-weight-semibold fs-12">Bachelors of Engineering</div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-6">
                <div class="card bg-warning">
                    <div class="card-body">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <h6 class="text-white">Total</h6>
                                <h2 class="text-white m-0 font-weight-bold">R$ {{number_format($dadosNFE['dadosCompra']['valor_total'],2,',','.')}}</h2>
                            </div>
                            <div class="ml-auto">
                                <span class="text-white display-6"><i class="fa fa-usd fa-2x"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-6">
                <div class="card bg-primary">
                    <div class="card-body">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <h6 class="text-white">Itens</h6>
                                <h2 class="text-white m-0 font-weight-bold">{{str_pad(count($dadosNFE['listaProdutos']),3,'0',STR_PAD_LEFT)}}</h2>
                            </div>
                            <div class="ml-auto">
                                <span class="text-white display-6"><i class="fa fa-file-text-o fa-2x"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Compra</div>
                </div>
                <div class="card-body">
                    <h3 class="font-weight-bold">{{strftime('%d de %B de %Y', strtotime($dadosNFE['dadosCompra']['horario']['data']))}}</h3>
                    <h4>{{$dadosNFE['dadosCompra']['horario']['hora']}}</h4>
                    <p>{{strftime('%A, %d ',strtotime(trim(strval($dadosNFE['dadosCompra']['horario']['data']))))}}</p>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-group">
                                @foreach($dadosNFE['listaProdutos'] as $key => $item)
                                    <li class="list-group-item">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" wire:model="itensSelecionados" name="item{{$key}}" value="{{$key}}" checked>
                                                <span class="custom-control-label">
                                                    <div class="row">
                                                        <div class="col-9">
                                                            {{$item['produto']}} x {{$item['qtde'].$item['und']}} = R$ {{number_format($item['valor'],2,',','.')}}
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="btn-list">
                                                            <button class="btn btn-icon btn-light btn-sm" style='border:none; background:none'>
                                                                <i class="fa fa-close text-danger"></i>
                                                            </button>
                                                        </div>
                                                        </div>
                                                    </div>                                                
                                                </span>
                                                
                                            </label>                                       
                                        </div>                                    
                                        
                                    </li>
                                @endforeach
                                {{--<li class="list-group-item"><i class="fa fa-cog text-success" aria-hidden="true"></i> Cras sit amet nibh libero</li>--}}
                                
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>    
   
</div>