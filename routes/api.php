<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\Deals;
use App\Http\Controllers\EmailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('agent-properties/{id}', [AgentController::class, 'agentproperties'])->name('apiagentproperties');
Route::get('get-emails/{id}', [EmailController::class, 'getEmails'])->name('getEmails');
Route::get('get-emails/sent/{id}', [EmailController::class, 'getSent'])->name('getSent');
Route::get('get-deals/{id}', [Deals::class, 'getDealsHome'])->name('getDeals');
Route::post('updateprofile/{id}', [AgentController::class, 'updateprofilep'])->name('updateprofile2');
Route::get('getProfile/{id}', [AgentController::class, 'getProfile'])->name('getProfile');
Route::post('uploadselfie/{id}', [AgentController::class, 'uploadSelfiep'])->name('uploadselfp');
Route::post('uploadid/{id}', [AgentController::class, 'uploadidp'])->name('uploadidp');
Route::post('uploadselfieid/{id}', [AgentController::class, 'uploadselfieidp'])->name('uploadselfieidp');


