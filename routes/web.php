<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\TesteGoogle;
use App\Http\Livewire\{
    Dashboard\Dashboard as Painel,
    Callings\OpenCalling,
    Callings\ListCallings,
    Callings\Details,
    Callings\MyCallings\Dashboard as MyCallings,
    Configuracoes\Desenvolvedor\Terminal,
    Setores\Dashboard as Setores,
    };
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
Route::get('/terminal/desenvolvedor/moises',Terminal::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {   
    Route::get('/dashboard',Painel::class)->name('dashboard');       
    Route::get('/abrir-chamado',OpenCalling::class)->name('open-calling');       
    Route::get('/meus-chamados',MyCallings::class)->name('my-calling');       
    Route::get('/detalhes/{id}/{external}',Details::class)->name('details-calling');
    Route::prefix('relatorios')->name('report.')->group(function(){
        Route::get('/chamados',ListCallings::class)->name('calling');               
    });
    Route::prefix('configuracoes')->name('config.')->group(function(){
        Route::get('/setores',Setores::class)->name('setores');               
    });
    Route::get('/terminal',Terminal::class)->name('terminal');
});
