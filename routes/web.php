<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\TesteGoogle;
use App\Http\Livewire\{
    //Principal
    Dashboard\Dashboard as Painel,

    //Configurações
    Configuracoes\Desenvolvedor\Terminal,
    User\Dashboard as UserDashboard,

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {   
    Route::get('/dashboard',Painel::class)->name('dashboard');           
    Route::prefix('configuracoes')->name('config.')->group(function(){
        Route::get('/terminal',Terminal::class)->name('terminal');
        Route::get('/usuarios',UserDashboard::class)->name('users');
    });
});
