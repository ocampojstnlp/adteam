<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministratorController as AdminCon;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/', [AdminCon::class, 'index'])->name('index');
});