<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TransactionController;

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

// Redirect the root URL to the students index page
Route::get('/', function () {
    return redirect()->route('students.index');
});

// Resource routes for Students (generates all CRUD routes)
Route::resource('students', StudentController::class);

// Resource routes for Books (generates all CRUD routes)
Route::resource('books', BookController::class);

// Custom routes for Transactions
Route::get('transactions', [TransactionController::class, 'index'])->name('transactions.index');
Route::get('transactions/create', [TransactionController::class, 'create'])->name('transactions.create');
Route::post('transactions', [TransactionController::class, 'store'])->name('transactions.store');
Route::put('transactions/{transaction}', [TransactionController::class, 'update'])->name('transactions.update');
Route::delete('transactions/{transaction}', [TransactionController::class, 'destroy'])->name('transactions.destroy');
