<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElasticSearch\CopyDataWithDatabaseMySqlController;
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

Route::get('/copy-data-with-database-to-elasticsearch', [CopyDataWithDatabaseMySqlController::class, 'index'])->name('copy.data.with.database.to.elasticsearch');


