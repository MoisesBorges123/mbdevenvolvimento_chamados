<div class="card">
    <div class="card-header">
        <h5 class="card-title">Importar usando...</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="d-md-flex">
                    <div class="">
                        <div class="panel panel-primary tabs-style-3">
                            <div class="tab-menu-heading" style="border:none">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class=" nav panel-tabs">
                                        <li class="">
                                            <a wire:click="chosenOption('qrcode')" href="#tab21" @if(empty($option) || $option == 'qrcode') class="active" @endif data-toggle="tab">
                                                <i class="fa fa-lg fa-qrcode mr-2"></i> Qrcode
                                            </a>
                                        </li>
                                        <li><a wire:click="chosenOption('file')" @if(!empty($option) && $option == 'file') class="active" @endif href="#tab23" data-toggle="tab"><i class="fa fa-lg fa-file-code-o mr-2"></i>Arquivo XML</a>
                                        </li>
                                        <li><a wire:click="chosenOption('chave')" @if(!empty($option) && $option == 'chave') class="active" @endif href="#tab24" data-toggle="tab"><i class="fa fa-lg fa-key mr-2"></i>Chave de Acesso</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                   
                        <div class="panel-body tabs-menu-body">
                            <div class="tab-content">
                                <div class="tab-pane @if(empty($option) || $option == 'qrcode') active @endif " id="tab21">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12 col-sm-12">
                                            <h5>Aponte a sua camera para o Qrcode ou Código de barras do seu <b>Cupom Fiscal</b> ou <b>Nota
                                                    Fiscal</b> para efetuar a leitura.</h5>
                                            <button class="btn btn-primary" id='btn-openCamera' onclick="openCamera()">Scannear
                                                &nbsp;&nbsp;<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
                                                    viewBox="0 -960 960 960" width="24" style="fill:#fff">
                                                    <path
                                                        d="M80-707v-173h173v60H140v113H80Zm0 627v-173h60v113h113v60H80Zm627 0v-60h113v-113h60v173H707Zm113-627v-113H707v-60h173v173h-60ZM708-251h63v63h-63v-63Zm0-126h63v63h-63v-63Zm-63 63h63v63h-63v-63Zm-63 63h63v63h-63v-63Zm-63-63h63v63h-63v-63Zm126-126h63v63h-63v-63Zm-63 63h63v63h-63v-63Zm-63-63h63v63h-63v-63Zm252-332v252H519v-252h252ZM440-440v252H188v-252h252Zm0-332v252H188v-252h252Zm-50 534v-152H238v152h152Zm0-332v-152H238v152h152Zm331 0v-152H569v152h152Z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="col-md-10">
                                            <div id="reader" width="700px"></div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="tab-pane @if(!empty($option) && $option == 'file') active @endif" id="tab23">
                                    <div class="col-lg-4 col-sm-12">
                                        <form wire:submit.prevent='sendXML'>
                                            @if ($xmlFile)
                                            <img class='mb-3' style="width:4rem" src="{{ asset('img/icons/xml.png') }}">
                    
                                            @endif
                                            <div class="input-group">
                                                <input type="file" class='d-none' id='inputFileXml' wire:model="xmlFile" />
                                                <button class="btn btn-primary" @if ($xmlFile) type="submit" @else type="button"
                                                    id='importXmlFile' @endif>
                                                    @if ($xmlFile)
                                                    Enviar XML
                                                    @else
                                                    Importa XML
                                                    @endif
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane @if(!empty($option) && $option == 'chave') active @endif " id="tab24">
                                    <div class="col-md-12">
                                        <div class="form">
                                            <div class="form-row">
                                                <div class="form-group col-4">
                                                    <label for="estadoSelect" class="form-label">Selecione o estado:</label>
                                                    <select id="estadoSelect" class="form-select form-control" wire:model='estado'>
                                                        <option value="" selected disabled>Escolha um estado</option>
                                                        <option value="AC">Acre</option>
                                                        <option value="AL">Alagoas</option>
                                                        <option value="AP">Amapá</option>
                                                        <option value="AM">Amazonas</option>
                                                        <option value="BA">Bahia</option>
                                                        <option value="CE">Ceará</option>
                                                        <option value="DF">Distrito Federal</option>
                                                        <option value="ES">Espírito Santo</option>
                                                        <option value="GO">Goiás</option>
                                                        <option value="MA">Maranhão</option>
                                                        <option value="MT">Mato Grosso</option>
                                                        <option value="MS">Mato Grosso do Sul</option>
                                                        <option value="MG">Minas Gerais</option>
                                                        <option value="PA">Pará</option>
                                                        <option value="PB">Paraíba</option>
                                                        <option value="PR">Paraná</option>
                                                        <option value="PE">Pernambuco</option>
                                                        <option value="PI">Piauí</option>
                                                        <option value="RJ">Rio de Janeiro</option>
                                                        <option value="RN">Rio Grande do Norte</option>
                                                        <option value="RS">Rio Grande do Sul</option>
                                                        <option value="RO">Rondônia</option>
                                                        <option value="RR">Roraima</option>
                                                        <option value="SC">Santa Catarina</option>
                                                        <option value="SP">São Paulo</option>
                                                        <option value="SE">Sergipe</option>
                                                        <option value="TO">Tocantins</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-8">
                                                    <label for="">Chave de acesso da Nota Fiscal</label>
                                                    <div class="input-group">
                                                        <input type="text" placeholder="Insira a chave ou link de acesso" wire:model="chaveAcesso"
                                                            class='form-control' placeholder="" maxlength="44">
                                                        <button type="button" wire:click='buscarPortalSped' class="btn btn-primary">Buscar
                                                            &nbsp;&nbsp;<i class="fa fa-search"></i></button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(!empty($dadosNFE))
                <div class="col-md-12">
                    <livewire:purchases.index :chaveNfe="$linkNfe" :dadosNFE="$dadosNFE">
                </div>
            @endif
        </div>

      
    </div>


</div>
@push('js')

<!-- INTERNAL File-Uploads Js-->
<script src="{{asset('./assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
<script src="{{asset('./assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
<script src="{{asset('./assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
<script src="{{asset('./assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
<script src="{{asset('./assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

<!-- INTERNAL File uploads js -->
<script src="{{asset('./assets/plugins/fileupload/js/dropify.js')}}"></script>
<script src="{{asset('./assets/js/filupload.js')}}"></script>
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script>
    let html5QrcodeScanner = new Html5QrcodeScanner(
        "reader",  
        { 
            fps: 60, qrbox: {width: 450, height: 250}, 
            useBarCodeDetectorIfSupported:true 
        },
        false
        );
        let camera = false;
        function openCamera()
        {
            button = document.getElementById('btn-openCamera');
            if(!camera){
                camera = true            
                html5QrcodeScanner.render(onScanSuccess, onScanFailure);
                button.innerHTML = 'Fechar Câmera';
            }else{
                button.innerHTML = 'Abrir Câmera';
                html5QrcodeScanner.clear();
                camera = true;  
            }
        }
       
        function onScanSuccess(decodedText, decodedResult) {
            // handle the scanned code as you like, for example:
            console.log(`Leitura:  ${decodedText}`, decodedResult);
            @this.leitura = decodedResult;
            html5QrcodeScanner.clear();
            camera = false;
            button.innerHTML = 'Abrir Câmera'; 
        }  

        function onScanFailure(error) {
        // handle scan failure, usually better to ignore and keep scanning.
        // for example:
        //console.warn(`Code scan error = ${error}`);
        }
      
        $(document).on('click','#importXmlFile',function(){
            $('#inputFileXml').click();
            $('#inputFileXml').removeClass('d-none');
            //$('#searchsubmit').removeAttr("type").attr("type", "submit");
        });
        


</script>
@endpush
@push('css')

<!-- INTERNAL File Uploads css -->
<link href="{{asset('./assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />
<!-- INTERNAL File Uploads css-->
<link href="{{asset('./assets/plugins/fileupload/css/fileupload.css')}}" rel="stylesheet" type="text/css" />
<!-- INTERNAL Mutipleselect css-->
<link rel="stylesheet" href="{{asset('./assets/plugins/multipleselect/multiple-select.css')}}">

@endpush