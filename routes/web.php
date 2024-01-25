<?php

use App\Models\Author;
use App\Models\Book;
use App\Models\Client;
use App\Models\Order;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthorController;

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

Route::get('/', function () {
    return view('welcome');
});

##Route::get("/authors", [AuthorController::class, 'index']);

Route::resource('authors', AuthorController::class);

Route::get('/test', function () {
    $order = Order::with('client')->first();
    return $order->client;
});