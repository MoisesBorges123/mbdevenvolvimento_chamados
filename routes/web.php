<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\TesteGoogle;
use App\Http\Livewire\{
    //Principal
    Dashboard\Dashboard as Painel,
    Payments\Dashboad as Payments,
    Payments\Qrcode as PaymentsQrcode,
    Lancamentos\Dashboard as Lancamentos,
    Purchases\Dashboard as Purchases,
    BankingCounts\Dashboard as BankingCounts,
    //Configurações
    Configuracoes\Desenvolvedor\Terminal,
    User\Dashboard as UserDashboard,
    Typeslan\Dashboard as Typelan,
    Categorlan\Dashboard as Categorlan,
    Tags\Dashboard as Tags,

    };
use App\Models\Payment;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/',function(){
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {   
    Route::get('/dashboard',Painel::class)->name('dashboard');           
    Route::get('/contas',BankingCounts::class)->name('bankingcounts');
    Route::get('/despesas',PaymentsQrcode::class)->name('payments.qrcode');
    Route::get('/pagamentos',Payments::class)->name('payments');
    Route::get('/recebimentos',Lancamentos::class)->name('lancamentos');
    Route::prefix('configuracoes')->name('config.')->group(function(){
        Route::get('/tags', Tags::class)->name('tag');
        Route::get('/grupos-despesa',Categorlan::class)->name('categorlan');
        Route::get('/terminal',Terminal::class)->name('terminal');
        Route::get('/usuarios',UserDashboard::class)->name('users');
    });
});
