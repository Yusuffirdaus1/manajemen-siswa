<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return redirect()->route('siswa.index');
});

// Resource route untuk semua fungsi CRUD
Route::resource('siswa', SiswaController::class);
