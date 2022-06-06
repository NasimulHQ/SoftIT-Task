<?php

use App\Http\Controllers\EmployeeController;
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
    return view('frontEnd.index');
});

// Route::resources([
//     'employeers' => EmployeeController::class
// ]);

Route::get('get-all-employee', [EmployeeController::class, 'getAllEmployee']);
Route::get('download-pdf', [EmployeeController::class, 'downloadPDF']);

Route::get('day-count', function(){
    return view('date.index');
});
