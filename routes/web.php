<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, 'view_landing']);

Route::middleware(['auth'])->group(function () {

});

require __DIR__.'/auth.php';
