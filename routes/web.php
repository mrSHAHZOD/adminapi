<?php

use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\ResumeController;
use App\Http\Controllers\admin\TeamtController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Cache is cleared';
});

Route::get('/clear-view', function() {
    Artisan::call('view:clear');
    return 'View cache is cleared';
});

Route::get('/clear-config', function() {
    Artisan::call('config:clear');
    return 'Config cache is cleared';
});

Route::get('/clear-route', function() {
    Artisan::call('route:clear');
    return 'Route cache is cleared';
});

Route::get('/clear-session', function() {
    Artisan::call('session:gc');
    return 'Old sessions are cleared';
});



Route::get('/', function () {
    return view('welcome');
});
//PDF
Route::get('items/{id}', [ItemController::class, 'show']);
Route::get('items/{id}/pdf', [ItemController::class, 'downloadPDF']);

Route::get('items/{id}/resumet', [ItemController::class, 'downloadPDF']);
//admin

Route::prefix('admin/')->name('admin.')->middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', function(){ return view('admin.layouts.dashboard'); });

    Route::resources([
        'team' => TeamtController::class,
        'contact' => ContactController::class,
        'news' => NewsController::class,
        'resume' => ResumeController::class,

    ]);


});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// routes/web.php





