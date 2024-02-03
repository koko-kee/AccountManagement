<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/clients',[ClientController::class,'AfficherClient'])->name('client.list');
Route::get('/clients/create',[ClientController::class,'create'])->name('client.create');
Route::post('/clients/create',[ClientController::class,'store'])->name('client.store');
Route::get('/clients/delete/{id}',[ClientController::class,'delete'])->name('client.delete');
Route::get('/clients/edit/{id}',[ClientController::class,'edit'])->name('client.edit');
Route::post('/clients/update/{id}',[ClientController::class,'update'])->name('client.update');


Route::get('/account/create',[AccountsController::class,'create'])->name('accounts.create');






