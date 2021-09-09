<?php

use Illuminate\Support\Facades\Route;

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

/*Rotas de acesso*/

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']); /*Método GET, que dá acesso ao index*/

Route::get('/events/all', [EventController::class, 'events']); /*Método GET, que dá acesso a todos os eventos*/

Route::get('/events/create', [EventController::class, 'create']); /*Método GET, que dá acesso ao cadastro de eventos*/

Route::post('/events', [EventController::class, 'store']); /*Método de requisição POST, solicita que o servidor web aceite os dados anexados no corpo da mensagem de requisição para armazenamento.*/

Route::delete('/events/{id}', [EventController::class, 'destroy']); /*Método DELETE, fazer a remoção de dados*/

Route::get('events/edit/{id}', [EventController::class, 'edit']); /*Método GET, que dá acesso a página de edição dos dados*/

Route::put('events/update/{id}', [EventController::class, 'update']); /*Método PUT, realiza a atualização dos dados*/

Route::get('events/filters', [EventController::class, 'filters']); /*Método GET, que dá acesso aos filtros*/