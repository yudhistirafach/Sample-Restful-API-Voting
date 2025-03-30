<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\VotingCandidateController;
use App\Http\Controllers\VotingController;
use App\Http\Controllers\VotingEventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/auth', [AuthController::class, 'login'])->name('auth');
Route::get('/voting-events', [VotingEventController::class, 'getAllVotingEvents']);
Route::get('/voting-candidates/{votingEventId}', [VotingCandidateController::class, 'getCandidateByVotingEvent']);
Route::post('/vote/{votingEventId}', [VotingController::class, 'employeeVoting']);
