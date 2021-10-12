<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ComicController;
use App\Http\Controllers\Api\PdfToTextController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api'], function () {
    Route::get('comics', [ComicController::class, 'index']);
    Route::post('comics', [ComicController::class, 'store']);
    Route::get('pdftotext', [PdfToTextController::class, 'convert']);
});
