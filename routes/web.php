<?php

use App\Http\Controllers\MediationController;
use App\Http\Controllers\TicketController;
use App\Mail\MediationNotify;
use App\Mediation;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    $model = Mediation::all();
    return view('welcome', compact('model'));
});

Route::post('/store', [TicketController::class, 'store'])->name('ticket.store');

Route::get('/email', function () {
    Mail::to('teste@teste.com')->send(new MediationNotify());
});
