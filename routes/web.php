<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtapaController;
use App\Http\Controllers\FaseController;
use App\Http\Controllers\InsumoController;
use App\Http\Controllers\ServicoController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('etapas',EtapaController::class)
->names('etapas');

Route::get('/etapas-index',[EtapaController::class,'index'])->name('etapas.index');
Route::get('/etapas-create',[EtapaController::class,'create'])->name('etapas.create');
Route::post('/etapas-store',[EtapaController::class,'store'])->name('etapas.store');
Route::get('/etapas-edit/{etapa}',[EtapaController::class,'edit'])->name('etapas.edit');
Route::put('/etapas-update/{etapa}',[EtapaController::class,'update'])->name('etapas.update');
Route::get('/etapas-destroy/{etapa}',[EtapaController::class,'destroy'])->name('etapas.destroy');


Route::get('/servicos-index',[ServicoController::class,'index'])->name('servicos.index');
Route::get('/servicos-create',[ServicoController::class,'create'])->name('servicos.create');
Route::post('/servicos-store',[ServicoController::class,'store'])->name('servicos.store');
Route::get('/servicos-edit/{servico}',[ServicoController::class,'edit'])->name('servicos.edit');
Route::put('/servicos-update/{servico}',[ServicoController::class,'update'])->name('servicos.update');
Route::get('/servicos-destroy/{servico}',[ServicoController::class,'destroy'])->name('servicos.destroy');

Route::get('/insumos-index',[InsumoController::class,'index'])->name('insumos.index');
Route::get('/insumos-create',[InsumoController::class,'create'])->name('insumos.create');
Route::post('/insumos-store',[InsumoController::class,'store'])->name('insumos.store');
Route::get('/insumos-edit/{insumo}',[InsumoController::class,'edit'])->name('insumos.edit');
Route::put('/insumos-update/{insumo}',[InsumoController::class,'update'])->name('insumos.update');
Route::get('/insumos-destroy/{insumo}',[InsumoController::class,'destroy'])->name('insumos.destroy');

Route::get('/fases-index',[FaseController::class,'index'])->name('fases.index');
Route::get('/fases-create',[FaseController::class,'create'])->name('fases.create');
Route::post('/fases-store',[FaseController::class,'store'])->name('fases.store');
Route::get('/fases-edit/{fase}',[FaseController::class,'edit'])->name('fases.edit');
Route::put('/fases-update/{fase}',[FaseController::class,'update'])->name('fases.update');
Route::get('/fases-destroy/{fase}',[FaseController::class,'destroy'])->name('fases.destroy');

Route::post('/fases-filtrar',[FaseController::class,'filtrarEtapa'])->name('fases.filtrarEtapa');
