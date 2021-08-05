<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\Kayu\KayuComponent;
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
    return view('auth.login');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
// });

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
    Route::get('/kayu', KayuComponent::class)->name('kayu');
});
// Route::middleware(['auth:sanctum', 'verified', 'accessrole'])->group(function(){
//     Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
//     Route::get('/posts', PostComponent::class)->name('post');
// });
