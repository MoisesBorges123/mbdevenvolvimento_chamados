<?php

namespace App\Http\Livewire\Payments;

use App\Models\EstadoConsultaNfe;
use App\Packages\NFE\BuscadorQR;
use App\Packages\NFE\ImportarXML;
use Livewire\Component;
use Livewire\WithFileUploads;

use function PHPUnit\Framework\throwException;

class Qrcode extends Component
{
    use WithFileUploads;
    public $leitura;
    public $chaveAcesso;
    public $xmlFile;
    public $option;
    public $despesas;
    public $dadosNFE;
    public $linkNfe;  
    public $estado;  
    //43241206989722000288650020000258941076787691
    public const consultaXmlNFE = 'https://consultadanfe.com';
    //?p=31230704737552003315651010001069141384054051|2|1|1|091F22A0FA91BDE135776C0646BA8AC520B6A2C6';
    public function mount()
    {
        
    }
    public function render()
    {
        return view('livewire.payments.qrcode');
    }
    public function updatedLeitura()
    {       
        $this->linkNfe = $this->leitura['decodedText'];
        if(filter_var($this->leitura['decodedText'], FILTER_VALIDATE_URL) !== false){            
            $newBusca = new BuscadorQR($this->leitura['decodedText']);
            $this->dadosNFE = $newBusca->getItensCupomQrCode();
        }else if(strlen($this->leitura['decodedText']) == 44){
            $this->emit('toast','Essa função ainda não está implementa','info');
        }else{
            $this->emit('swal','Ops! Não foi possível identificar o item lido!','warning');
        }
    }
    public function buscarPortalSped()
    {
        try{
            
            if(!empty($this->chaveAcesso && strlen($this->chaveAcesso) == 44)){
                if(!stristr($this->chaveAcesso,'http')) {
                    $acesso = EstadoConsultaNfe::where('estado',$this->estado)->first();
                    $link = $acesso['link'].'?p='.$this->chaveAcesso.'|2|1|1|';                    
                    
                } else {
                    $link = $this->chaveAcesso;                    
                }   
                $this->linkNfe = $link;             
                $newBusca = new BuscadorQR($link);
                $this->dadosNFE = $newBusca->getItensCupomQrCode();
            }else{
                throw new \Exception('A chave digitada não é valida.');
            }
        }catch(\Exception $e)
        {
            $this->emit('swal',$e->getMessage(),'error');
        }
    }
    public function sendXML(){        
        $nfe = new ImportarXML($this->xmlFile->path());
       // dd($nfe->listaCompras);
    }
    public function chosenOption($opcao){
        $this->option = $opcao;
    }

}
