<?php

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

/*Route::get('/', [\App\Http\Controllers\BotController::class, 'sendMessage']);
Route::get('setwebhook', function(App\Models\User $user){
    $http  = \Illuminate\Support\Facades\Http::get('https://api.telegram.org/bot5203032567:AAE6r0SsNksa9hlo_mn7aAIf3r7KcL6x3rU/setWebhook?url=https://cryptorate.kz/webhook');
    dd(json_decode($http->body()));
});
Route::post('/webhook', [\App\Http\Controllers\WebhookController::class, 'index']);
Route::get('/key', [\App\Http\Controllers\BotController::class, 'sendKeyboard']);
Route::get('/info', function() {
    $http = \Illuminate\Support\Facades\Http::get('https://api.telegram.org/bot5203032567:AAE6r0SsNksa9hlo_mn7aAIf3r7KcL6x3rU/getWebhookInfo');
    dd(json_decode($http->body()));
});
Route::get('/sendMessage', [\App\Http\Controllers\BotController::class, 'sendMessage']);
*/
