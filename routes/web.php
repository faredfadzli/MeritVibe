<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\ParticipationController;

Route::middleware('guest')->get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.submit');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', action: [HomeController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', action: [HomeController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::name('profile.')->prefix('profile/')->group(function () {
        Route::get('create', action: [ProfileController::class, 'create'])->name('create');
        Route::post('store',[ProfileController::class, 'store'])->name('store');
    });
    Route::name('programme.')->prefix('programme/')->group(function () {
       Route::get('create', action: [ProgrammeController::class, 'create'])->name('create');
       Route::post('store',[ProgrammeController::class, 'store'])->name('store');
       Route::get('index', action: [ProgrammeController::class,'index'])->name('index');
       Route::get('{programme}/join', [ProgrammeController::class, 'createParticipation'])->name('join');
       Route::post('{programme}/store', [ProgrammeController::class, 'storeParticipation'])->name('partistore');
       Route::get('{programme}/view', [ProgrammeController::class, 'viewApplication'])->name('viewApplication');
       Route::post('{programme}/approve', [ProgrammeController::class, 'approveParticipant'])->name('approveParticipant');
       Route::post('{programme/reject', [ProgrammeController::class, 'rejectParticipant'])->name('rejectParticipant');
       Route::get('{programme}/edit', [ProgrammeController::class, 'edit'])->name('edit');
       Route::put('{programme}/update', [ProgrammeController::class, 'update'])->name('update');
       Route::get('user/list', [ProgrammeController::class, 'userIndex'])->name('userIndex');
       Route::get('participation/{user_id}/list', [ProgrammeController::class, 'participationList'])->name('participationList');
    });

    Route::post('/programme/{programme}/participant/{participant}/comment', [ProgrammeController::class, 'addComment'])->name('programme.addComment');

    //Route::post('/programme/store', [ProgrammeController::class, 'store'])->name('programme.store');




//Route::name('participation.')->prefix('participation/')->group(function () {
  //  Route::get('create', [ParticipationController::class, 'create'])->name('create');
    //Route::post('store', [ParticipationController::class, 'store'])->name('store');
//});




});
;
