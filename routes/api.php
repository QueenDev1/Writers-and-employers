<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MpesaSTKPUSHController;
use App\Http\Controllers\writermpesaSTKPUSHController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('confirm', [MpesaSTKPUSHController::class, 'STKConfirm'])->name('mpesa.confirm');



Route::post('stkpush', [MpesaSTKPUSHController::class, 'STKPush'])->name('stkpush');
Route::get('testpass', [MpesaSTKPUSHController::class, 'lipaNaMpesaPassword'])->name('stkpush');


    
    Route::post('/stk/push/callback', [MpesaSTKPUSHController::class, 'MpesaRes']);






    Route::post('confirm', [writermpesaSTKPUSHController::class, 'STKConfirm'])->name('mpesa.confirmm');

    Route::post('stkpushh', [writermpesaSTKPUSHController::class, 'STKPush'])->name('stkpushh');
           
     Route::post('/stk/push/callback/url', [writermpesaSTKPUSHController::class, 'MpesaRess'])->name('MpesaRess');





// Mpesa STK Push Callback Route


Route::post('v1/access/token', 'MpesaController@generateAccessToken');
Route::post('api/validationResponse', 'MpesaController@createValidationResponse');
Route::post('api/validation', 'MpesaSTKPUSHController@mpesaValidation');
Route::post('api/confirmation','MpesaSTKPUSHController@mpesaConfirmation');