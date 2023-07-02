<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElasticSearch\ElasticSearchTestController;
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

Route::get('/get-data-with-database-to-elasticsearch', [ElasticSearchTestController::class, 'index'])->name('get.data.elasticsearch');
Route::get('/copy-data-with-database-to-elasticsearch', [ElasticSearchTestController::class, 'copy'])->name('copy.data.with.database.to.elasticsearch');


