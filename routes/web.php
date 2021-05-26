<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\DiferencialController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ImovelController;
use App\Http\Controllers\Admin\EquipamentoController;
use App\Http\Controllers\Admin\StatusController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteImovelProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/admin', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('admin');
Route::post('/admin/do_login', [App\Http\Controllers\Admin\AuthController::class, 'do_login'])->name('admin.do_login');
Route::get('/admin/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');
Route::get('/admin/password', [App\Http\Controllers\Admin\AuthController::class, 'password'])->name('admin.password');

Route::group(['middleware' => 'auth'], function () {

    Route::prefix('admin')->name('admin.')->group(function(){

        Route::prefix('dashboard')->name('dashboard.')->group(function(){
            Route::get('', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');
        });

        Route::resources([
            'users' => UserController::class,
            'banners' => BannerController::class,
            'categorias' => CategoriaController::class,
            'imoveis' => ImovelController::class,
            'status' => StatusController::class,
            'diferenciais' => DiferencialController::class,
        ]);

        // IMOVEIS
        Route::prefix('imoveis')->name('imoveis.')->group(function(){
            Route::get('/{imovel}/edit}', [ImovelController::class, 'edit'])->name('edit');
            Route::put('/update/{imovel}', [ImovelController::class, 'update'])->name('update');
            Route::post('/delete', [ImovelController::class, 'delete'])->name('delete');
            Route::post('/uploadImages', [ImovelController::class, 'uploadImages'])->name('uploadImages');
            Route::get('/makeCover/{image}', [ImovelController::class, 'makeCover'])->name('makeCover');
            Route::get('/deleteImage/{image}', [ImovelController::class, 'deleteImage'])->name('deleteImage');
            Route::post('/uploadPlantas', [ImovelController::class, 'uploadPlantas'])->name('uploadPlantas');
            Route::get('/deletePlanta/{planta}', [ImovelController::class, 'deletePlanta'])->name('deletePlanta');
            Route::post('/uploadLogo', [ImovelController::class, 'uploadLogo'])->name('uploadLogo');
            Route::get('/deleteLogo/{logo}', [ImovelController::class, 'deleteLogo'])->name('deleteLogo');
            Route::post('/insertProgress', [ImovelController::class, 'insertProgress'])->name('insertProgress');
            Route::get('/deleteProgress/{id}', [ImovelController::class, 'deleteProgress'])->name('deleteProgress');
        });

        // CATEGORIAS
        Route::prefix('categorias')->name('categorias.')->group(function(){
            Route::post('/delete', [CategoriaController::class, 'delete'])->name('delete');
        });
        

        // DIFERENCIAIS
        Route::prefix('diferenciais')->name('diferenciais.')->group(function(){
            Route::get('/{diferencial}/edit}', [DiferencialController::class, 'edit'])->name('edit');
            Route::put('/update/{diferencial}', [DiferencialController::class, 'update'])->name('update');
            Route::post('/delete', [DiferencialController::class, 'delete'])->name('delete');
        });

        // STATUS
        Route::prefix('status')->name('status.')->group(function(){
            Route::post('/delete', [StatusController::class, 'delete'])->name('delete');
        });

        // BANNERS
        Route::prefix('banners')->name('banners.')->group(function(){
            Route::post('/delete', [BannerController::class, 'delete'])->name('delete');
        });

        // USUÁRIOS
        Route::prefix('users')->name('users.')->group(function(){
            Route::post('/delete', [UserController::class, 'delete'])->name('delete');
        });


        // MESSAGES
        Route::prefix('messages')->name('messages.')->group(function(){
            Route::get('', [MessageController::class, 'index'])->name('index');
            Route::get('/{message}', [MessageController::class, 'show'])->name('show');
            Route::post('/delete', [MessageController::class, 'delete'])->name('delete');
        });

    });
    
});


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('sobre-nos')->name('quemsomos.')->group(function(){
    Route::get('/', [App\Http\Controllers\QuemSomosController::class, 'index'])->name('index');
});

Route::prefix('venda-seu-terreno')->name('venderterreno.')->group(function(){
    Route::get('/', [App\Http\Controllers\VenderTerrenoController::class, 'index'])->name('index');
});

Route::prefix('imoveis')->name('imoveis.')->group(function(){
    Route::get('/', [App\Http\Controllers\ImovelController::class, 'index'])->name('index');
    Route::get('/{slug}', [App\Http\Controllers\ImovelController::class, 'info'])->name('info');
});

Route::prefix('contato')->name('contato.')->group(function(){
    Route::get('/', [App\Http\Controllers\ContatoController::class, 'index'])->name('index');
    Route::post('/enviaEmail', [App\Http\Controllers\ContatoController::class, 'enviaEmail'])->name('enviaEmail');
});
