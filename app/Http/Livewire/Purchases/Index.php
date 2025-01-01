<?php

namespace App\Http\Livewire\Purchases;

use App\Models\CategoriaLanTypeLan as ModelsCategoriaLanTypeLan;
use App\Models\Lancamento;
use Livewire\Component;
use App\Models\Tag;
use App\Models\Cont;
use Illuminate\Support\Facades\DB;
use App\Models\Supplier;
use App\Models\Purchase;
use App\Models\Product;
class Index extends Component
{
    //31241104737552003315651100001153791470782550
    public $dadosNFE;
    public $itensSelecionados = [];
    public $grupos;
    public $grupo;
    public $conta;
    public $contas;
    public $tags = [];
    public $tag;
    public $chaveNfe;
    protected $listeners = ['saveTag'];

    public function mount()
    {        
        
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        $this->itensSelecionados = array_keys($this->dadosNFE['listaProdutos']);
        $this->tags = Tag::where('user_id',auth()->user()->id)
                            ->where('visible',1)
                            ->get();
        $this->grupos = ModelsCategoriaLanTypeLan::where('user_id',auth()->user()->id)
                        ->where('naturelan_id',2)
                        ->get();
        $this->contas = auth()->user()->contas->toArray();
        

    }

    public function render()
    {
        return view('livewire.purchases.index');
    }

    public function addTag()
    {
        try{
            
            $this->emit('swal-modal',[
                'message'=>view('livewire.purchases.__addTag')->render(),
                'title'=>'Nova Tag',
                'showConfirmButton'=>false
            ]);
        } catch(\Exception $e) {
            $this->emit('toast',$e->getMessage(),'error');
        }
    }

    public function saveTag($param)
    {
        try{
            $param  = json_decode($param, true);
            DB::beginTransaction();
                $newTag = Tag::create([
                    'name'=>$param['name'],
                    'description'=>$param['description'],
                    'user_id'=>auth()->user()->id,
                    'visible'=>true
                ]);
            DB::commit();
            $this->emit('toast','Tag cadastrada.','success');
            $this->tag = $newTag->id;
        }catch(\Exception $e) {
            DB::rollBack();
            $this->emit('toast',$e->getMessage(),'error');
        } finally{
            $this->tags = Tag::where('user_id',auth()->user()->id)
                            ->where('visible',1)
                            ->get();
        }
    }

    public function importarDespesa()
    {
        
        try{
            DB::beginTransaction();
            $supplier = Supplier::where('cnpj',$this->dadosNFE['dadosFornecedor']['cnpj'])->first();
            if(empty($supplier)) {
                
                $supplier = Supplier::create(                
                    [
                        'cnpj'=>$this->dadosNFE['dadosFornecedor']['cnpj'],
                        'name'=>$this->dadosNFE['dadosFornecedor']['nome'],
                        'cnpj'=>$this->dadosNFE['dadosFornecedor']['cnpj'],
                        'uf'=>$this->dadosNFE['dadosFornecedor']['uf'],
                    ]
                );
            }
            
            if (!empty($this->chaveNfe)) {
                
                $existeCompra = Purchase::where('chave_nfe',$this->chaveNfe)->get()->count();
                if (!empty($existeCompra) && $existeCompra > 0) {
                    throw new \Exception('Essa compra já foi cadastrada.');
                }
                
           
                $carrinhoCompra = Purchase::create([
                    'supplier_id'=>$supplier->id,
                    'description'=>$this->description ?? '',
                    'value' => $this->dadosNFE['dadosCompra']['valor_total'],
                    'date_buy'=> $this->dadosNFE['dadosCompra']['horario']['data'].'T'.$this->dadosNFE['dadosCompra']['horario']['hora'],
                    'date_recive'=>$this->dadosNFE['dadosCompra']['horario']['data'],
                    'chave_nfe' => $this->chaveNfe
                ]);
                
                    foreach($this->dadosNFE['listaProdutos'] as $key => $produto) {
                        $produtoBD = Product::where('codigo',$produto['codigo'])->first();
                        if(empty($produtoBD)) {
                            $produtoBD = Product::create([
                                'name'=>$produto['produto'],
                                'undType'=>$produto['und'],
                                'codigo'=>$produto['codigo'],
                                'description'=>'Cadastro importador'
                            ]);
                        }
                        if (in_array($key,$this->itensSelecionados)) {
                            $carrinhoCompra->listaProdutos()->attach($produtoBD->id,['quant'=>$produto['qtde'],'value'=>$produto['valor']]);
                            $produtoBD = [];
                        }
                    }
                
                    $lancamento = Lancamento::create([
                        'user_id'=>auth()->user()->id,
                        'categorialan_id'=>$this->grupo,
                        'date_transaction'=>$this->dadosNFE['dadosCompra']['horario']['data'],
                        'value_transaction'=>$this->dadosNFE['dadosCompra']['valor_total'],
                        'description'=>'Lançamento importador',
                        'link_nfe'=>$this->chaveNfe,
                        'transact_type'=>2,
                        'count_id'=>$this->conta
                    ]);

                    if(!empty($this->tag)){
                        $lancamento->tags()->attach($this->tag);
                    }
                DB::commit();

                $this->emit('swal-modal',[
                    'message'=>'Compra importada!',
                    'type'=>'success'
                ]);
                $this->reset();
                $this->emit('whatsappNotify','5533987356018','Compra R$'.number_format($this->dadosNFE['dadosCompra']['valor_total'],2,',','.').' lançada.');
            } else {
                throw new \Exception('Falha ao carregar a chave de acesso do cupom.');
            }
            
        }catch(\Exception $e) {
            DB::rollBack();
            $this->emit('swal',$e->getMessage(),'error');

        }
    }
}
